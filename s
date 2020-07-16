<?php

$con = mysqli_connect('localhost','root','','project');
$date= array();
if(isset($_SESSION['username']))
	{
		$res = mysqli_query($con,"SELECT * FROM birthdaybook where username1 = '".$_SESSION['username']."'") or die( 
		mysqli_error($con));
		
         $res1 = mysqli_query($con,"SELECT * FROM wedbook where username2 = '".$_SESSION['username']."'") or die( 
		mysqli_error($con));
		 if($_SESSION['username']==$username3){
		while($row = mysqli_fetch_assoc($res)){
			if(strtotime( $row['partydate'])!=strtotime($eventdate)){
				while($row1 = mysqli_fetch_assoc($res1)){
					if(strtotime($row1['datefrom'])!=strtotime($eventdate)){
						$query = "INSERT INTO eventbook2(eventtype,eventdate,budget1,eventvenue,guests3,theme1,foodtype,ename,username3,emailid3,contact3) values('$eventtype','$eventdate','$budget1','$eventvenue','$guests3','$theme1','$ch1','$ename','$username3','$emailid3','$contact3')";
$result = mysqli_query($con,$query);
if ($result)
{
			echo "<script type='text/javascript'>alert('Your event has been successfully booked!!!')</script>";
}
else
{
	echo "<script type='text/javascript'>alert('Connection Failed!!')</script>";
	}
	

					}
				}
			}
			else{"<script type='text/javascript'>alert('you hv already booked on that date!!')</script>";
}
		}
			
		
		}
		
	else{
	echo"<script type='text/javascript'>alert('enter right username')</script>";}

}}
else{
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
<style>
 .karthi button{
	padding: 15px 32px;
	font-size: 16px;
  margin-left:150px;
 
}

footer{
	margin-top:100px;
	height:338px;
	background-color:#000;
}
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

