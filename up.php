<?php
session_id("deb");
session_start();
echo("<script> alert('ENTER THE OTP')</script>");
echo("<h1><center>NAME :- ".$_SESSION['NAME']."<br><br>");
echo("<div>
	<form action='updatepass.php' method='post')>
	<input type='text' name='otp' placeholder='ENTER OTP'><BR>
	<input type='submit' name='' value='SUBMIT'>
	</h1></center></form>
	</div>");


?>