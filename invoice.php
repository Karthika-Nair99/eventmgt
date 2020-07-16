<head>


 <title>Glitzz Events</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel = "icon" href ="logo.png"  type = "image/x-icon"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
 <link type="text/css" rel="stylesheet" href="book2.css" >
 <style type="text/css">
 .mail1 button{
	     background-color: #800080;
         border: none;
         color: white;
         text-align: center;
         text-decoration: none;
         display: inline-block;
		 padding: 20px 34px;
		 border-radius:6px;
         cursor: pointer;
	    font-size:27px;
	    margin-left:550px;
}
#nil b{
	font-size:60px;
	text-align: center;
	background-color: #800080;
	display: inline-block;
	color: white;
	margin-left:150px;
	padding: 20px 34px;
	margin-top:100px;
}

#nil img{
	
	align: center;
	
    margin-top:70px;
	margin-left:450px;
	padding: 10px 24px;
	
}

tr:hover {background-color: #f5f5f1;}
td:hover{background-color: #f5f585;}
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

<?php 

$con = mysqli_connect('localhost','root','','project');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$a = 0;

if(isset($_SESSION['username']))
	{
		if(isset($_POST['button1']))
		{
		$result = mysqli_query($con,"SELECT * FROM birthdaybook where username1 = '".$_SESSION['username']."'ORDER BY id DESC LIMIT 1 ") or die( 
		mysqli_error($con));
		$a = 1;
		}
		if(isset($_POST['button2']))
		{
		$result1 = mysqli_query($con,"SELECT * FROM wedbook where username2 = '".$_SESSION['username']."'ORDER BY id DESC LIMIT 1 ") or die( 
		mysqli_error($con));
		$a = 2;
		}
		if(isset($_POST['button3']))
		{
		$result2 = mysqli_query($con,"SELECT * FROM eventbook2 where username3 = '".$_SESSION['username']."'ORDER BY id DESC LIMIT 1 ") or die( 
		mysqli_error($con));
		$a = 3;
		}
	}
if($a == 1){
	$row = mysqli_num_rows($result);
	if($row==0){
		echo "<script>
window.location.href='birthf.php';
alert('You Have No Booked Events');
</script>";
}
	else{
		echo"<h1>Invoice</h1>";
       echo"<div id='bdae'>";
       echo "<table id=\"my_table\" border='1'>";
        while($row = mysqli_fetch_assoc($result))
       {
	echo "<b> Birthday Booking </b>";
    echo "<tr>";
    echo"<td>PARTYFOR</td>";
    echo "<td>" . $row['partytype'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo"<td>PARTYDATE</td>";
    echo "<td>" . $row['partydate'] . "</td>";
    echo "</tr>";
    echo "<tr>";
echo"<td>LOCATION</td>";
echo "<td>" . $row['partyloc'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>CAKE</td>";
echo "<td>" . $row['cake'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>GUESTS</td>";
echo "<td>" . $row['guests'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>FOODCOURSE</td>";
echo "<td>" . $row['foodcourse'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>FOODCHOICE</td>";
echo "<td>" . $row['foodchoice'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>NAME</td>";
echo "<td>" . $row['bname'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>USERNAME</td>";
echo "<td>" . $row['username1'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>EMAIL</td>";
echo "<td>" . $row['emailid1'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>CONTACT</td>";
echo "<td>" . $row['contact1'] . "</td>";
echo "</tr>";
}
   echo "</table>";

echo"<form method='post' action='email.php'autocomplete='on'>";
echo"<div class='mail1'>";
echo"<button type='submit' name='a'>send mail!!!</button>";
echo"</div>";
echo"</form>";

echo"</div>";
	}
}
if($a == 2){
	$row1 = mysqli_num_rows($result1);
	if($row1==0){
		echo "<script>
window.location.href='wedding.php';
alert('You Have No Booked Events');
</script>";
}
else{
echo"<div id='wed'>";
echo "<br><br><b> Wedding Booking </b>";

echo "<table id=\"my_table\" border='1'>";
while($row1 = mysqli_fetch_assoc($result1))
{
echo "<tr>";
echo"<td>Event Type</td>";
echo "<td>" . $row1['eventtype'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>DATE FROM</td>";
echo "<td>" . $row1['datefrom'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>TILL DATE</td>";
echo "<td>" . $row1['tilldate'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>BUDGET</td>";
echo "<td>" . $row1['budget2'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>FUNCTIONS</td>";
echo "<td>" . $row1['functions'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>GUESTS</td>";
echo "<td>" . $row1['guests'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>LOCATION</td>";
echo "<td>" . $row1['location'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>HALL SIZE</td>";
echo "<td>" . $row1['hallsize'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>THEME</td>";
echo "<td>" . $row1['theme'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>FOOD CHOICE</td>";
echo "<td>" . $row1['foodtype'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>NAME</td>";
echo "<td>" . $row1['wname'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>USERNAME</td>";
echo "<td>" . $row1['username2'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>EMAIL</td>";
echo "<td>" . $row1['emailid2'] . "</td>";
echo "</tr>";
echo "<tr>";
echo"<td>CONTACT</td>";
echo "<td>" . $row1['contact2'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"<form method='post' action='email.php'autocomplete='on'>";
echo"<div class='mail1'>";
echo"<button type='submit' name='b'>send mail!!!</button>";
echo"</div>";
echo"</form>";

echo"</div>";

echo"</div>";
}
}
if($a == 3){
	$row2 = mysqli_num_rows($result2);
	if($row2==0){
		echo "<script>
window.location.href='events.php';
alert('You Have No Booked Events');
</script>";
}
else{
echo"<div id='event'>";
echo "<table id=\"my_table\" border='1'>";
while($row2 = mysqli_fetch_assoc($result2))
{
echo"<tr>";
echo"<td>Event Type</td>";
echo "<td>" . $row2['eventtype'] . "</td>";
echo"</tr>";
echo"<tr>";
echo"<td>Event DATE</td>";
echo "<td>" . $row2['eventdate'] . "</td>";
echo"</tr>";
echo"<tr>";
echo"<td>BUDGET</td>";
echo "<td>" . $row2['budget1'] . "</td>";
echo"</tr>";
echo"<tr>";
echo"<td>Event VENUE</td>";
echo "<td>" . $row2['eventvenue'] . "</td>";
echo"</tr>";
echo"<tr>";
echo"<td>GUESTS</td>";
echo "<td>" . $row2['guests3'] . "</td>";
echo"</tr>";
echo"<tr>";
echo"<td>THEME</td>";
echo "<td>" . $row2['theme1'] . "</td>";
echo"</tr>";
echo"<tr>";
echo"<td>FOOD Type</td>";
echo "<td>" . $row2['foodtype'] . "</td>";
echo"</tr>";
echo"<tr>";
echo"<td>NAME</td>";
echo "<td>" . $row2['ename'] . "</td>";
echo"</tr>";
echo"<tr>";
echo"<td>USERNAME</td>";
echo "<td>" . $row2['username3'] . "</td>";
echo"</tr>";
echo"<tr>";
echo"<td>EMAIL</td>";
echo "<td>" . $row2['emailid3'] . "</td>";
echo"</tr>";
echo"<tr>";
echo"<td>CONTACT</td>";
echo "<td>" . $row2['contact3'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"<form method='post' action='email.php'autocomplete='on'>";
echo"<div class='mail1'>";
echo"<button type='submit' name='c'>send mail!!!</button>";
echo"</div>";
echo"</form>";

echo"</div>";

echo"</div>";
}
}
mysqli_close($con);
?>

	
<footer>
	
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