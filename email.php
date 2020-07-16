<head>


 <title>Glitzz Events</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel = "icon" href ="logo.png"  type = "image/x-icon"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
 <link type="text/css" rel="stylesheet" href="book2.css" >
 <style type="text/css">
 .mail1{
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
<h1>Invoice</h1>
<?php
$con = mysqli_connect('localhost','root','','project');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['a'])){
if(isset($_SESSION['username']))
	{
      $result = mysqli_query($con,"SELECT * FROM birthdaybook where username1 = '".$_SESSION['username']."'ORDER BY id DESC LIMIT 1 ") or die( 
		mysqli_error($con));
		
	}
while($row = mysqli_fetch_assoc($result))
{
  $partytype=$row['partytype'];
  $partydate=$row['partydate'];
  $partyloc=$row['partyloc'];
  $cake=$row['cake'];
  $guests=$row['guests'];
  $foodcourse=$row['foodcourse'];
  $foodchoice=$row['foodchoice'];
  $bname=$row['bname'];
  $username1=$row['username1'];
  $emailid1=$row['emailid1'];
  $contact1=$row['contact1'];
}

	$to= $emailid1;
	$subject='INVOICE';
	$message='<html><body>';
	$headers = "Content-Type: text/html; charset=UTF-8\r\n";
$message .='<table id=\"my_table\" border="1"><tr><td>PARTYFOR</td><td>'.$partytype .'</td></tr><tr><td>PARTYDATE</td><td>'.$partydate. '</td></tr><tr><td>LOCATION</td><td> '. $partyloc .' </td></tr><tr><td>CAKE</td><td> '. $cake .' </td></tr><tr><td>GUESTS</td><td> '. $guests .' </td></tr><tr><td>FOODCOURSE</td><td> '. $foodcourse.'</td></tr><tr><td>FOODCHOICE</td><td> '. $foodchoice.' </td></tr><tr><td>NAME</td><td> '. $bname .' </td></tr><tr><td>USERNAME</td><td> '. $username1 .'</td></tr><tr>
<td>EMAIL</td><td>'. $emailid1 .' </td></tr><tr><td>CONTACT</td><td> '. $contact1 . '</td></tr></table></body></html>';

if(mail($to,$subject,$message,$headers)){
	
	
	echo "<script>alert('Email has been sent successfully !!!');";
	       echo 'window.location.href= "bookhistory.php";</script>';


}
else{
	echo"wrong";
}
}


if(isset($_POST['b'])){
if(isset($_SESSION['username']))
	{
      $result1 = mysqli_query($con,"SELECT * FROM wedbook where username2 = '".$_SESSION['username']."'ORDER BY id DESC LIMIT 1 ") or die( 
		mysqli_error($con));
		
	}
while($row1 = mysqli_fetch_assoc($result1))
{
  $eventtype=$row1['eventtype'];
  $datefrom=$row1['datefrom'];
  $tilldate=$row1['tilldate'];
  $budget2=$row1['budget2'];
  $location=$row1['location'];
  $functions=$row1['functions'];
  $guests=$row1['guests'];
  $hallsize=$row1['hallsize'];
  $theme=$row1['theme'];
  $foodtype =$row1['foodtype'];
  $wname=$row1['wname'];
  $username2=$row1['username2'];
  $emailid2=$row1['emailid2'];
  $contact2=$row1['contact2'];
}

	$to= $emailid2;
	$subject='INVOICE';
	$message='<html><body>';
	$headers = "Content-Type: text/html; charset=UTF-8\r\n";
    $message .='<table id=\"my_table\" border="1"><tr><td>EVENT TYPE</td><td>'.$eventtype.'</td></tr><tr><td>DATE FROM</td><td>'.$datefrom. '</td></tr><tr><td>TILL DATE</td><td>'.$tilldate. '</td></tr><tr><td>BUDGET</td><td>'.$budget2. '</td></tr><tr><td>LOCATION</td><td> '. $location .' </td></tr><tr><td>FUNCTIONS</td><td> '. $functions .' </td></tr><tr><td>GUESTS</td><td> '. $guests .' </td></tr><tr><td>HALL SIZE</td><td>'.$hallsize. '</td></tr><tr><td>THEME</td><td> '. $theme.'</td></tr><tr><td>FOODTYPE</td><td> '. $foodtype.' </td></tr><tr><td>NAME</td><td> '. $wname .' </td></tr><tr><td>USERNAME</td><td> '. $username2 .'</td></tr><tr>
<td>EMAIL</td><td>'. $emailid2 .' </td></tr><tr><td>CONTACT</td><td> '. $contact2 . '</td></tr></table></body></html>';

if(mail($to,$subject,$message,$headers)){
	echo "<script>alert('Email has been sent successfully !!!');";
	       echo 'window.location.href= "bookhistory.php";</script>';

}
else{
	echo"wrong";
}
}


if(isset($_POST['c'])){
if(isset($_SESSION['username']))
	{
      $result2 = mysqli_query($con,"SELECT * FROM eventbook2 where username3 = '".$_SESSION['username']."'ORDER BY id DESC LIMIT 1 ") or die( 
		mysqli_error($con));

		
	}
while($row2 = mysqli_fetch_assoc($result2))
{
  $eventtype=$row2['eventtype'];
  $eventvenue=$row2['eventvenue'];
  $eventdate=$row2['eventdate'];
  $budget1=$row2['budget1'];
  $guests3=$row2['guests3'];
  $theme1=$row2['theme1'];
  $foodtype =$row2['foodtype'];
  $ename=$row2['ename'];
  $username3=$row2['username3'];
  $emailid3=$row2['emailid3'];
  $contact3=$row2['contact3'];
}

	$to= $emailid3;
	$subject='INVOICE';
	$message='<html><body>';
	$headers = "Content-Type: text/html; charset=UTF-8\r\n";
    $message .='<table id=\"my_table\" border="1"><tr><td>EVENT TYPE</td><td>'.$eventtype.'</td></tr><tr><td>EVENT VENUE</td><td>'.$eventvenue. '</td></tr><tr><td>EVENT DATE</td><td>'.$eventdate. '</td></tr><tr><td>BUDGET</td><td>'.$budget1. '</td></tr><tr><td>GUESTS</td><td> '. $guests3 .' </td></tr><tr><td>THEME</td><td> '. $theme1.'</td></tr><tr><td>FOODTYPE</td><td> '. $foodtype.' </td></tr><tr><td>NAME</td><td> '. $ename .' </td></tr><tr><td>USERNAME</td><td> '. $username3 .'</td></tr><tr><td>EMAIL</td><td>'. $emailid3 .' </td></tr><tr><td>CONTACT</td><td> '. $contact3 . '</td></tr></table></body></html>';

if(mail($to,$subject,$message,$headers)){
	echo "<script>alert('Email has been sent successfully !!!');";
	       echo 'window.location.href= "bookhistory.php";</script>';

}
else{
	echo"wrong";
}
}

?>