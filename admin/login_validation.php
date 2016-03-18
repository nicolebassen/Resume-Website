<?php
/*
 * Nicole Bassen
 * nbassen.greenrivertech.net
 * This script checks for fields left blank in the login form
 * and makes the form sticky
 */

            // stores empty fields if left blank
            $missing = [];
            
            // these fields are required
            $required = array('username', 'psword');
            $username = $psword = "";
  
            // assign values to variables or add to $missing[] array
            if (isset($_POST['loginButton'])) {
              if (empty($_POST["username"])) {
                $missing[] = "username";
              } else {
                $username = htmlentities($_POST["username"]);
              }
              if (empty($_POST["psword"])) {
                $missing[] = "psword";
              } else {
                $psword = htmlentities($_POST["psword"]);
              }

            }
  
          ?>