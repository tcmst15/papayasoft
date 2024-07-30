/* Delete an account (selected by its ID) */
public function deleteAccount(int $id)
{
	/* Global $pdo object */
	global $pdo;
	
	/* Check if the ID is valid */
	if (!$this->isIdValid($id))
	{
		throw new Exception('Invalid account ID');
	}
	
	/* Query template */
	$query = 'DELETE FROM myschema.accounts WHERE account_id = :id';
	
	/* Values array for PDO */
	$values = array(':id' => $id);
	
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
	/* Delete the Sessions related to the account */
	$query = 'DELETE FROM myschema.account_sessions WHERE (account_id = :id)';
	/* Values array for PDO */
	$values = array(':id' => $id);
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