<?php
require("textlocal.class.php");
require("credential.php");

if(isset($_POST["sendotp"]))

{
    
$textlocal = new Textlocal(false, false, API_KEY);
$mob=$_POST["mob"];
$numbers = array(MOBILE);
$otp=mt_rand(100000,999999);
$sender = 'TXTLCL';
$message = 'This is a secured OTP send by Tops Technology for verify your Enquiry please don not share OTP with anyone Your OTP is :'.$otp;


try {


    $result = $textlocal->sendSms($numbers, $message, $sender);
    setcookie('otp',$otp);
    
    echo "<script>
    
    alert('OTP Succefully Send on your Mobile Number .....')
    window.location='verify.php';

    </script>";
} 

catch (Exception $e)


{
    die('Error: ' . $e->getMessage());
}


}





?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hi i  am using sms api </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body bgcolor="lightgray">


<center>

<h2>SMS API</h2>
    <form method="POST">


        Enter Your Mobile Number :<input type="text" name="mob" placeholder="Enter Your mobile Number " required style="width:300px; height:35px"><br><br>

        <input type="submit" name="sendotp" value="SendOtp>>" style="width:300px; height:40px; background-color:red; color:white; font-size:20px; border:none">



</center>
    </form>
    
</body>
</html>