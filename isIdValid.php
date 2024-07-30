/* A sanitization check for the account ID */
public function isIdValid(int $id): bool
{
	/* Initialize the return variable */
	$valid = TRUE;
	
	/* Example check: the ID must be between 1 and 1000000 */
	
	if (($id < 1) || ($id > 1000000))
	{
		$valid = FALSE;
	}
	
	/* You can add more checks here */
	
	return $valid;
}