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

//checking connection
if($conn)
{
//echo "connected"; //this line is commented because we dont want to show anything on successfull connection
}
else
{
die("error in connection");
}

//query for fetching email and password from database
$query = "SELECT * FROM `users` WHERE email = '$email' and passwd='$passwd' ";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    $row = $result->fetch_assoc();
   
//check for the resulted quesry
if($row['email']==$email && $row['passwd']==$passwd)
   
{
    echo "Login Success Welcome ".$row['fname'];
	$_SESSION['email'] = $email;
	header( "refresh:1;url=log.php" );
	}
else
{
    echo "Failed to login!!";
	header( "refresh:1;url=../index.html" );
}
    
?>
