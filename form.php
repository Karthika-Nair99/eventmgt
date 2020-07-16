<?php

$con=mysqli_connect('localhost','root','','project');
if(isset($_POST['book3'])){
$ename = $_POST['ename'];
$emailid3 = $_POST['emailid3'];
$contact3 = $_POST['contact3'];

$query = "INSERT INTO form(name,email,contact) values('$ename','$emailid3','$contact3')";
$result = mysqli_query($con,$query);
if ($result)
{
	echo "<script type='text/javascript'>alert('Your event has been successfully booked!!!')</script>";
}
else
{
	if (!$result) {
    die('Invalid query: ' . mysqli_error($con));
}
}}

else{
	echo " ";
}
?>
<!DOCTYPE html>

<head>

 <title>Glitzz Events</title>
</head>

<body>
<form action='form.php' method='POST'>
<label for="name">Name</label>
<input type='text' id='name' name='ename'><br><br>
<label for="email-id">Email ID</label>
 		 <input type="email" id="email-id" name="emailid3" required><br><br>
		<label for="contact">Contact Number</label>
 		 <input type="text" id="contact" name="contact3" pattern="[0-9]{10}"required><br><br>
		<button type="submit" name="book3" >Book Event Now!!!</button>
		</form>
		</body>
		</html>