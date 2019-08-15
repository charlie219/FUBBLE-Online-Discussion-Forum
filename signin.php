<?php

$nam='@'.$_POST["usrnam"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];

if($cpass==$pass){
	$con=mysqli_connect("localhost","root","","fubble");
	$n=$con->query("SELECT * FROM info WHERE EMAIL='$email' OR NAME='$nam'");
	$num=mysqli_num_rows($n);
	if($num>0)
		echo("EMAIL/USERNAME ALREADY EXISTS......");
	else{
		$con->query("INSERT INTO info SET NAME='$nam',EMAIL='$email',PASSWORD='$pass'");
		echo("<center><h1>
			Account Created......<br>welcome $nam<br><br><br>
			<a href='index.html'> CLICK HERE TO LOGIN</a></h1></center>");
	}
}
else
	echo("<h1><center>PASSWORD MISMACHED....<BR>
		TRY AGAIN....<BR><br><br>
		<a href='signIN.html'>CLICK HERE TO RETRY</a></center></h1>")

?>