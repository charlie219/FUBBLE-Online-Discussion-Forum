<?php
session_id("deb");
session_start();
$id=$_SESSION['id'];
$c=$_POST['cmnt'];
$l=64;
while(strlen($c)>$l){
	if($c[$l]==' '){
		$c=substr($c,0,$l)."<br>".substr($c,$l);
		$l=$l+60;
	}else{
		
		$l=$l+1;
	}
}
$con=mysqli_connect("localhost","root","","fubble");
$frm=$_SESSION["EMAIL"];
$M=mysqli_fetch_array($con->query("SELECT NAME from info where EMAIL='$frm'"));
$cmnt="@<b>$M[0]</b> :- $c";
$con->query("UPDATE disscussion SET DATA =concat(DATA,'<br>','$cmnt') WHERE id='$id'");


$req="val=$id";
header("location:conn.php");


?>
