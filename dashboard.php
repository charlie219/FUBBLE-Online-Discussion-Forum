<?php
session_id("deb");
session_start();
$x=0;
echo "<title>FUBBLE | DASHBORD </title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='icon' href='photos/f.jpg'>
<link rel='stylesheet' href='w3.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<body bgcolor=yellow>
<style type='text/css'>
	body {
		background-image: url('photos/dashbg2.jpeg');
		font-family: 'Roboto', sans-serif;
		
	}
	.body-r {
  margin-left: 300px;
  margin-right: 10px;
}
	.body-rl {
  margin-left: 200px;
  margin-right: 10px;
}
	
	::placeholder {
  color: black;
  opacity: 1;

:-ms-input-placeholder {
 color: black;
}

input[type=text] {
  background-color:black;
  color:red;
}
	</style>";
	echo("<!-- Sidebar/menu -->
<nav class='w3-sidebar w3-collapse w3-white w3-animate-left' style='z-index:3;width:250px;' id='mySidebar'><br>
  <div class='w3-container'>
    <a href='#' onclick='w3_close()' class='w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey' title='close menu'>
      <i class='fa fa-remove'></i>
    </a>
    <center><img src='photos/img_avatar4.png' style='width:100%;' class='w3-circle w3-margin-top'></center>
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
$con=mysqli_connect("localhost","root","","fubble");
$sql = "SELECT id,NAME FROM disscussion";
$result = $con->query($sql);
echo("<H1 class='body-rl' style='color:white'><center><b><u>FUBBLE<BR>ONLINE DISSCUSSION FORUM<BR> MY PROFILE<BR></B><BR>
	<img src='photos/FUBBLE.png' height='30%'></H1><br><center><h1 class='body-rl w3-black' style='color:white'><br>ONGOING TOPICS<br></h1></U>
	</center>");
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if($row["id"]<10){
        echo "<div class='row body-rl'><center><h3 style='color:white'><br>Topic id: NOC01900". $row["id"]. "<br>Topic Name:- ".$row["NAME"]."</center></div></div>";
      }else{
        echo "<div class='row body-rl'><center><h3 style='color:white'><br>Topic id: NOC0190". $row["id"]. "<br>Topic Name:- ".$row["NAME"]."</center></div></div>";
      }
    }
}echo("<br><center><div class='body-rl input'><h4>
	<form action='dis.php' method= 'post'>
	<input type='text' name='val' placeholder='Enter Disscussion ID'>
	<input type='submit' name='' value='Enter the Disscussion' class='w3-button w3-black'>
	<br><br>
	<input type='submit' name='' value='START NEW DISSCUSSION' formaction='newdis.php' class='w3-button w3-black'>
	</form></h4><div>");
echo("<br><br><br><br></center>
	<!-- Container (Contact Section) -->
<div class='w3-content w3-container w3-padding-64 body-r' id='contact'>
  <h3 class='w3-center' style='color:white'>WHERE TO FIND ME</h3>
  <h4 class='w3-center' style='color:white'><em>I'd love your feedback!</em></h4>

  <div class='w3-row w3-padding-32 w3-section'>
    <div class='w3-col m4 w3-container'>
      <img src='photos/nsec.jpg' class='w3-image w3-round' style='width:100%'>
    </div><b>
    <div class='w3-col m8 w3-panel'>
      <div class='w3-large w3-margin-bottom'><h4 style='color:white'><b>
        <i class='fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right'></i>Netaji Subhash Engineering college, Garia,Kolkata , INDIA<br>
        <i class='fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right'></i>Phone: +91 7004000074<br>
        <i class='fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right'></i>Email:askme.fubble1199@gmail.com<br></h4></b>
      </div>
      <h4 style='color: white'>Swing by for a cup of <i class='fa fa-coffee'></i>, or leave me a note:</h4></b>
      <form action='contact2.php' method='post'>
        
        <input class='w3-input w3-border' type='text' placeholder='Message' required name='Message'>
        <button class='w3-button w3-black w3-right w3-section' type='submit'>
          <i class='fa fa-paper-plane'></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
")
?>