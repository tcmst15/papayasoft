


 

<?php session_start();


function my_decrypt($data, $key) {
   					 // Remove the base64 encoding from our key
   					 $encryption_key = base64_decode($key);
    					// To decrypt, split the encrypted data from our IV - our unique separator used was "::"
  					  list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
   					 return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
					}


			 		
					$UserName = 'tcmst15' ;
				
	

					$key = "WfbZqNiz/x3fyJBf7R8NDf/quY5/3kRvZO6vCZeuT8Q=";

					$data1 = "WlYvelN2ZGN6MlA5OGQxdjBQbHcxUT09OjqslBcHQJGv5bbGHMs+pNzV";
					
					$data2 = "OWVJRkxKS0UwZmZjWk9iWHBKMHo5QT09OjoojCmdJ4EYdB+qL21GEn11";

					$host     = "db177.pair.com";

					$db       = "tcmst151_inboxcleanerwebsite";

			
 					$pwdecrypted = my_decrypt($data1, $key);

					$unamedecrypted = my_decrypt($data2, $key);

					$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

					$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";


					// Create connection
					$conn = new mysqli($host, $unamedecrypted, $pwdecrypted);

					// Check connection
					if ($conn->connect_error) {
  					die("Connection failed: " . $conn->connect_error);
					} else {
						echo "     Connected successfully    ";
					
					}
					 
					
					
				 $sql ="select Email_address,  FirstName , LastName,   phonenumber,  BA_StreetAddress,  BA_City, BA_State,  BA_zipcode  from tcmst151_inboxcleanerwebsite.accounts where account_name = '".$UserName."'" ;	
				$result =  mysqli_query($conn, $sql);


 
				if (mysqli_num_rows($result) > 0){
				    while($row = mysqli_fetch_assoc($result)){
				        $array = $row;  

					$email =  $array["Email_address"];

					

				        $firstName  =  $array["FirstName"];
                              
                                        $lastName  =  $array["LastName"];
			
	                                $phone =  $array["phonenumber"];

                                        $BA_StreetAddress =  $array["BA_StreetAddress"];
         
                                        $BA_City =  $array["BA_City"];

                           		$BA_State =  $array["BA_State"];

                                        $BA_zipcode =  $array["BA_zipcode"];
					

   					 }
				     }
					

				

				 
				$conn->close();


 


 ?>

<html lang="en">
   <head>
      <title>Sales Form </title>
   
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Papaya-Soft Title Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--Google fonts links-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	 
	

	

    </head>
	
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="#"><i class="fa fa-phone"></i>1 201 253 3586</a>
                                <a href="#"><i class="fa fa-envelope"></i>contacts@papayasof.net</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.papayasoft.net"><h2>PAPAYA-<font color="green">SOFT</font></h2></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="http://www.papayasoft.net/">Home</a></li>
                        <li><a href="http://www.papayasoft.net/scripts/logout.php">Logout</a></li>
                        <li><a href="http://www.papayasoft.net/scripts/RegistrationForm.php">Registration</a></li>
                         <li><a href="http://www.papayasoft.net/scripts/SalesForm.php">Purchase</a></li>
                        <li><a href="http://www.papayasoft.net/scripts/Download.php">Download</a></li>
                        <li><a href="http://www.papayasoft.net/scripts/Documentation.php">Documentation</a></li>
                        <li><a href="http://www.papayasoft.net/scripts/Contact.php">Contact</a></li>
                        <li class="login"><a href="http://www.papayasoft.net/pages/login.html">Sign In</a></li>
                    </ul>
				</div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
   
      <center>
         <h1> Inbox Cleaner Purchase </h1>
		 <p>
		 <br> 
		 </p>
		 	 <p>
		 <br> 
		 </p>

 
<?php
         
if(isset($_SESSION["loggedin"]) ){
 ?>

 

           

		<form action="charge_creditcard2.php" method="post" name="ccprocess">
 		
			<!--   e <hr /> tag accepts attributes such as width, color, size, and align   -->
			
			<hr style="height:10px;width:75%;background-color:green;border-width:0px;align:center">
			
			<p>
			 <br>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  
			   <img src="assets/images/creditcards.gif" alt="credit cards">
			 
			</p>
			
			 

<TABLE style="width: 400px; line-height:25px;" frame="box" cellpadding="0" cellspacing="60" border="0">
  <TR><TD> <label>CC Type</label></TD>        <TD>        <select name="CC" id="CC" > <option value="VISA">VISA</option> <option value="Mastercard">Mastercard</option> <option value="Discover">Discover</option><option value="American Express">American Express</option> <option value="echeck">echeck</option> <option value="JCB">JCB</option> <option value="PayPal">PayPal</option>
                <option value="Apple Pay">Apple Pay</option>   </select>               </TD>      </TR>


  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>  


  


   <!--******************************************************************************************************************************************************************************************************************-->



  <TR><TD><label>FirstName</label></TD>         <TD> <input type="text" id="firstname" name="firstname" value="<?php echo htmlentities($firstName); ?>"></TD>  </TR>

  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>


  <TR><TD><label>LastName</label></TD>         <TD> <input type="text" id="lastname" name="lastname" value="<?php echo htmlentities($lastName); ?>"></TD>  </TR>

  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>

  <TR><TD><label>Email</label></TD>         <TD> <input type="text" id="email" name="email" value="<?php echo $email; ?>"></TD>  </TR>

  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>


  <TR><TD><label>Phone</label></TD>         <TD> <input type="text" id="phone" name="phone" value="<?php echo htmlentities($phone); ?>"></TD>  </TR>

  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>

  <TR><TD><label>StreetAddress</label></TD>         <TD> <input type="text" id="BA_StreetAddress" name="BA_StreetAddress" value="<?php echo htmlentities($BA_StreetAddress); ?>"></TD>  </TR>

  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>


  <TR><TD><label>City</label></TD>         <TD> <input type="text" id="BA_City" name="BA_City" value="<?php echo htmlentities($BA_City); ?>"></TD>  </TR>

  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>



    <TR><TD><label>State</label></TD>         <TD> <input type="text" id="BA_State" name="BA_State" value="<?php echo htmlentities($BA_State); ?>"></TD>  </TR>

  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>


       <TR><TD><label>ZipCode</label></TD>         <TD> <input type="text" id="BA_zipcode" name="BA_zipcode" value="<?php echo htmlentities($BA_zipcode); ?>"></TD>  </TR>

  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>



   <!--******************************************************************************************************************************************************************************************************************-->



       <TR><TD><label>Product Description</label></TD>         <TD> <input type="text" id="ProductDescription" name="ProductDescription" value="Inbox Cleaner Software"></TD>  </TR>

  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>



       <TR><TD><label>Amount:</label></TD>         <TD> <input type="text" id="Amount" name="Amount" value="$99.99"></TD>  </TR>

  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>


   <!--******************************************************************************************************************************************************************************************************************-->
 
  

  <TR><TD> <label>CC Card Number</label></TD> <TD><input type="text" id="ccnumber"  name="ccnumber"></TD> </TR>

  <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>   

  <TR><TD><label>CC Expire Date</label></TD>           <TD> <input type="date" id="ccdate"  name="ccdate">  </TD>     </TR>

    <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>  

  <TR><TD><label> CC CVC Number</label></TD>            <TD> <input type="text" name="cvcnumber" id="cvcnumber" maxlength="7" size="7"> </TD>     </TR>  

    <TR><TD>     &nbsp;&nbsp;&nbsp;    </TD>       <TD>   &nbsp;&nbsp;&nbsp;  </TD> </TR>  

</TABLE>


                    
               
 
			
			<div id="cc">
			
			 
	
				
			  <br>
		 
			   <input type="submit" value="Purchase"  maxlength="8" size="8">
            
			
			
		
			
			<p>
			
			      <br> <br> <br>
			  
			  
			 
             </p>			 
                     
 
           </div>
 
           <!--****************************2nd form end******************************************************************************************************************************************************-->
 
         </form>

}

		 <p>
		 <br>
	     <br>
		 <br>
		 
		 </p>


		<?php
		} else {
		?>

		<H3> Please Log in to Purchase.   </H3>

		<?php
		}
		?>








             
 </center>
   </body>
</html>






















   <!--****************************page end******************************************************************************************************************************************************-->





 






	          

