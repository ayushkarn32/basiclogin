<?php
session_start();
$email1=$_POST['email'];
$email=md5($email1);
$passwd1=$_POST['password'];
$passwd=md5($passwd1);

//conect to database
$servername = "localhost";
$username = "root";
$password = "";
$db = "login";
$conn = mysqli_connect($servername, $username, $password,$db);
 
if($conn){
//echo "connected";
}else{
die("error in connection");
}


$query = "SELECT * FROM `users` WHERE email = '$email' and passwd='$passwd' ";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    $row = $result->fetch_assoc();
   
//check for the resulted quesry
if($row['email']==$email && $row['passwd']==$passwd)
   
{
    echo "Login Success Welcome ".$row['fname'];
	$_SESSION['email'] = $email;
	header( "refresh:1;url=../home.php" );
	}
else
{
    echo "Failed to login!!";
}
    
?>
