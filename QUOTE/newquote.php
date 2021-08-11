<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	
	h1{
	color: #000000;
	font-size: 35px;
}
</style>
	
</head>
<body>	 
 
		<h1><center>ADD NEW QUOTE</center></h1>

		<form action="" method="POST" enctype="multipart/form-data">
		<table align="center" width="60%" border="0" cellspacing="10" cellpadding="5" id="formtext">
			

			<tr>
				<td>
					ID
				</td>
				<td>
					<input id="nameinput" type="text" name="id">
				</td>
			</tr>

			<tr>
				<td>
					QUOTE
				</td>
				<td>
					<textarea id="nameinput" type="text" name="quote"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					AUTHOR
				</td>
				<td>
					<textarea id="nameinput" type="text" name="author"></textarea>
				</td>
				
			</tr>
			
			
				


			<tr>
				<td align="center" colspan="6">
					
					<p>ADD QUOTE IN</p>
					<input id="signupbtn" type="button" name="mot" value="Motivation">
					&nbsp &nbsp 
					<input id="signupbtn" type="button" name="life" value="Life">
					&nbsp &nbsp 
					<input id="signupbtn" type="submit" name="pos" value="Positive">
					&nbsp &nbsp 
					<input id="signupbtn" type="submit" name="fri" value="Friend">
					&nbsp &nbsp 
					<input id="signupbtn" type="submit" name="smile" value="Smile">
					<br><br>
					<input id="resetbtn" type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
		</form>



</body>
</html>


<?php

include("connect.php");

if($_POST['mot'] ?? "")
{
	$id=$_POST['id'];
	$quote=$_POST['quote'];
	$author=$_POST['author'];
	

	
	$query1 = "select id from motive where id='$id' ";
	$data1 = mysqli_query($conn, $query1);

	if(mysqli_num_rows($data1)>0)
	{
		echo "<script> alert('Already Added') </script>";
		exit();
	}


	if($id !="" && $quote !="" && $author !="" )
	{	
		$inserting = "INSERT INTO motive values ('$id','$quote','$author')";

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