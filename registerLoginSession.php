<?php  
<

/* Saves the current Session ID with the account ID */



private function registerLoginSession()
{
	/* Global $pdo object */
	global $pdo;
	
	/* Check that a Session has been started */
	if (session_status() == PHP_SESSION_ACTIVE)
	{
		/* 	Use a REPLACE statement to:
			- insert a new row with the session id, if it doesn't exist, or...
			- update the row having the session id, if it does exist.
		*/
		$query = 'REPLACE INTO tcmst151_inboxcleanerwebsite.account_sessions (session_id, account_id, login_time) VALUES (:sid, :accountId, NOW())';
		$values = array(':sid' => session_id(), ':accountId' => $this->id);
		
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
	}
}

?>


