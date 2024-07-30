

<?php

					$Email = $_GET['argument1'];
					$password  = $_GET['argument2'];
					$code = "";



					session_start();


					
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
					}
					echo "Connected successfully";


				$stmt = $conn->prepare("INSERT INTO tcmst151_inboxcleanerwebsite.verify(email, password, code)  VALUES (?, ?, ?)");	


				$stmt->bind_param("sss", $Email, $Password, $code);

				$stmt->execute();



				$stmt->close();
				$conn->close();
				                 




				

			 
 
				 

        			  header("Location: http://www.papayasoft.net");
          

	 


			






?>