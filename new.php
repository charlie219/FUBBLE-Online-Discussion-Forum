<?php
$new=$_POST['new'];
$con=mysqli_connect("localhost","root","","fubble");
$con->query("INSERT INTO disscussion SET NAME='$new'");
echo("<title>FUBBLE | New Disscussion </title>
<link rel='icon' href='photos/f.jpg'>
<body bgcolor=yellow>
<style type='text/css'>
	body {
		color: #fff;
		background-image: url('photos/book.jpg');
		font-family: 'Roboto', sans-serif;
	}</style>");
echo("<center><b><h1><b>FUBBLE</b></h1>
         <h2>Online Disscussion Forum</h2>
    <img src='photos/FUBBLE.png' height='40%'>
    <h3>Give wings to your curiosity!!!</h3></b>
  <br><br><br><br><br><H1>THANK YOU FOR YOUR SUGGETIONN</H1>
  <br><br><h2><a href='dashboard.php'> CLICK HERE TO DISCUSS</a></h1></center><h2>");
?>