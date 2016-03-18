<?php
session_start();

/*
 * Nicole Bassen
 * nbassen.greenrivertech.net
 * This script checks for valid login credentials
 */

// database connection file
require('../../dbc.php');

$loginMessage= "";
	 if(isset($_POST['loginButton'])){
				if(isset($_POST['username']) && isset($_POST['psword'])){
				 
					  // search in admins table for username entered
					  $sql = sprintf("SELECT * FROM nbassen_contact.admins WHERE username='%s'",
					  mysqli_real_escape_string($cnxn, $_POST['username'])
					  );
					  
					  // store result
					  $result = mysqli_query($cnxn, $sql);
					  $row = mysqli_fetch_assoc($result);
					  
					  // if a row is returned, check for correct password and redirect to contact data table
					  if($row){
								 $hash = $row['psword'];
								 
								 if($_POST['psword'] == $hash) {

									$_SESSION['resume_sess'] = $row['username'];

									header('Location: http://nbassen.greenrivertech.net/admin/contact_data.php');

								 } else {
									$loginMessage = "Invalid credentials";
								 }

					  } else {
								 $loginMessage = "Invalid credentials";
					  }

	}

mysqli_close($cnxn);
}
?>