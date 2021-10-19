<!DOCTYPE html>
<html>
<head>
	<title>QNA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	
	h1{
	color: #000000;
	font-size: 35px;
}
</style>
	
</head>
<body>	 
 
		<h1><center>QNA SECTION</center></h1>

		<form action="" method="POST" enctype="multipart/form-data">
		<table align="center" width="60%" border="0" cellspacing="10" cellpadding="5" id="formtext">
			

			<tr>
				<td>
					NAME
				</td>
				<td>
					<input id="nameinput" type="text" name="na">
				</td>
			</tr>

			<tr>
				<td>
					EMAIL
				</td>
				<td>
					<textarea id="nameinput" type="EMAIL" name="mail"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					TYPE YOUR MESSAGE...
				</td>
				<td>
					<textarea id="nameinput" type="text" name="mes"></textarea>
				</td>
				
			</tr>
			
			
				


			<tr>
				<td align="center" colspan="4">
					
					
					<input id="signupbtn" type="submit" name="sub" value="SEND">
					&nbsp &nbsp
					<input id="resetbtn" type="reset"  value="RESET">
				</td>

			</tr>
			

		</table>
		</form>



</body>
</html>


<?php

include("c.php");

if($_POST['sub'] ?? "")
{
	$name=$_POST['na'];
	$mail=$_POST['mail'];
	$message=$_POST['mes'];
	

	
	$query1 = "select name from qna where name='$name' ";
	$data1 = mysqli_query($conn, $query1);

	if(mysqli_num_rows($data1)>0)
	{
		echo "<script> alert('Already Added') </script>";
		exit();
	}


	if($name!="" && $mail!="" && $message!="" )
	{	
		$inserting = "INSERT INTO qna values ('$name','$mail','$message')";

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