
	<?php 	
	
	include 'emailupdate.php';
	
	
	
    function addAccount($email, $name,  $passwd)
{

	
	/* $pdo object */
	
	
 
	
	/* Trim the strings to remove extra spaces */
	$name = trim($name);
	$passwd = trim($passwd);
    $email = trim($email);	

 

     echo addEmailAccount($email);
	 
    
	
	   $pdo = new PDO('mysql:host=db177.pair.com;dbname=tcmst151_inboxcleanerwebsite', 'tcmst151_2', '636Ewarr#');
	
	/* Check if the user name is valid. If not, throw an exception 
	if (!$this->isNameValid($name))
	{
		throw new Exception('Invalid user name');
	}
	
	*/
	
	/* Check if the password is valid. If not, throw an exception 
	if (!$this->isPasswdValid($passwd))
	{
		throw new Exception('Invalid password');
	}
	
	*/
	
	/* Check if an account having the same name already exists. If it does, throw an exception 
	if (!is_null($this->getIdFromName($name)))
	{
		throw new Exception('User name not available');
	}
	
	*/
	
	
	/* Finally, add the new account */
	
	/* Insert query template */
	$query = 'INSERT INTO tcmst151_inboxcleanerwebsite.accounts (account_name, account_passwd) VALUES (?, ?)';
	

	
	/* Password hash */
	$hash = password_hash($passwd, PASSWORD_DEFAULT);
	
 
 
	
   
	/* Execute the query */
	try
	{
		$res = $pdo->prepare($query);
		
		$res->execute([$name, $hash]);
	}
		
	catch (PDOException $e)
	{
	   /* If there is a PDO exception, throw a standard exception */
	   throw new Exception('Database query error');
	}
	
	
	
	/* Return the new ID */
	return $pdo->lastInsertId();
}



     if (isset($_POST['name']) && isset($_POST['passwd']) && isset($_POST['email'])) {
		 
    $result = addAccount(strval($_POST['email']),strval($_POST['name']), strval($_POST['passwd']));
	
	/*
	 header("Location: http://www.papayasoft.net/");  
     exit();   
	 */
	 
}

         
	   
 


		?>
 
 
 
<html lang="en">
   <head>
      <title>Create New Account </title>
   
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
                                <a href="#"><i class="fa fa-envelope"></i>contacts@papayasoft.net</a>
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
                 	    <li><a href=".">Login</a></li>					
			            <li><a href="http://www.papayasoft.net/scripts/SalesForm.php">Registration</a></li>
                        <li><a href="http://www.papayasoft.net/scripts/Download.php">Download</a></li>
                        <li><a href="http://www.papayasoft.net/scripts/Documentation.php">Documentation</a></li>
                        <li><a href="http://www.papayasoft.net/scripts/Contact.php">Contact</a></li>
                        <li class="login"><a href="http://www.papayasoft.net/scripts/createnewaccount.php">Sign In</a></li>
                    </ul>
					
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



           <!--**********************************************************************************************************************************************************************************************-->
 
   
      <center>
         <h1> Inbox Cleaner Registration </h1>
		 
		 	 <p>
		 <br> 
		 </p>
		 
		 	 <p>
		 <br>
		   <h4> New to Inbox Cleaner? Register Here: </h4>
         </p>
		 
		 	 
		 
		 <form action="" method="post">
		 
              <p>
                    
              </p>			  
              <p>    &nbsp;&nbsp;&nbsp;&nbsp;<label for="logintName">Login Name:</label> <input type="text" name="name" id="name"> <i style="color:green;"><small> (required) </small></i>
			  <br>
			  </p>
			  <p>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <label for="Password">Password:</label>  <input type="text" name="passwd" id="passwd"> <i style="color:green;"><small> (required) </small></i> </p>
			  <br>
              </p>
             
<p>                                                                  
              
          
 
			      </p>
 

       
		 
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>  <input type="submit"  value="Register">  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>  <a href="http://www.papayasoft.net/">  <input type="button" value=" Cancel " /> </a>      </span> 
		 
		   </form>
		  	   
           <?php if (isset($result)) { ?>
        <h1> Result: <?php echo $result ?></h1>
    <?php } ?>
		 
		 
 </center>
   </body>
</html>