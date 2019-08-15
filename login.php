<?php
$usr_nam=$_POST["usrnam"];
$pass=$_POST["pass"];

$con=mysqli_connect("localhost","root","","fubble");
$p=mysqli_fetch_array($con->query("SELECT PASSWORD FROM info WHERE EMAIL='$usr_nam' OR NAME='$usr_nam'"));

if($p==0)
	echo("<center><h1>EMAIL/USERNAME DO NOT EXIST....<br><br><br>
		</h1><h2><a href='index.html'>CLICK HERE TO RETRY</a><br>
		<a href='signIN.html'><l>CLICK HERE TO SIGN UP</l></a>
		</h2></center>");
else{
	if($p[0]==$pass){
		$q=$con->query("SELECT * FROM info WHERE EMAIL='$usr_nam' OR NAME='$usr_nam'");
		session_start();
		$row=mysqli_fetch_assoc($q);
		$_SESSION['NAME']=$row['NAME'];
		$_SESSION['EMAIL']=$row['EMAIL'];
		$_SESSION['id']=$row['id'];
		$_SESSION['OTP']=$row['OTP'];
		$_SESSION['Did']=$row['id'];
		header("location:dashboard.php");
	}
	else
		echo("<center><h1>
			WRONG PASSWORD....<br>
			<a href=index.html>click here to retry....</a></center>");
}


//