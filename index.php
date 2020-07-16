<!DOCTYPE html>
<html>
<title>Availability calendar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="css.css">
<link rel = "icon" href ="logo.png"  type = "image/x-icon"> 

<link type="text/css" rel="stylesheet" href="style.css"/>    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
      <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>
    
<body>

<!-- Navigation bar with social media icons -->
  <div class="container">
  <header>
    <div class="menubar">
	 <div class="logo">
	 <a href="finalh.php"><img src="logo.png"></a>
	 </div>
     <ul>
      <li><a href="finalh.php">HOME</a></li>
      <li><a href="finalh.php#about-us">ABOUT US</a></li>
      <li><a href="finalh.php#gallery">GALLERY</a></li>
      <li><a href="#">SERVICES</a>
        <ul>
         <li><a href="birthf.php">BIRTHDAY  </a></li>
         <li><a href="wedding.php">WEDDING </a></li>
         <li><a href="events.php">OTHER EVENTS</a></li>
        </ul>
	   </li>
      <li><a href="contact1.php">CONTACT</a></li>
	  <li><?php
                            session_start();
							global $con;
							$cnnt = 0;
							
                            if(!isset($_SESSION['username']))
                            
                            {
                                echo "<a href='finalh.php?in=true'>SIGN IN</a>";
                                if(isset($_GET['in'])){
                                    echo "<script> window.location.assign('signin.php')</script>";
									$cnnt =1;
                                }
                            }
                            else{
                                echo "<a href='finalh.php?out=true'>SIGN OUT</a>";
                               if(isset($_GET['out']))
                                {
                                    echo "<script> window.location.assign('signin.php')</script>";
									$cnnt = 0;
                                    session_unset();
                                }
                            }
                    ?></li>
     
     </ul>
    </div>
	</header>
  <?php include_once('functions.php'); ?>
      <h2 style="text-align: center";>Availability calendar</h2>
          <br>
          <div id="calendar_div">
	<?php echo getCalender(); ?>
</div>
          

<footer id="footer">
	<h5>Glitzz Events</h5>
	<div class="flogo">
	<a href="finalh.php"><img src="logo.png"></a>
	</div>
    <div class='v1'></div>
	<div class="add">
	<h6>Glitzz events ltd<br>Link road<br>Mumbai</h6>
	</div>
	<div class='v2'></div>
	<div class="cont">
	<h6>Contact Us<br>Email: glitzzevents@gmail.com<br>Mob no:(212) 555-2368</h6>
    </div>
	<ul class="foot">
      <li><a href="finalh.php">HOME</a></li>
      <li><a href="finalh.php#events">SERVICES</a></li>
	  <li><a href="contact1.php">CONTACT</a></li>
	  <li><a href="loginpg.php">SIGN IN</a></li>
	</ul>
	<div class="fw">
		<h6>Follow Us</h6>
	</div>
	<a href="#" class="fa fa-facebook"></a>
    	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-instagram"></a>
	<div class="cp-text">
    	© Copyright 2019 Glitzz Events. All rights reserved.
	</div>

	
	</footer>
</div>
</body>
</html>