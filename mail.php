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
}
	}
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
if(isset($_POST['mail1'])){
	$to=$row['emailid1'];
	$subject='INVOICE';
$message ="<table id=\"my_table\" border='1'>";
	while($row = mysqli_fetch_assoc($result))
{

	
$message .= "<b> Birthday Booking </b>";
$message .= "<tr>
<td>PARTYFOR</td>
 <td>".$row['partytype'] . "</td>
 </tr>
 <tr>
<td>PARTYDATE</td>
<td>" .$row['partydate']. "</td>
</tr>
<tr>
<td>LOCATION</td>
<td> ". $row['partyloc'] ." </td>
</tr>
<tr>
<td>CAKE</td>
<td> ". $row['cake'] ." </td>
</tr>
<tr>
<td>GUESTS</td>
<td> ". $row['guests'] ." </td>
</tr>
<tr>
<td>FOODCOURSE</td>
<td> ". $row['foodcourse'] ." </td>
</tr>
<tr>
<td>FOODCHOICE</td>
<td> ". $row['foodchoice'] ." </td>
</tr>
<tr>
<td>NAME</td>
<td> ". $row['bname'] ." </td>
</tr>
<tr>
<td>USERNAME</td>
<td> ". $row['username1'] ." </td>
</tr>
<tr>
<td>EMAIL</td>
<td> ". $row['emailid1'] ." </td>
</tr>
<tr>
<td>CONTACT</td>
<td> ". $row['contact1'] . "</td>
</tr>";

$message .="</table>";
}
$success = mail($to,$subject,$message);
}

echo"<form method='post' action='' autocomplete='on'>";
echo"<div class='mail1'>";
echo"<button type='submit' name='mai11'>send mail!!!</button>";
echo"</div>";
echo"</form>";

echo"</div>";
