<!DOCTYPE html>
<html>
<head>
	<title>Sign</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	
	h1{
	color: #000000;
	font-size: 35px;
}
</style>
	
</head>
<body>	 
 
		<h1><center>REGISTER</center></h1>

		<form action="" method="POST" enctype="multipart/form-data">
		<table align="center" width="60%" border="0" cellspacing="10" cellpadding="5" id="formtext">
			<tr>
				<td>
					Name
				</td>
				<td>
					<input id="nameinput" type="text" name="name"> 
				</td>
			</tr>

			<tr>
				<td>
					Password
				</td>
				<td>
					<input id="nameinput" type="password" name="pass">
				</td>
			</tr>

			<tr>
				<td>
					Email
				</td>
				<td>
					<input id="nameinput" type="email" name="mail">
				</td>
			</tr>

			<tr>
				<td>
					Phone Number
				</td>
				<td>
					<input id="nameinput" type="phonenumber" name="ph">
				</td>
			</tr>
			<tr>
				<td>
					Gender
				</td>
				<td>
					<textarea id="nameinput" type="text" name="gen"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					Language
				</td>
				<td>
					<textarea id="nameinput" type="text" name="lang"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					Address
				</td>
				<td>
					<textarea id="nameinput" type="text" name="address"></textarea>
				</td>
			</tr>


			<tr>
				<td align="center" colspan="3">
					<br>
					<input id="signupbtn" type="submit" name="regs" value="Register">
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
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$mail=$_POST['mail'];
	$ph=$_POST['ph'];
	$gen=$_POST['gen'];
	$lang=$_POST['lang'];
	$address=$_POST['address'];

	
	$query1 = "select mail from r where mail='$mail' ";
	$data1 = mysqli_query($conn, $query1);

	if(mysqli_num_rows($data1)>0)
	{
		echo "<script> alert('Already Added') </script>";
		exit();
	}


	if($name !="" && $pass !="" && $mail !="" && $ph !="" && $gen !="" && $lang !="" && $address !="")
	{	
		$inserting = "INSERT INTO r values ('$name','$pass','$mail','$ph','$gen','$lang','$address')";

		$checking = mysqli_query($conn,$inserting);
 
		if($checking)
		{	
			echo "<script> alert('Inserted') </script>";
		}
		else
		{
			echo "<script> alert('not Added inside itself') </script>";
		}

	}

	else
	{
		echo "<script> alert('not Added') </script>";
	}
}

?>