




   	<?php 	
	
	
 
	
	    function addEmailAccount($email)
{
	
	
	
	 $pddo = new PDO('mysql:host=db177.pair.com;dbname=tcmst151_inboxcleanerwebsite', 'tcmst151_2', '636Ewarr#');
	
	
	echo $email ;
	

     $sql = 'INSERT INTO emailcollection  VALUES (0,?)';
	 	
	    $stmt = $pddo->prepare($sql);
		
		$stmt->execute([$email]);
			
		
		
		
}


		
		
		
		?>
		