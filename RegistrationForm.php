

<?php session_start(); ?>

<html lang="en">
   <head>
      <title>Registration Form </title>
   
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
		<script>
	function toggleBoxVisibility() {

		if (document.getElementById("check").checked == false) {

		document.getElementById("box").style.visibility = "visible";

        } 
		else {

		document.getElementById("box").style.visibility = "hidden";

		}
		}


    

 		function toggle() {
  			var x = document.getElementById("password");
  			if (x.type === "password") {
 			   x.type = "text";
			  } else {
  			  x.type = "password";
  				}
			}

	
	</script>
	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    </head>

  <style>

.required:after {
    content:" *";
    color: red;

  </style>
	
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
         <h1> Inbox Cleaner Registration </h1>
		 <p>
		 <br> 
		 </p>
		 	 <p>
		 <br> 
		 </p>

 
          



    <!--**********************1st form start*********************************************************************************************************************************************************************-->


         <form action="register.php" method="post"  id="submitformDetails" class="submitDetails">



        <p><span>  <label for="UserName" class="required" >User Name:</label>  <input type="text" autofocus="" autocapitalize="none" autocomplete="username" required="" name="UserName" id="UserName"> </span></p>
            
                      <p> <br> </p>
  
       <p><span>    <label for="Password" class="required">Password:</label>    <input type="password" name="password" autocomplete="current-password" required="" id="password">
          <i class="far fa-eye" id="togglePassword" onclick="toggle()" style="margin-left: -30px; cursor: pointer;"></i>   </span></p>

         <p> <br> </p>

             
              <p> <span>    <label for="Gender">Gender:</label>      <select name="Gender" id="Gender"> <option value="male">male</option> <option value="female">female</option>
               </select>           </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span> <label for="firstName" class="required">First Name:</label> <input type="text" name="firstName" id="firstName"> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			  <label for="lastName" class="required">Last Name:</label>  <input type="text" name="lastName" id="lastName">  </p>
<p>
     <br>            
            </p>

                  <p><span> <label for="emailAddress" class="required">Email Address:</label>  <input type="text" name="emailAddress" id="emailAddress"> <label for="phone number" class="required">Phone Number:</label>  <input type="text" name="phonenumber" id="phonenumber"></span></p>
 
             
<p>
     <br>            
            </p>
 
             
<p><span>           <h3> Mailing Address </h3>    </span>  </p>
           
           
 
             
<p>            <span>
               <label for="StreetAddress" class="required">Street Address:</label>
               <input type="text" name="MA_streetaddress" id="MA_StreetAddress"> </span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			    <span>
               <label for="ApartmentNumber">Apartment Number:</label>
               <input type="text" name="MA_ApartmentNumber" id="MA_ApartmentNumber" maxlength="4" size="4"> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   
			       <span> 
               <label for="City" class="required">City:</label>
               <input type="text" name="MA_City" id="MA_City" maxlength="25" size="25"> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  
 
               </select> 
	          
			   
			   
            </p>
 
 
 <p>
 
 <br>   <br>
 
 </p>
       
	<p>            <span>
                <label for="State1" class="required">State</label>  <select name="MA_State" id="MA_State" > <option value="ALABAMA">ALABAMA</option> <option value="ALASKA">ALASKA</option> <option value="ARIZONA">ARIZONA</option> 		<option value="ARKANSAS">ARKANSAS</option> <option value="CALIFORNIA">CALIFORNIA</option> <option value="COLORADO">COLORADO</option> <option value="CONNECTICUT">CONNECTICUT</option><option value="DELAWARE">DELAWARE</option>  <option value="DISTRICT OF COLUMBIA">DISTRICT OF COLUMBIA</option> <option value="FLORIDA">FLORIDA</option> <option value="GEORGIA">GEORGIA</option>
                <option value="GUAM GU">GUAM GU</option> <option value="HAWAII">HAWAII</option> <option value="IDAHO">IDAHO</option> <option value="ILLINOIS">ILLINOIS</option>  <option value="INDIANA">INDIANA</option>
                <option value="IOWA">IOWA</option> <option value="KANSAS">KANSAS</option> <option value="KENTUCKY">KENTUCKY</option>  <option value="LOUISIANA">LOUISIANA</option>  <option value="MAINE">MAINE</option>
                 <option value="MARYLAND">MARYLAND</option> <option value="MASSACHUSETTS">MASSACHUSETTS</option> <option value="MICHIGAN">MICHIGAN</option>  <option value="MINNESOTA">MINNESOTA</option>  <option value="MISSISSIPPI">			MISSISSIPPI</option> <option value="MISSOURI">MISSOURI</option> <option value="MONTANA">MONTANA</option> <option value="NEBRASKA">NEBRASKA</option>  <option value="NEVADA">NEVADA</option>  <option value="NEW HAMPSHIRE">		NEW HAMPSHIRE</option> <option value="NEW JERSEY">NEW JERSEY</option> <option value="NEW MEXICO">NEW MEXICO</option> <option value="NEW YORK">NEW YORK</option> <option value="NORTH CAROLINA">NORTH CAROLINA</option> 			<option value="NORTH DAKOTA">NORTH DAKOTA</option> <option value="OHIO">OHIO</option> <option value="OKLAHOMA">OKLAHOMA</option> <option value="OREGON">OREGON</option>  <option value="PENNSYLVANIA">PENNSYLVANIA</option>  		<option value="PUERTO RICO">PUERTO RICO</option> <option value="RHODE ISLAND">RHODE ISLAND</option> <option value="SOUTH CAROLINA">SOUTH CAROLINA</option> <option value="SOUTH DAKOTA">SOUTH DAKOTA</option>  <option 			value="TENNESSEE">TENNESSEE</option> <option value="TEXAS">TEXAS</option> <option value="UTAH">UTAH</option> <option value="VERMONT">VERMONT</option> <option value="VIRGIN ISLANDS">VIRGIN ISLANDS</option>  <option 			value="VIRGINIA">VIRGINIA</option> 0 <option value="WASHINGTON">WASHINGTON</option> <option value="WEST VIRGINIA">WEST VIRGINIA</option> <option value="WISCONSIN">WISCONSIN</option> <option value="WYOMING">WYOMING</option></select>

			     </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   
			       <span> 
                 <label for="zcode" class="required">ZipCode</label>  <input type="text" name="MA_zipcode" id="MA_zipcode" size="15">  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  
 
               </select> 
	          
			   
			   
            </p>		
 



<p>  <br> </p>
			 
			
 
 
 
             


	<p>
			<br>
			
		
			
			</p>
			


 

		   
		   
 																															
                  <p><span>           <h3> Billing Address </h3>    </span>  </p>																	 

		<span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>  <span>	<label for="BillingAddress">Billing Address Same as Mailing Address:</label>  </span> <span> <input type="checkbox" id="check" name="BillingAddress" value="BillingAddress" onclick="toggleBoxVisibility()"> </span> <span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
		

</p>

           <!--**********************************************************************************************************************************************************************************************-->
 
				         
 
				<div id="box">
			           
<p>
          <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           		  
            </p>
 
             
<p>            <span>
               <label for="StreetAddress">Street Address:</label>
               <input type="text" name="BA_streetaddress" id="BA_StreetAddress"> </span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			    <span>
               <label for="ApartmentNumber">Apartment Number:</label>
               <input type="text" name="BA_Apartment Number" id="BA_Apartment Number" maxlength="4" size="4"> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   
			       <span> 
               <label for="City">City:</label>
               <input type="text" name="BA_City" id="BA_City" maxlength="25" size="25"> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
	          
			   
			   
            </p>
 
 
 <p>
                
 
 <br>   <br>
 
 </p>
       
		<p> <span>    <label for="State">State:</label>
			   <select name="BA_State" id="BA_State" > <option value="ALABAMA">ALABAMA</option> <option value="ALASKA">ALASKA</option> <option value="ARIZONA">ARIZONA</option>
               <option value="ARKANSAS">ARKANSAS</option> <option value="CALIFORNIA">CALIFORNIA</option> <option value="COLORADO">COLORADO</option> <option value="CONNECTICUT">CONNECTICUT</option>
                <option value="DELAWARE">DELAWARE</option>  <option value="DISTRICT OF COLUMBIA">DISTRICT OF COLUMBIA</option> <option value="FLORIDA">FLORIDA</option> <option value="GEORGIA">GEORGIA</option>
                <option value="GUAM GU">GUAM GU</option> <option value="HAWAII">HAWAII</option> <option value="IDAHO">IDAHO</option> <option value="ILLINOIS">ILLINOIS</option>  <option value="INDIANA">INDIANA</option>
                <option value="IOWA">IOWA</option> <option value="KANSAS">KANSAS</option> <option value="KENTUCKY">KENTUCKY</option>  <option value="LOUISIANA">LOUISIANA</option>  <option value="MAINE">MAINE</option>
                 <option value="MARYLAND">MARYLAND</option> <option value="MASSACHUSETTS">MASSACHUSETTS</option> <option value="MICHIGAN">MICHIGAN</option>  <option value="MINNESOTA">MINNESOTA</option>  <option value="MISSISSIPPI">MISSISSIPPI</option>
                 <option value="MISSOURI">MISSOURI</option> <option value="MONTANA">MONTANA</option> <option value="NEBRASKA">NEBRASKA</option>  <option value="NEVADA">NEVADA</option>  <option value="NEW HAMPSHIRE">NEW HAMPSHIRE</option>
                <option value="NEW JERSEY">NEW JERSEY</option> <option value="NEW MEXICO">NEW MEXICO</option> <option value="NEW YORK">NEW YORK</option> <option value="NORTH CAROLINA">NORTH CAROLINA</option> <option value="NORTH DAKOTA">NORTH DAKOTA</option>
                <option value="OHIO">OHIO</option> <option value="OKLAHOMA">OKLAHOMA</option> <option value="OREGON">OREGON</option>  <option value="PENNSYLVANIA">PENNSYLVANIA</option>  <option value="PUERTO RICO">PUERTO RICO</option>
               <option value="RHODE ISLAND">RHODE ISLAND</option> <option value="SOUTH CAROLINA">SOUTH CAROLINA</option> <option value="SOUTH DAKOTA">SOUTH DAKOTA</option>  <option value="TENNESSEE">TENNESSEE</option> <option value="TEXAS">TEXAS</option>
               <option value="UTAH">UTAH</option> <option value="VERMONT">VERMONT</option> <option value="VIRGIN ISLANDS">VIRGIN ISLANDS</option>  <option value="VIRGINIA">VIRGINIA</option> 0 <option value="WASHINGTON">WASHINGTON</option>
               <option value="WEST VIRGINIA">WEST VIRGINIA</option> <option value="WISCONSIN">WISCONSIN</option> <option value="WYOMING">WYOMING</option>
 
               </select>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>     <label for="zipcode">ZipCode:</label>  <input type="text" name="BA_zipcode" id="BA_zipcode">   </span> 
           

    </p>	 
		   
		   <br>


		  </div>

		   <p>

		
		   
		    <input type="submit"  id="submitDetails" class="submitDetails" value="Register"  maxlength="8" size="8">  </p>
			
		 
		</form>	

