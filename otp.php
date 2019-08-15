<?php
$user=$_POST["user"];
$con=mysqli_connect("localhost","root","","fubble");
$v=$con->query("SELECT * FROM info WHERE EMAIL='$user' or NAME='$user'");


if(mysqli_num_rows($v)>0)
{
	$otp=rand(1000,9999);
	$value=mysqli_fetch_array($v);
	$id=$value['id'];
		$con->query("UPDATE info SET OTP='$otp' where EMAIL='$user' OR NAME='$user'");
		$s=$con->query("SELECT * FROM info WHERE EMAIL='$user' or NAME='$user'");



	//mail("akashkbhagat221199@gmail.com","otp","$otp","FROM:madimran.aec@gmail.com");
	    session_start();
	    $row=mysqli_fetch_assoc($s);
		$_SESSION['NAME']=$row['NAME'];
		$_SESSION['EMAIL']=$row['EMAIL'];
		$_SESSION['id']=$row['id'];
		$_SESSION['PASSWORD']=$row['PASSWORD'];
		$_SESSION['OTP']=$row['OTP']; 
		
	    header("location:up.php");

}
else
{
	echo("<H1><center><br><br><br><br><br><br>INVALID EMAIL/MOBILE...</center></H1>");
}
?>