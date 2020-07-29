Given variables:
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "login";
  $conn = new mysqli($servername, $username, $password,$db);
  
  
  below code gives the ip of the client
$ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
  

