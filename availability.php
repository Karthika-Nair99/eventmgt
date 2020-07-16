<head>


 <title>Glitzz Events</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel = "icon" href ="logo.png"  type = "image/x-icon"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
 <link type="text/css" rel="stylesheet" href="book2.css" >
 <style type="text/css">
 #my_table {
    top: 15px;
	width:90%;
	height:200px;
	margin-left:60px;
	margin-right:18px;
    margin-top:50px; 
	font-size:20px;
	text-align:center;
	vertical-align:center;
	overflow-x:auto;
  }
tr:hover {background-color: #f5f5f5;}
th {
  background-color: #f4c2c2;
  color: black;
}
h4{
	font-size:35px;
    margin-left:410px;
    margin-top:100px;
}
b{
	font-size:30px;
	margin-left:55px;
}
.button1 button{
	     background-color: #800080;
         border: none;
         color: white;
         text-align: center;
         text-decoration: none;
         display: inline-block;
		 margin-top:20px;
		 padding: 20px 34px;
		 border-radius:6px;
         cursor: pointer;
	font-size:27px;
	margin-left:550px;
}

.button2 button{
	     background-color: #800080;
         border: none;
         color: white;
         text-align: center;
         text-decoration: none;
         display: inline-block;
		 margin-top:20px;
		 padding: 20px 34px;
		 border-radius:6px;
         cursor: pointer;
	font-size:27px;
	margin-left:550px;
}

.button3 button{
	     background-color: #800080;
         border: none;
         color: white;
         text-align: center;
         text-decoration: none;
         display: inline-block;
		 margin-top:20px;
		 padding: 20px 34px;
		 border-radius:6px;
         cursor: pointer;
	font-size:27px;
	margin-left:550px;
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
<form method="post"action="availability.php" >
		
		<div class="head">
		
		<script type="text/javascript">
		$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() +1;
    var day = dtToday.getDate()+1;
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    $('#eventdate').attr('min', maxDate);
});</script>

<label for="eventdate">Event Date</label>
		<input type="date" name="eventdate" id="eventdate" required>
		
<button type="submit" name="book3" >check</button>
		</div>
		</form>
		
<!--		<script>
		getClassNames: function(b) {
            var c = [],
                d = this.viewDate.getUTCFullYear(),
                f = this.viewDate.getUTCMonth();
				var zzD =b.getUTCDate();
				var zzY = b.getUTCFullYear();
                var zzM = b.getUTCMonth();
				</script>
                
$host='localhost';
$username='root';
$password='';
$con = mysqli_connect('localhost','root','','project');
if(!$con){
die('Could not Connect My Sql:' .mysql_error());
}

$result = mysqli_query($con,"SELECT * FROM book_date");
$i=0;
while($row = mysqli_fetch_array($result)) {
	?>
	<script>if(zzM==<p? echo $row["mm"]-1;?> && zzD==<p? echo $row["dd"];?> && zzY==<p? echo $row["yy"];?>) {c.push("busy");}</script>
	<php
$i++;
}
?>	
<script>
				if(zzM==2 && zzD==11) c.push("free");	
                g = new Date;	
            return b.getUTCFullYear() < d || b.getUTCFullYear() === d && b.getUTCMonth() < f ? c.push("old") :	 (b.getUTCFullYear() > d || b.getUTCFullYear() === d && b.getUTCMonth() > f) && c.push("new"),	 this.focusDate && b.valueOf() === this.focusDate.valueOf() && c.push("focused"), this.o.todayHighlight 	&& b.getUTCFullYear() === g.getFullYear() && b.getUTCMonth() === g.getMonth() && b.getUTCDate()	 === g.getDate() && c.push("today"), -1 !== this.dates.contains(b) && c.push("active"), 	(b.valueOf() < this.o.startDate || b.valueOf() > this.o.endDate || -1 !== a.inArray(b.getUTCDay(), 	this.o.daysOfWeekDisabled)) && c.push("disabled"), this.o.datesDisabled.length > 0 && 	a.grep(this.o.datesDisabled, function(a) {	
                return e(b, a)	
            }).length > 0 && c.push("disabled", "disabled-date"), this.range && (b > this.range[0] && b < 	this.range[this.range.length - 1] && c.push("range"), -1 !== a.inArray(b.valueOf(), this.range) && 	c.push("selected")), c	
        }
        </script>
		
-->
<?php
$con = mysqli_connect('localhost','root','','project');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$b=0;
$c=0;
if(isset($_SESSION['username']))
{
$result2 = mysqli_query($con,"SELECT * FROM eventbook2") or die( 
		mysqli_error($con));
		
if(isset($_POST['book3']))
		{
		$result2 = mysqli_query($con,"SELECT * FROM eventbook2 where eventdate = '".$_POST['eventdate']."'") or die( 
		mysqli_error($con));
		
		
		}
}
echo "<br><br><b> Event Booking </b>";
echo "<table id=\"my_table\" border='1'>
<tr>
<th>Event Date</th>
<th>Event Venue</th>
</tr>";


while($row2 = mysqli_fetch_assoc($result2))
{
echo"<tr><td>" . $row2['eventdate'] . "</td>";
echo"<td>" . $row2['eventvenue'] . "</td></tr>";
}




?>

<!--<footer>
	
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
	</footer>-->
	
	</div>
	
</body>

 </html>	

  