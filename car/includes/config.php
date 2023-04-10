<?php 
// DB credentials.
define('DB_HOST','127.0.0.1');
define('DB_USER','u8wk6vckuqlqi');
define('DB_PASS','2c#e^p#$~1>$');
define('DB_NAME','dblz4xl4pkywf7');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
