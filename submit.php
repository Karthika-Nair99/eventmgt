<?php

$con = mysqli_connect('localhost','root','','project');

if(isset($_POST['book1']))
{
$partytype = $_POST['partytype'];
$partydate = $_POST['partydate'];
$budget = $_POST['budget'];
$partyloc = $_POST['partyloc'];
$cake = $_POST['cake'];
$guests = $_POST['guests'];
$foodcourse = $_POST['foodcourse'];
$foodchoice = $_POST['foodchoice'];
$bname = $_POST['bname'];
$username1 = $_POST['username1'];
$emailid1 = $_POST['emailid1'];
$contact1 = $_POST['contact1'];

$query = "INSERT INTO birthdaybook(partytype,partydate,budget,partyloc,cake,guests,foodcourse,foodchoice,bname,username1,emailid1,contact1) values('$partytype','$partydate','$budget','$partyloc','$cake','$guests','$foodcourse','$foodchoice','$bname','$username1','$emailid1','$contact1')";
$result = mysqli_query($con,$query);
if ($result)
{
	echo "<script type='text/javascript'>alert('Your event has been successfully booked!!!')</script>";
}
else
{
	echo "<script type='text/javascript'>alert('Connection Failed!!')</script>";
}}
else
{
	echo " ";
}
?>


<!DOCTYPE html>

<head>


 <title>Glitzz Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel = "icon" href ="logo.png"  type = "image/x-icon"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
 <link type="text/css" rel="stylesheet" href="book2.css" >

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



<form method="post">
<button type="submit" name="book1">Book Event Now!!!</button>
</form>
</body>