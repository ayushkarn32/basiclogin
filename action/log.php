<?php
      session_start();
      
      $ip =$_SERVER['REMOTE_ADDR'];
      $email1=$_SESSION["email"];

	//database connection
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "login";
      $conn = mysqli_connect($servername, $username, $password,$db);
         
	//inserting the users logged value

//here i haven't defined $id because id is primary key in the database and is automatically incremented
// $date is the currenttimestamp which means whenever ip is logged the date and 
	
	$query = "INSERT INTO iplogger VALUES ('$id','$email1','$ip','$date')";
	$result = mysqli_query($conn,$query);
    
//if logged sucessfully you will be redirected to 
    if($result)
    {
    	header( "refresh:0;url=index.html" );
    }
    else {
    	echo "some error occured please login again" ;
    	header( "refresh:1;url=login.html" );
    }
?>
