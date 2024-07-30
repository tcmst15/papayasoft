/* "Getter" function for the $authenticated variable
    Returns TRUE if the remote user is authenticated */
public function isAuthenticated(): bool
{
	return $this->authenticated;
}