/* Edit an account (selected by its ID). The name, the password and the status (enabled/disabled) can be changed */
public function editAccount(int $id, string $name, string $passwd, bool $enabled)
{
	/* Global $pdo object */
	global $pdo;
	
	/* Trim the strings to remove extra spaces */
	$name = trim($name);
	$passwd = trim($passwd);
	
	/* Check if the ID is valid */
	if (!$this->isIdValid($id))
	{
		throw new Exception('Invalid account ID');
	}
	
	/* Check if the user name is valid. */
	if (!$this->isNameValid($name))
	{
		throw new Exception('Invalid user name');
	}
	
	/* Check if the password is valid. */
	if (!$this->isPasswdValid($passwd))
	{
		throw new Exception('Invalid password');
	}
	
	/* Check if an account having the same name already exists (except for this one). */
	$idFromName = $this->getIdFromName($name);
	
	if (!is_null($idFromName) && ($idFromName != $id))
	{
		throw new Exception('User name already used');
	}
	
	/* Finally, edit the account */
	
	/* Edit query template */
	$query = 'UPDATE myschema.accounts SET account_name = :name, account_passwd = :passwd, account_enabled = :enabled WHERE account_id = :id';
	
	/* Password hash */
	$hash = password_hash($passwd, PASSWORD_DEFAULT);
	
	/* Int value for the $enabled variable (0 = false, 1 = true) */
	$intEnabled = $enabled ? 1 : 0;
	
	/* Values array for PDO */
	$values = array(':name' => $name, ':passwd' => $hash, ':enabled' => $intEnabled, ':id' => $id);
	
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