/* A sanitization check for the account username */
public function isNameValid(string $name): bool
{
	/* Initialize the return variable */
	$valid = TRUE;
	
	/* Example check: the length must be between 8 and 16 chars */
	$len = mb_strlen($name);
	
	if (($len < 8) || ($len > 16))
	{
		$valid = FALSE;
	}
	
	/* You can add more checks here */
	
	return $valid;
}