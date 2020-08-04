<?php
      
	include("auth.php");
      
      $ip =$_SERVER['REMOTE_ADDR'];
      $email=$_SESSION["email"];

	//database connection
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "login";
      $conn = mysqli_connect($servername, $username, $password,$db);
         
	//inserting the users logged value
	
	$query = "INSERT INTO iplogger VALUES ('','$email','$ip','')";
	$result = mysqli_query($conn,$query);

	//here i haven't defined $id because id is primary key in the database and is automatically incremented
	// $date is the currenttimestamp which means whenever ip is logged the date and time gets recorded automatically
	//the first value i have passed is $id
	//2nd value is $email which was stored in the form of session variable in login.php
	//3rd value is the ip address of the visitor
	//4th value is the $date which is current time stamp

    
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
