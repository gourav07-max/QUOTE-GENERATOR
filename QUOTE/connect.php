<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "quotes";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "Connection Successful";
}
else
{
	//die("Connection Failed ".mysqli_connect_error());
}


?>