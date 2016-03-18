<?php
	/* Scripts to validate and send mail from the contact form
	 * Nicole Bassen
	 */

$mailSent = false;
// Assume the input contains nothing suspect
$suspect = false;
// Regular expression to search for suspect phrases
$pattern = '/Content-type:|Bcc:|Cc:/i';

// Recursive function that checks for suspect phrases
// Third argument is passed by reference
function isSuspect($value, $pattern, &$suspect) {
    if (is_array($value)) {
        foreach ($value as $item) {
            isSuspect($item, $pattern, $suspect);
        }
    } else {
        if (preg_match($pattern, $value)) {
            $suspect = true;
        }
    }
}

// Check the $_POST array for suspect phrases
isSuspect($_POST, $pattern, $suspect);

// Process the form only if no suspect phrases are found
if (!$suspect) :
	
	// Validate name and assign to a simple variable if not empty
	if (empty($_POST["name"])) {
		$missing[] = "name";
	} else {
		$name = $_POST["name"];
		// Characters other than letters allowed in the name field
		$validChars = array(" ", "-", "'");
		if (!ctype_alpha(str_replace($validChars, "", $name))) {
			$errors[] = "name";
		}	
	}
	
	// Validate email and assign to a simple variable if not empty
	if (empty($_POST["email"])) {
		$missing[] = "email";
	} else {
		$email = $_POST["email"];
		$validemail = filter_var($email, FILTER_VALIDATE_EMAIL);
		if ($validemail) {
            $headers[] = "Reply-to: $validemail";
			$authorized = "-f$validemail";
        } else {
			$errors[] = 'email';
        }
	}
	
	// Assign message to a simple variable if not empty
	if (empty($_POST["message"])) {
		$missing[] = "message";
	} else {
		$message = $_POST["message"];
	}

    // If no errors, create headers and message body
    if (!$errors && !$missing) :
        $headers = implode("\r\n", $headers);
        if (!empty($_POST['subject'])) {
            $subject = $_POST['subject'];
        }
        else {
            $subject = "Message from $name";
        }

        // Initialize message
        $messageBody = '';
        foreach ($required as $field) {
            // Replace underscores in the field names with spaces
            $messageBody .= ucfirst($field) . ": " . $$field . "\r\n\r\n";
		}
        $messageBody = wordwrap($messageBody, 70);
        $mailSent = mail($recipient, $subject, $messageBody, $headers, $authorized);
        if (!$mailSent) {
            $errors['mailfail'] = true;
        }
    endif;
endif;

            
            