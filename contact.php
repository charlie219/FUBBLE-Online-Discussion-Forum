<?php
session_start();
echo "<script> alert('FEEDBACK SENT SUCCESSFULLY')</script>";
$name=$_SESSION['NAME'];;
$email=$_SESSION['EMAIL'];;
$msg=$_POST['Message'];

//mail("askme.fubble1199@gmail.com","Message from user","$name \n\n $msg","FROM:$email");
//header("location:index.html");
?>