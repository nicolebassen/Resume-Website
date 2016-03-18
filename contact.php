<?php
include('redirect.php');

// side section, stylesheet, hyperlinks and scripts
include('includes/aside.php');
?>

        <section class="column col-sm-9 wrapper-section">

          <div class="full col-sm-9">
            
            <?php
            $errors = [];
            $missing = [];
  
            // if submit button has been selected
            if (isset($_POST['submit'])) {
              $required = array('name', 'email', 'message');
              $recipient = "Nicole Bassen <nicolerbassen@gmail.com>";
              $subject = '';
              $headers = [];
              $authorized = '';
              require('includes/process_mail.php');
            }
  
          ?>

            <div class="wrapper-padding">

              <section class="margin-bottom" id="contact">

                <h2 class="sectionHeader">Contact Me</h2>

                <!--<div class="row margin-bottom">-->
                  
                  <?php if ($suspect || isset($errors['mailfail'])) : ?>
					<p class="errorMessage">Sorry, your mail couldn't be sent.</p><br>
                  <?php endif; ?>
                  <?php
					if ($mailSent) :
					// send to database
					include('includes/insert_form_script.php'); ?>
					<p class="successMessage">Your message has been sent. Thank you!</p><br>
                  <?php endif; ?>

                  <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>" role="form">
                    
                    <div class="row">
					  <div class="col-xs-12 col-sm-6 formRow">
					   <label for="name" class="contactLabel">Name:</label>
					  <!-- Display an error message if name is missing from form -->
					  <?php if ($missing && in_array('name', $missing)) : ?>
					  <span class="errorMessage pull-right">Required</span>     
					  <?php elseif (in_array('name', $errors)) : ?>
					  <span class="errorMessage pull-right">Invalid name</span>
					  <?php endif; ?><br>
					  <input type="text" name="name" id="name"
                      <?php
                        if ($errors || $missing) {
                          echo ' value="' . htmlentities($name) . '"';
                        }
                      ?>><br>
					  </div>
					  
					  <div class="col-xs-12 col-sm-6 formRow">
					  <!-- E-mail address -->
					  <label for="email" class="contactLabel">E-mail:</label>          
					  <!-- Display an error message if e-mail address is missing or invalid -->   
					  <?php if ($missing && in_array('email', $missing)) : ?>
					  <span class="errorMessage pull-right">Required</span>
					  <?php elseif (in_array('email', $errors)) : ?>
					  <span class="errorMessage pull-right">Invalid e-mail address</span>
					  <?php endif; ?><br>
					  <input type="text" name="email" id="email"
						<?php
						  if ($errors || $missing) {
							echo ' value="' . htmlentities($email) . '"';
						  } 
						?>><br> 
					  </div>
					</div>
                    
                    <label for="message" class="contactLabel">Message:</label>
                    <!-- Display an error message if message is missing from form -->
                    <?php if ($missing && in_array('message', $missing)) : ?>
                    <span class="errorMessage pull-right">Please enter a message</span>
                    <?php endif; ?><br>
                    <textarea name="message" rows="7" id="message"><?php
                        if ($errors || $missing) {
                          echo htmlentities($message);
                        }
                    ?></textarea><br>
                      
                    <input type="submit" name="submit" id="submit" value="Send">             
                      
                  </form>
				  
				  <!-- contact information -->
				  <div class="row contactInfo">

                  <div class="col-sm-6 text-center">

                    <article class="media">
					  <span class="fa fa-envelope fa-2x"></span><br>
						<div class="media-body animated fadeInRight">
						  Nicolerbassen@gmail.com</div>

                    </article>

                  </div>

                  <div class="col-sm-6 text-center">

                    <article class="media">

                      <span class="fa fa-map-marker fa-2x"></span><br>
                      <div class="media-body animated fadeInRight">
						Auburn, WA</div>

                    </article>

                  </div>

                </div>

                </div>
                
                

                

              </section><!--/ about me -->
           
            </div><!--/ padding -->

            <!--
            <footer class="visible-xs">
              <p class="text-center"><small>Tim Foreman&copy;2015 <span class="text-secondary">Web Developer</span></small></p>
            </footer>
            -->
          
          </div><!--/ col-9 -->

        </section><!--/ wrapper section -->    

      </div>

    </div>

  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <!-- Nicole's jQuery -->
  <script>
	<?php if (in_array("name", $errors) || in_array("name", $missing)) : ?>
	  $("#name").css('background-color', 'rgb(150,150,150)');
	  $("#name").css('border-color', 'rgb(200,200,200)');
	<?php endif; ?>
	<?php if (in_array("email", $errors) || in_array("email", $missing)) : ?>
	  $("#email").css('background-color', 'rgb(150,150,150)');
	  $("#email").css('border-color', 'rgb(200,200,200)');
	<?php endif; ?>
	<?php if (in_array("message", $missing)) : ?>
	  $("#message").css('background-color', 'rgb(150,150,150)');
	  $("#message").css('border-color', 'rgb(200,200,200)');
	<?php endif; ?>
  </script>

  <!-- Bootstrap JS -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Plugins JS -->
  <script src="js/debouncer.js"></script>

  <!-- Core Theme JS -->
  <script src="js/enterprise.js"></script>

  <!-- Color Switch JS / can be removed in production -->
  <script src="js/color-switch.js"></script>
  

</body>
</html>