<?php
session_id();
session_start();
$chkOTP= $_SESSION['OTP'];
$otp=$_POST["otp"];
if($chkOTP==$otp){
	header("location:NewPass.html");
}
else
echo("WRONG OTP...");
?>