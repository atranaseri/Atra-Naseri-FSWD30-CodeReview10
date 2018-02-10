<!DOCTYPE html>
<html>
<head>
	<title>books</title>
</head>
<body>

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
</body>
</html>