 <?php
session_start();
if(!isset($_SESSION["email"]))
{
echo "It seems some error occuredd"
echo "Please log in again";
header( "refresh:2;url=login.html" );
exit(); }
 ?>
