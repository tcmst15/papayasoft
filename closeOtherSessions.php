/* Close all account Sessions except for the current one (aka: "logout from other devices") */
public function closeOtherSessions()
{
	/* Global $pdo object */
	global $pdo;
	
	/* If there is no logged in user, do nothing */
	if (is_null($this->id))
	{
		return;
	}
	
	/* Check that a Session has been started */
	if (session_status() == PHP_SESSION_ACTIVE)
	{
		/* Delete all account Sessions with session_id different from the current one */
		$query = 'DELETE FROM myschema.account_sessions WHERE (session_id != :sid) AND (account_id = :account_id)';
		
		/* Values array for PDO */
		$values = array(':sid' => session_id(), ':account_id' => $this->id);
		
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