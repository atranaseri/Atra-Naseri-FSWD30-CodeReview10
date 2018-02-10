<!DOCTYPE html>
<html>
<head>

	

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
</body>
</html>