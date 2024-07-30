

<?php
/* Host name of the MySQL server */
$host = ' db177.pair.com';
/* MySQL account username */
$user = 'tcmst151_2';
/* MySQL account password */
$passwd = '636Ewarr#';
/* The schema you want to use */
$schema = 'tcmst151_inboxcleanerwebsite';
/* The PDO object */
$pdo = NULL;
/* Connection string, or "data source name" */
$dsn = 'mysql:host=' . $host . ';dbname=' . $schema;
/* Connection inside a try/catch block */
try
{  
   /* PDO object creation */
   $pdo = new PDO($dsn, $user,  $passwd);
   
   /* Enable exceptions on errors */
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
   /* If there is an error an exception is thrown */
   echo 'Database connection failed.';
   die();
}