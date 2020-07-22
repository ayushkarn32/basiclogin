<?php
 
$user=$_POST['user'];; //change it as your post name
$pass=$_POST['pass'];;   //change it as your post name
 
//conect to database
$servername = "localhost";
$username = "root";
$password = "";
$db = "login";
$conn = new mysqli($servername, $username, $password,$db);
 
//checking connection  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 //getting users value from users table
$query = "SELECT * FROM `users` WHERE username='$user' and password='$pass'";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    $row = $result->fetch_assoc();
   
//check for the resulted quesry
if($row['username']==$user && $row['password']==$pass)
   
{
    echo "Login Success Welcome ".$row['username'];
	header( "refresh:1;url=home.php" );
	}
else
{
    echo "Failed to login!!";
	header( "refresh:1;url=login.php?user=$user" );
}
