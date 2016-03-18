<?php
// authenticates login
require('login_authentication.php');

// checks for empty fields and makes the form sticky
include('login_validation.php');

// side section, stylesheet, hyperlinks and scripts
include('aside.php');

/*
 * Nicole Bassen
 * nbassen.greenrivertech.net
 * This page allows administrators to log in and view e-mail messages
 */

?>

        <section class="column col-sm-9 wrapper-section">

          <div class="full col-sm-9">

            <div class="wrapper-padding">

              <section class="margin-bottom" id="login">

                <h2 class="sectionHeader">Login</h2>
				
				  <!-- Display an error message if form is filled out and credentials are invalid -->
				  <p class="errorMessage"><?php if (!$missing) { echo $loginMessage; } ?>

                  <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>" role="form">
                    
                    <div class="row">
					  <div class="col-xs-12 col-sm-6">
						
					  <!-- Username-->
					   
					  <!-- Display an error message if username is missing from form -->
					  <?php if ($missing && in_array('username', $missing)) : ?>
					  <span class="errorMessage">Please enter a username</span><br>   
					  <?php endif; ?>
					  <label for="username">Username:</label>
					  <br>
					  <input type="text" name="username" id="username" maxlength="30"
                      <?php
                        if ($missing) {
                          echo ' value="' . htmlentities($username) . '"';
                        }
                      ?>><br>

					  <!-- Password -->
					            
					  <!-- Display an error message if e-mail address is missing or invalid -->   
					  <?php if ($missing && in_array('psword', $missing)) : ?>
					  <span class="errorMessage">Please enter a password</span><br>
					  <?php endif; ?>
					  <label for="psword">Password:</label>  
					  <br>
					  <input type="password" name="psword" id="psword" maxlength="30"
						<?php
						  if ($missing) {
							echo ' value="' . htmlentities($psword) . '"';
						  } 
						?>><br>
						
						<input type="submit" name="loginButton" id="loginButton" value="Login">
					  </div>
					  
				  </div>
                                         
                  </form>
			  </section>
			</div>
		  </div>
		</section>
		</div>
		</div>
		</div>
	  </body>
	  
	  <!-- jQuery -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  
	  <!-- Bootstrap JS -->
	  <script src="js/bootstrap.min.js"></script>

	  <!-- Plugins JS -->
	  <script src="js/debouncer.js"></script>

	  <!-- Core Theme JS -->
	  <script src="js/enterprise.js"></script>
	  
	  <!-- Changes border & background color of missing fields upon submission -->
	  <script>
		<?php if (in_array("username", $missing)) : ?>
		  $("#username").css('background-color', 'rgb(150,150,150)');
		  $("#username").css('border-color', 'rgb(200,200,200)');
		<?php endif; ?>
		<?php if (in_array("psword", $missing)) : ?>
		  $("#psword").css('background-color', 'rgb(150,150,150)');
		  $("#psword").css('border-color', 'rgb(200,200,200)');
		<?php endif; ?>
	  </script>
				  
				  
</html>