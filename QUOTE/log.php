<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form  </title>-->
    <link rel="stylesheet" href="s.css">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="C:\Users\gourav rudrawar\Downloads\s.jpg" alt="">
        <div class="text">
          <span class="text-1">QUOTE-GENERATOR </span>
          <span class="text-2">Let's Quote</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="C:\Users\gourav rudrawar\Downloads\s.jpg" alt="">
        <div class="text">
          <span class="text-1">QUOTE-GENERATOR </span>
          <span class="text-2">Let's Quote</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">LOGIN</div>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="Email" placeholder="Enter your email" required name="mail">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required  name="pass">
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="regs">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label>

              </div>
              <div class="text sign-up-text"><a href="final.html">HOME PAGE</a>
              </div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">SIGNUP</div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" required name="name">
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required name="mail">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required name="pass">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Confirm your password " required name="pass">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Enter your phone number" required name="ph">
              </div>
              <div class="button input-box">
                <input type="submit" value="SUBMIT" name="reg">
              </div>
              <div class="button input-box">
                <input type="reset" value="RESET">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
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

<?php

include("connection.php");

if($_POST['reg'] ?? "")
{
  $name=$_POST['name'];
  $pass=$_POST['pass'];
  $mail=$_POST['mail'];
  $ph=$_POST['ph'];
  

  
  $query1 = "select mail from r where mail='$mail' ";
  $data1 = mysqli_query($conn, $query1);

  if(mysqli_num_rows($data1)>0)
  {
    echo "<script> alert('Already Added') </script>";
    exit();
  }


  if($name !="" && $pass !="" && $mail !="" && $ph !="" )
  { 
    $inserting = "INSERT INTO r values ('$name','$pass','$mail','$ph')";

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
