<?php
				
    
					echo "tom   ".$__POST["UserName"] ;

				
					
					function my_decrypt($data, $key) {
   					 // Remove the base64 encoding from our key
   					 $encryption_key = base64_decode($key);
    					// To decrypt, split the encrypted data from our IV - our unique separator used was "::"
  					  list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
   					 return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
					}


			 

				
	

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
						echo "Connect successfully    ";
					
					}
					 
					
					
				     	$account_enabled = "0";

	$stmt = $conn->prepare("INSERT INTO tcmst151_inboxcleanerwebsite.accounts(account_name, account_passwd, account_enabled,  Email_address,  Gender,  FirstName , LastName,  phonenumber, MA_StreetAddress, MA_AppartmentNumber , MA_City, MA_State, MA_zipcode, BA_StreetAddress, BA_AppartmentNumber , BA_City, BA_State, BA_zipcode )  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");	


				



				$stmt->bind_param("ssssssssssssssssss", $UserName, $Password, $account_enabled, $email, $Gender, $firstName , $lastName, $phone, $MA_streetaddress, $MA_ApartmentNumber , $MA_City, $MA_State, $MA_zipcode, $BA_StreetAddress, $BA_AppartmentNumber , $BA_City, $BA_State, $BA_zipcode); 

				
				

				
			
		 
				$UserName = $__POST["UserName"] ;

                              
				$_SESSION["loggedin"] = $UserName;
                                                           
				$Password =  $_Post["password"] ;

				$email = $_Post["emailAddress"] ;

				$Gender = $_Post["Gender"] ;

				$firstName = $_Post["firstName"] ;

				$lastName = $_Post["lastName"] ;

				$phone = $_Post["phone"] ;

				$MA_streetaddress = $_Post["MA_streetaddress"] ;                                

				$MA_ApartmentNumber =  $_Post["MA_ApartmentNumber"] ;

				$MA_City = $_Post["MA_City"] ;

				$MA_State = $_Post["MA_State"] ;

				$MA_zipcode = $_Post["MA_zipcode"] ;


				$BA_StreetAddress = $_Post["BA_StreetAddress"] ;

				$BA_AppartmentNumber = $_Post["BA_AppartmentNumber"] ;

				$BA_City = $_Post["BA_City,"] ;


				$BA_State = $_Post["BA_State"] ;

				$BA_zipcode = $_Post["BA_zipcode"] ;

				


				$stmt->execute();

                                				 

				
				$stmt->close();
				$conn->close();
				                 
				 
    				    				 $to = $email ;

				 $subject = "Activation Link For InboxCleaner on Papayasoft.net ";

				$headers["From"] = "webmaster@papayasoft.net";

				$headers["MIME-Version"] = "MIME-Version: 1.0";

				$headers["Content-type"] = "text/html; charset=iso-8859-1";

                                $url = "https://www.papayasoft.net/scripts/EmailVerified.php?email=".$email."&username=".$UserName;

				$message = "
				<html>
				<head>
    				<title>Review Request Reminder</title>
				<style>

                               a{
                                  color:blue;

				  font-size:24px
				}


				</style>

				</head>
			 	<body>
				    <p>Please Click On This link to activate your account</p>
                                    <br>

				   <a href=".$url.">Verify Your PapayaSoft Account</a>

				<br>
                                   <br>

				<h4> Welcome to PapayaSoft!   </h4> 
 				
				</body>
				</html>
				";

			      mail($to, $subject, $message, $headers);


		 		


 
				 

        		  header("Location: http://www.papayasoft.net");

				


	 


					
          


?>
























                                                                                                                                                                             




