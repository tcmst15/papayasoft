/* Login using Sessions */
public function sessionLogin(): bool
{
	/* Global $pdo object */
	global $pdo;
	
	/* Check that the Session has been started */
	if (session_status() == PHP_SESSION_ACTIVE)
	{
		/* 
			Query template to look for the current session ID on the account_sessions table.
			The query also make sure the Session is not older than 7 days
		*/
		$query = 
		
		'SELECT * FROM myschema.account_sessions, myschema.accounts WHERE (account_sessions.session_id = :sid) ' . 
		'AND (account_sessions.login_time >= (NOW() - INTERVAL 7 DAY)) AND (account_sessions.account_id = accounts.account_id) ' . 
		'AND (accounts.account_enabled = 1)';
		
		/* Values array for PDO */
		$values = array(':sid' => session_id());
		
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
		
		$row = $res->fetch(PDO::FETCH_ASSOC);
		
		if (is_array($row))
		{
			/* Authentication succeeded. Set the class properties (id and name) and return TRUE*/
			$this->id = intval($row['account_id'], 10);
			$this->name = $row['account_name'];
			$this->authenticated = TRUE;
			
			return TRUE;
		}
	}
	
	/* If we are here, the authentication failed */
	return FALSE;
}