<?php
	require ("../../../dbc.php");
	
	// string variables to store field names and form input	
	$allFields = "";
	$allValues = "";
			
	foreach ($required as $field) {
		$allFields .= $field . ", ";	
		$value = $$field;
		$value = mysqli_real_escape_string($cnxn, $value);
		$allValues .= "\"$value\", ";						
	}
	
	// trim values to remove final comma
	$allValues = substr($allValues, 0, strlen($allValues) - 2);
			
	// trim field names to remove final comma
	$allFields = substr($allFields, 0, strlen($allFields) - 2);

	// store query to insert all fields
	$sql = "INSERT INTO nbassen_contact.form_messages ($allFields) VALUES ($allValues);";
	
	// attempt to execute query
	@mysqli_query($cnxn, $sql) or
				die ("Error executing query: $sql");
?>