


 

!DOCTYPE html>
<html>
  
<head>
    <title>Insert Data Page </title>
	  <meta http-equiv="refresh" content="7; url = http://www.papayasoft.net/" />
</head>
 
<body>
    <center>

		
    </center>
</body>
 
</html>
	
string $name, string $passwd




public function addAccount(string $name, string $passwd): int
{
	/* Global $pdo object */
	global $pdo;
	
	/* Trim the strings to remove extra spaces */
	$name = trim($name);
	$passwd = trim($passwd);
	
	/* Check if the user name is valid. If not, throw an exception */
	if (!$this->isNameValid($name))
	{
		throw new Exception('Invalid user name');
	}
	
	/* Check if the password is valid. If not, throw an exception */
	if (!$this->isPasswdValid($passwd))
	{
		throw new Exception('Invalid password');
	}
	
	/* Check if an account having the same name already exists. If it does, throw an exception */
	if (!is_null($this->getIdFromName($name)))
	{
		throw new Exception('User name not available');
	}
	
	/* Finally, add the new account */
	
	/* Insert query template */
	$query = 'INSERT INTO tcmst151_inboxcleanerwebsite.accounts (account_name, account_passwd) VALUES (:name, :passwd)';
	
	/* Password hash */
	$hash = password_hash($passwd, PASSWORD_DEFAULT);
	
	/* Values array for PDO */
	$values = array(':name' => $name, ':passwd' => $hash);
	
	/* Execute the query */
	try
	{
		$res = $pdo->prepare($query);
		$res->execute($values);
	}
	catch (PDOException $e)
	{
	   /* If there is a PDO exception, throw a standard exception */
	   throw new Exception('Database query error');
	}
	
	/* Return the new ID */
	return $pdo->lastInsertId();
}







        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("db177.pair.com", "tcmst151_2", "636Ewarr#","tcmst151_inboxcleanerwebsite");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)

        $emailaddress = $_REQUEST['emailaddress'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO emailcollection  VALUES (0,'$emailaddress')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully. </h3>"; 
 
            echo nl2br("\n$emailaddress ");
			 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>