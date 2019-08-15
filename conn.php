<?php
session_start();
$usr=$_SESSION['id'];
echo "<title>FUBBLE | DISCUSSION </title>
<link rel='icon' href='photos/f.jpg'>
<link rel='stylesheet' href='w3.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<body bgcolor=yellow>
<style type='text/css'>
	body {
		
		background-image: url('photos/dashbg.jpg');
		font-family: 'Roboto', sans-serif;
	}
   .body-rl {
  margin-left: 400px;
  margin-right: 10px;
}
	
	::placeholder {
  color: black;
  opacity: 1;

:-ms-input-placeholder {
 color: black;
}

::-ms-input-placeholder {
.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}
	</style>";

echo("<!-- Sidebar/menu -->
<nav class='w3-sidebar w3-collapse w3-white w3-animate-left' style='z-index:3;width:225px;' id='mySidebar'><br>
  <div class='w3-container'>
    <a href='#' onclick='w3_close()' class='w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey' title='close menu'>
      <i class='fa fa-remove'></i>
    </a>
    <img src='photos/img_avatar4.png' style='width:100%;' class='w3-round'><br><br>
    <h2><b>My Account</b></h2>
    <h3 class='w3-text-grey'>@fubble.tk</h3>
  </div>
  <div class='w3-bar-block'><h5>
    <a href='#about' onclick='w3_close()' class='w3-bar-item w3-button w3-padding'><i class='fa fa-user fa-fw w3-margin-right'></i>".$_SESSION['NAME']."</a> 
    <a href='#contact' onclick='w3_close()' class='w3-bar-item w3-button w3-padding'><i class='fa fa-envelope fa-fw w3-margin-right'></i>".$_SESSION['EMAIL']."</a></h5>
  </div>
  <div class='w3-panel w3-large '><h3>
    <i class='fa fa-facebook-official w3-hover-opacity'></i>
    <i class='fa fa-instagram w3-hover-opacity'></i>
    <i class='fa fa-snapchat w3-hover-opacity'></i>
    <i class='fa fa-pinterest-p w3-hover-opacity'></i>
    <i class='fa fa-twitter w3-hover-opacity'></i>
    <i class='fa fa-linkedin w3-hover-opacity'></i></h3>
  </div><hr>
  
  <div class='w3-container w3-border-top w3-padding-16 w3-light-grey'>
      	<form action=t.php method='post'><input type='submit' value='LOGOUT' class='w3-button w3-black'></form>
      </div>

</nav>
");
$_SESSION['id']=$usr;
$con=mysqli_connect("localhost","root","","fubble");
$q=$con->query("SELECT * FROM disscussion WHERE id='$usr'");
$row=mysqli_fetch_assoc($q);
if(mysqli_num_rows($q)>0){
	$nam=$row['NAME'];
$data=$row['DATA'];
echo("<div style='color:white'><center><h1> Topic:- ".$nam."</h1><br><br><h3 align=left class='w3-animate-left body-rl'>".$data);
echo("</div></h3><h3><center><form action=cmnt.php method='post'>
    <input type='text' name=cmnt placeholder='ENTER COMMENT'>
    <input type='submit' value='ADD COMMENT'  class='w3-button w3-black'><br><br>
    <input type='submit' formaction='dashboard.php' value='BACK' class='w3-button w3-black'></form>");
}else{
	echo("<center> WRONG TOPIC ID......<BR><h1>
		<a href='dashboard.php'>CLICK HERE TO RETRY</a></h1></center>");
}
?>