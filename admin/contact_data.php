<?php
// user is redirected to login page if session is not active
include('redirect.php');

// include side section, stylesheet, hyperlinks and scripts
include('aside.php');

// database connection file
include('../../dbc.php');

/*
 * Nicole Bassen
 * nbassen.greenrivertech.net
 * This page displays all messages sent through the contact form
 */

?>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- data tables css -->
        <link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css"
          rel="stylesheet">
        
        <!-- wrapper section -->
        <section class="column col-sm-9 wrapper-section">
          
          <div class="full col-sm-9">
			
            <div class="wrapper-padding">
			  
              <section class="margin-bottom" id="contactData">

                <h2 class="sectionHeader">Messages
                <span class="pull-right"><a href="logout.php" class="logout">Logout</a></span>
                </h2>
                
				<!-- table for displaying all messages sent through the contact form -->
                <table width="100%" class="display table table-bordered table-striped" id="formMessages" cellspacing="0">
				<thead>
				<tr>
                    <th class="">Name</th><th class="">E-Mail</th><th colspan="2" class="">Message</th>
                </tr>
				</thead>
				<tbody>
                
				
                <?php
                $sql = "SELECT * FROM nbassen_contact.form_messages";
                $result = @mysqli_query($cnxn, $sql);
                
                // process the rows
				while ($row = mysqli_fetch_assoc($result)) {

					$name = htmlentities($row['name']);
					$email = htmlentities($row['email']);
					$message = htmlentities($row['message']);
                    
					// print rows
					echo  "<tr><td>$name</td>";
					echo "<td>$email</td>";
					echo '<td colspan="2">' . $message . '</td>';
					echo '</tr>';
					
				}
                ?>
				
                </tbody></table>
                
                
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
      <script src="../js/bootstrap.min.js"></script>
          
      <!-- Plugins JS -->
      <script src="../js/debouncer.js"></script>
          
      <!-- Core Theme JS -->
      <script src="../js/enterprise.js"></script>
        
      <!-- Include all compiled plugins (below), or include individual files as needed -->
	  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	  <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
        
	  <!-- jQuery Data Table for displaying messages -->
      <script>
          $('#formMessages').DataTable();    
      </script>
</html>