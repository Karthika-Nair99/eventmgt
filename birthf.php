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
	<article class="itop">
	<img src="bg54.jpg">
	    <p></p>

	</article>
	<article>
	<h2>Birthday Events</h2>
	<section class="link">
		<a href="#modal3" class="modal3-open">
	<div class="a">
	 <h3>Adults</h3>
	</div>
	</a>
	<div class="modal3" id="modal3">
    <div class="modal3__content">
      <a href="#a" class="modal3__close">&times;</a>
      <h2 class="modal3__heading">Adults</h2>
      <p class="modal3__paragraph">Birthdays are are one of the most memorable events for us. So make them precious, to be cherished and treasured. And what else than blasting parties can help them turn real great? Especially if the parties are laid with nice themes in sync with the true spirit. While kid's are blessed with themes galore, the adults are often left biting their nails for a theme that rhymes with the celebration of reaching a milestone age. Well, for many of us reaching those milestone ages, say  40, 50, or 75, and beyond.<br>
</p>
 </div>
 </div>

	<a href="#modal2" class="modal2-open">
	<div class="b">
	 <h3>Young Adults</h3>
	</div>
	</a>
	<div class="modal2" id="modal2">
    <div class="modal2__content">
      <a href="#b" class="modal2__close">&times;</a>
      <h2 class="modal2__heading">Young Adults</h2>
      <p class="modal2__paragraph">Main Event can host a celebration you'll never forget. Choose from awesome activities, chef-inspired catering, and full-bar service to make the birthday celebrations epic. Pick a location, give us some details on the size and type of birthday event you'd like, and one of our party planners will be in touch to help make it happen!<br>
</p>
 </div>
 </div>

	<a href="#modal1" class="modal1-open">
	<div class="c">
	 <h3>Kids</h3>
	</div>
	</a>
	<div class="modal1" id="modal1">
    <div class="modal1__content">
      <a href="#c" class="modal1__close">&times;</a>
      <h2 class="modal1__heading">Kids</h2>
      <p class="modal1__paragraph">For every parent, their child’s birthday is a special occasion. They may want to organize a fun, exciting birthday party that is likely to bring a big smile on their child’s face and create lasting memories.We Glitzz Event can host a wonderful theme based birthday party  which your child will cherish!!!<br>
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
                                echo "<a href='birthdaybook.php?in=true' class='button'>Book</a>";
                               if(isset($_GET['out']))
                                {
                                    echo "<script  type='text/javascript'> window.location.assign('birthdaybook.php')</script>";
                                }
                            }
                    ?>


	<footer id="br1">
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
