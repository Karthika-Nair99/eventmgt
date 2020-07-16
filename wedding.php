<!DOCTYPE html>
<head>
 <title>Glitzz Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel = "icon" href ="logo.png"  type = "image/x-icon"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style1.css">
</head>
<body>
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
         <li><a href="birthf.php">BIRTHDAY </a></li>
         <li><a href="wedding.php">WEDDING </a>
	     </li>
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
	<article class="itop">
	<img src="bg49.jpg">
	    <p></p>

	</article>
	<article>
	<h2>Wedding Events</h2>
	<section class="link">
		<a href="#modal3" class="modal3-open">
	<div class="d">
	 <h3>Wedding Anniversary</h3>
	</div>
	</a>
	<div class="modal3" id="modal3">
    <div class="modal3__content">
      <a href="#d" class="modal3__close">&times;</a>
      <h2 class="modal3__heading">Wedding Anniversary</h2>
      <p class="modal3__paragraph">It is a ceremony used to remember the joy of marriage and to appreciate the ability to still be together after so many years has passed. most romantic part is when couples express their love for each other and renew their vows.We Glitzz events can help you create a cherishable moment for life!!! <br>
</p>
 </div>
 </div>

	<a href="#modal2" class="modal2-open">
	<div class="e">
	 <h3>Traditional Wedding</h3>
	</div>
	</a>
	<div class="modal2" id="modal2">
    <div class="modal2__content">
      <a href="#e" class="modal2__close">&times;</a>
      <h2 class="modal2__heading">Traditional Wedding</h2>
      <p class="modal2__paragraph">A traditional wedding focuses on the marrying couple’s heritage, and fuses culture and a party atmosphere to ring in a new marriage. It’s all about incorporating traditions from both cultures, and often little consideration is given to the overall cost of the wedding.
<br>
</p>
 </div>
 </div>

	<a href="#modal1" class="modal1-open">
	<div class="f">
	 <h3>Destination Wedding</h3>
	</div>
	</a>
	<div class="modal1" id="modal1">
    <div class="modal1__content">
      <a href="#f" class="modal1__close">&times;</a>
      <h2 class="modal1__heading">Destination Wedding</h2>
      <p class="modal1__paragraph">An opportunity for a couple to hold a wedding in a romantic location without spending a fortune, a destination wedding removes many of the stresses of planning a regular wedding. Every wedding detail can be arranged at a resort destination to suit your taste from afar. After the wedding ceremony, the celebration can last for hours or even days, with meals and outings arranged for you and your guests.<br>
</p>
 </div>
 </div>
</section>
	</article>
	<?php
							global $con;
							global $cnnt;
                            if(!isset($_SESSION['username']))
                            
                            {
                                echo "<a href='finalh.php?in=true' class='button'>Book</a>";
                                if(isset($_GET['in'])){
                                    echo "<script type='text/javascript'> alert('Please login!!!') </script>";
									echo "<script  type='text/javascript'> window.location.assign('signin.php') </script>";									
                                }
                            }
                            else{
                                echo "<a href='wedbook.php?in=true' class='button'>Book</a>";
                               if(isset($_GET['out']))
                                {
                                    echo "<script  type='text/javascript'> window.location.assign('wedbook.php')</script>";
                                }
                            }
                    ?>


	<!--a href="wedbook.php" class="button">Book</a-->

	<footer id="wd1">
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
