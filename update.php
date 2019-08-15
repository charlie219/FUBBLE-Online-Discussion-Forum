<?php
session_id();
session_start();
$npass=$_POST['newpas'];
$cnpass=$_POST['ncpass'];
$id=$_SESSION['id'];

if($npass==$cnpass){
	$path=mysqli_connect("localhost","root","","fubble");
	$path->query("UPDATE info set PASSWORD='$npass' WHERE id='$id'");
	header("location:index.html");
}
else{
	echo("<H1>PASSWORD MISMATCHED</H1>");
}
?>