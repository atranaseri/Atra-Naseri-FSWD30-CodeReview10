<?php

 ob_start();

 session_start();

 require_once 'dbconnect.php';

 

 // it will never let you open index(login) page if session is set

 if ( isset($_SESSION['user'])!="" ) {

  header("Location: home.php");

  exit;

 }

 

 $error = false;

 

 if( isset($_POST['btn-login']) ) {

 

  // prevent sql injections/ clear user invalid inputs

  $email = trim($_POST['email']);

  $email = strip_tags($email);

  $email = htmlspecialchars($email);

 

  $pass = trim($_POST['pass']);

  $pass = strip_tags($pass);

  $pass = htmlspecialchars($pass);

  // prevent sql injections / clear user invalid inputs

 

  if(empty($email)){

   $error = true;

   $emailError = "Please enter your email address.";

  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {

   $error = true;

   $emailError = "Please enter valid email address.";

  }

 

  if(empty($pass)){

   $error = true;

   $passError = "Please enter your password.";

  }

 

  // if there's no error, continue to login

  if (!$error) {

   

   $password = hash('sha256', $pass); // password hashing using SHA256

 

   $res=mysqli_query($conn, "SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");

   $row=mysqli_fetch_array($res, MYSQLI_ASSOC);

   $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row

   

   if( $count == 1 && $row['userPass']==$password ) {

    $_SESSION['user'] = $row['userId'];

    header("Location: home.php");

   } else {

    $errMSG = "Incorrect Credentials, Try again...";

   }

   

  }

 

 }

?>

<!DOCTYPE html>

<html>

<head>

<title>Login & Registration System</title>

</head>

<body>
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


    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

   

     

             <h2>Sign In.</h2>

             <hr />

             

            <?php

   if ( isset($errMSG) ) {



echo $errMSG; ?>

               

                <?php

   }

   ?>

           

           

             

             <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />

         

             <span class="text-danger"><?php echo $emailError; ?></span>

   

           


             <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />

         

            <span class="text-danger"><?php echo $passError; ?></span>


             <hr />


             <button type="submit" name="btn-login">Sign In</button>

           

           

             <hr />

   

             <a href="register.php">Sign Up Here...</a>

       

           

    </form>

    </div>


</div>


</body>

</html>

<?php ob_end_flush(); ?>