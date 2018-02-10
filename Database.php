<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
</head>
<body>
	<!--create database and connectin-->
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cr10_Atra_Naseri_bigLibrary";

	$conn = mysqli_connect($servername,$username,$password);

	if (!$conn) {
		die("connection failed:" . mysqli_connect_error());
	}

	$sql ="CREATE DATABASE $dbname";
	if (mysqli_query($conn,$sql)){

		echo"Database $cr10_Atra_Naseri_bigLibrary created successfully! /n";
		}
		else{
			echo "Error creating database $dbname: " . mysqli_error($conn);
		}

		mysqli_close($conn);
		?>
<!--create table for login and connection-->
	
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname ="cr10_Atra_Naseri_bigLibrary";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
	die("Connection failed: " . msqli_connect_error() ."\n");
} 
	$sql = "CREATE TABLE users (

  userId INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,

  userName VARCHAR(30) NOT NULL,

  userEmail VARCHAR(60) NOT NULL,

  userPass varchar(255) NOT NULL,

  UNIQUE KEY `userEmail` (`userEmail`)

)"; 

if (mysqli_query($conn,$sql)){
	echo"Table Users created successfully" . "\n";
}
else {
	echo"Error creating table: " .mysqli_error($conn) . "\n";
}
mysqli_close($conn);
?>


	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname ="cr10_Atra_Naseri_bigLibrary";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
	die("Connection failed: " . msqli_connect_error() ."\n");
} 
$sql = "CREATE TABLE book(
ISBN INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(30) NOT NULL,
fk_Author_ID INT NOT NULL,
Genre VARCHAR(55) NOT NULL,
fk_Publisher_ID INT NOT NULL,
Type VARCHAR(20) NOT NULL,
Descriptin VARCHAR(400) NOT NULL,
)";


if (mysqli_query($conn,$sql)){
	echo"Table book created successfully" . "\n";
}
else {
	echo"Error creating table: " .mysqli_error($conn) . "\n";
}
mysqli_close($conn);
?>

<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname ="cr10_Atra_Naseri_bigLibrary";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
	die("Connection failed: " . msqli_connect_error() ."\n");
} 

$sql = "CREATE TABLE Author(
Author_ID INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
First_name VARCHAR(30) NOT NULL,
Last_name VARCHAR(30) NOT NULL,
)";


if (mysqli_query($conn,$sql)){
	echo"Table Author created successfully" . "\n";
}
else {
	echo"Error creating table: " .mysqli_error($conn) . "\n";
}
mysqli_close($conn);
?>


<!--create publesher's table-->
<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname ="cr10_Atra_Naseri_bigLibrary";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
	die("Connection failed: " . msqli_connect_error() ."\n");
} 
$sql = "CREATE TABLE Pulisher(
Pulisher_ID INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Address VARCHAR(80) NOT NULL,
size VARCHAR(40) NOT NULL
)";


if (mysqli_query($conn,$sql)){
	echo"Table Pulisher created successfully" . "\n";
}
else {
	echo"Error creating table: " .mysqli_error($conn) . "\n";
}
mysqli_close($conn);
?>
 	

</body>
</html>