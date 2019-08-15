<?php
session_id("deb");
session_start();

echo "<title>FUBBLE | NEW DISCUSSION </title>
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
echo("<body><center style='color:white'><b><h1><b>FUBBLE</b></h1>
         <h2>Online Disscussion Forum</h2>
    <img src='photos/FUBBLE.png' height='40%'>
    <h3>Give wings to your curiosity!!!</h3></b>
  </center><center>
  <H3 style='color:white'> PLEASE SUGGEST TOPIC FOR DISSCUSSION<br><br></h3><h3>
  <form action='new.php' method='post'>
  <input type='text' name=new placeholder='NEW TOPIC'><br><br>
  <input type='submit' placeholder='DISCUSS' class='w3-black w3-button'>
  </form>");

?>