<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	
	h1{
	color: #000000;
	font-size: 35px;
}
</style>
	
</head>
<body>	 
 
		<h1><center>LOGIN</center></h1>

		<form action="" method="POST" enctype="multipart/form-data">
		<table align="center" width="60%" border="0" cellspacing="10" cellpadding="5" id="formtext">
			

			<tr>
				<td>
					Email
				</td>
				<td>
					<input id="nameinput" type="Email" name="mail">
				</td>
			</tr>

			<tr>
				<td>
					Password
				</td>
				<td>
					<textarea id="nameinput" type="Password" name="pass"></textarea>
				</td>
			</tr>
			<tr>
				


			<tr>
				<td align="center" colspan="3">
					<br>
					<input id="signupbtn" type="submit" name="regs" value="Log-In">
					&nbsp &nbsp 
					<input id="resetbtn" type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
		</form>



</body>
</html>


<?php

include("connection.php");

if($_POST['regs'] ?? "")
{
	
	$pass=$_POST['pass'];
	$mail=$_POST['mail'];

	
	$query1 = "select mail from r where mail='$mail' ";
	$data1 = mysqli_query($conn, $query1);

	if(mysqli_num_rows($data1)>0)
	{
		$query2 = "select * from r where mail='$mail' ";
		$data2 = mysqli_query($conn, $query2);

		$row = mysqli_fetch_array($data2);

	if($row[1]==$pass)
	{
		//echo "<script> alert('Logged In') </script>";
		header("location:MQG.html");
	}
	else
	{
		echo "<script> alert('Incorrect Password') </script>";
	}
	
}
else
{
	echo "<script> alert('Enter correct Email') </script>";
}
}

?>