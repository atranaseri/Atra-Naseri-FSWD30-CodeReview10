<?php


 // this will avoid mysql_connect() deprecation error.

 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 

 define('DBHOST', 'localhost');

 define('DBUSER', 'root');

 define('DBPASS', '');

 define('DBNAME', 'cr10_Atra_Naseri_bigLibrary');

 

 $conn = mysqli_connect($DBHOST,$DBUSER,$DBPASS,$DBNAME);
 

 if ( !$conn ) {

  die("Connection failed : " . mysqli_connect_error());

 }

 ?>