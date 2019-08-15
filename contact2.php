<?php
echo "<script> alert('FEEDBACK SENT SUCCESSFULLY')</script>";
$name=$_POST['Name'];
$email=$_POST['Email'];
$msg=$_POST['Message'];

//mail("askme.fubble1199@gmail.com","Message from user","$name \n\n $msg","FROM:$email");
//header("location:index.html");
?>