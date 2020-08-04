<?php
      session_start();
      
      $ip = "127.0.0.1";     
		  $servername = "localhost";
			$username = "root";
			$password = "";
			$db = "login";
			$conn = mysqli_connect($servername, $username, $password,$db);
         
             $email1="abc@xyz.com";             //Fetch userid and password from login form  

	$query = "INSERT INTO iplogger VALUES ('','$email1','$ip','')";
	$result = mysqli_query($conn,$query);
    if($result)
    {
    	header( "refresh:0;url=index.html" );
    }
    else {
    	echo "some error occured please login again" ;
    	header( "refresh:1;url=login.html" );
    }
?>
