<?php

  if($_POST)
  {
	  $errors = array();
	  
	  //validation
	  if(empty($_POST['name']))
	  {
		$errors['name1']="your name cannot be empty" ;
	  }
	  
	  if(empty($_POST['username']))
	  {
		$errors['username1']="your name cannot be empty" ;
	  }
	  
	  if(empty($_POST['emailid']))
	  {
		$errors['emailid1']="your name cannot be empty" ;
	  }
	  
	  if(empty($_POST['contact']))
	  {
		$errors['contact1']="your name cannot be empty" ;
	  }
  }
?>
<!DOCTYPE html>

<head>


 <title>Glitzz Events</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel = "icon" href ="logo.png"  type = "image/x-icon"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
 <link type="text/css" rel="stylesheet" href="book2.css" >
 <style>
 .karthi button{
	padding: 15px 32px;
	font-size: 16px;
  margin-left:150px;
 
}

    
 .login-wrap{
	 margin-top:30px;
 }
  </style>
</style>

</head>

<body>


<div class="container1">
    
 <header>
   
 <div class="menubar">

 <div class="logo">

	 <a href="finalh.php">
	<img src="logo.png">
	</a>
	 
	</div>
   
	 <ul>
      
	<li><a href="finalh.php">HOME</a></li>
      
	<li><a href="finalh.php#about-us">ABOUT US</a></li>
      
	<li><a href="finalh.php#gallery">GALLERY</a></li>
     
	 <li><a href="finalh.php#events">SERVICES</a>
        
	<ul>
         
	<li><a href="birthf.php">BIRTHDAY  </a></li>
        
	 <li><a href="wedding.php">WEDDING </a>
         
	     
	</li>
         
	<li><a href="events.php">OTHER EVENTS</a></li>
       
	 </ul>
	   
	</li>
      
	<li><a href="contact1.php">CONTACT</a></li>
	 </ul>
   
</div>
<div class="login-wrap">
	<div class="login-form">

<form method="post" target="">
<img src="bk2.jpg" alt="Wedding Event">
		<div class="head">
		<h1>Birthday Party Event Booking</h1>
		<hr>
		<h2>Contact Details</h2>
		<label for="name">Name</label>
 		 <input type="text" id="name" name="name1" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"/>
		 <?php if(isset($errors['name1'])) echo $errors['name1']; ?>
  		<label for="username">UserName</label>
 		 <input type="text" id="username" name="username1" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?> "/>
		 <?php if(isset($errors['username1'])) echo $errors['username1']; ?>
		<label for="emailid">Email ID</label>
 		 <input type="email" id="emailid" name="emailid1" value="<?php if(isset($_POST['emailid'])) echo $_POST['emailid']; ?>"/>
		 <?php if(isset($errors['emailid1'])) echo $errors['emailid1']; ?>
		<label for="contact">Contact Number</label>
 		 <input type="text" id="contact" name="contact1" value="<?php if(isset($_POST['contact'])) echo $_POST['contact']; ?>"/>
		 <?php if(isset($errors['contact1'])) echo $errors['contact1']; ?>
		<br><br><br>
		
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" value="submit"/>
		<br><br><br>
</div>
</form>
</div>
</div>




































	<footer>
	
	<h5>Glitzz Events</h5>
	
	<div class="flogo">
	
	<img src="logo.png">
	
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
	  
	<li><a href="D:\IP Project\loginpg.php">SIGN IN</a></li>
	
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