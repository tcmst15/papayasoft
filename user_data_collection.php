

 

!DOCTYPE html>
<html>
  
<head>
    <title>Insert Data Page </title>
	  <meta http-equiv="refresh" content="7; url = http://www.papayasoft.net/" />
</head>
 
<body>
    <center>
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
		
    </center>
</body>
 
</html>
	
	
