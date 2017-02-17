<?php

// CREATE DATABASE

if (isset($_GET['name'])) {
		$database_name = $_GET['name'];
}
else {
		$database_name = "datas";
}

$connection = mysqli_connect('localhost', 'root', 'root');
if (!$connection)
{
	die("Connection Failed".mysqli_connect_error());
	echo "\n";
}

$sql = "CREATE DATABASE $database_name";

if (mysqli_query($connection, $sql))
	echo "Database successfully create\n";
else
{
	echo "DataBase creation fail ".mysqli_error($connection);
	echo "\n";
}

mysqli_close($connection);
$connection = mysqli_connect('localhost', 'root', 'root', $database_name);
$statement = "CREATE TABLE users(
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(50) NOT NULL,
password VARCHAR(200) NOT NULL
)";

if (mysqli_query($connection, $statement))
{
	echo "table users create";
	echo "\n";
}
else
{
	echo "error creating table user".mysqli_error($connection);
	echo "\n";
}

$statement = "CREATE TABLE articles (
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
titre VARCHAR(30) NOT NULL,
contenu VARCHAR(1000) NOT NULL,
photo VARCHAR(500) NOT NULL,
login VARCHAR(255) NOT NULL 
)";

if (mysqli_query($connection, $statement))
{
	echo "table Produits create\n";
}
else
{
	echo "error creating table articles  ".mysqli_error($connection);
	echo "\n";
}

mysqli_close($connection);


?>
