<?php
require("textlocal.class.php");
require("credential.php");

if(isset($_POST["verifyotp"]))

{
  
    $otpnm=$_POST["verify"];

    if($_COOKIE["otp"]==$otpnm)

    {

        echo "<script>
        
        alert('Congratulations Your OTP is Verified with Us ')

        window.location='welcome.php';
        
        </script>";



        
    }


    else

    {

        echo "<script>
        
        alert('Sorry You enetered a wrong OTP Here try again')

        window.location='verify.php';
        
        </script>";


    }


}




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <center>

        <h2>Verify OTP >></h2>
            <form method="POST">
        
        
                Enter OTP for Verify:<input type="text" name="verify" placeholder="Enter For verify" required style="width:300px; height:35px"><br><br>
        
                <input type="submit" name="verifyotp" value="VerifyOTP >>" style="width:300px; height:40px; background-color:red; color:white; font-size:20px; border:none">
        
        
        
        </center>
            </form>
    
</body>
</html>