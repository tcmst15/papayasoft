/* Logout the current user */
public function logout()
{
	/* Global $pdo object */
	global $pdo;	
	
	/* If there is no logged in user, do nothing */
	if (is_null($this->id))
	{
		return;
	}
	
	/* Reset the account-related properties */
	$this->id = NULL;
	$this->name = NULL;
	$this->authenticated = FALSE;
	
	/* If there is an open Session, remove it from the account_sessions table */
	if (session_status() == PHP_SESSION_ACTIVE)
	{
		/* Delete query */
		$query = 'DELETE FROM myschema.account_sessions WHERE (session_id = :sid)';
		
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
	}
}