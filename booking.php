<?php
//The above line connects to the database of the myphpadmin
$conn = mysqli_connect("localhost","root","","galleryscape");
echo "Connected to the database of the host...."."<br>";
//IF the connection doesnot connect then error message is being showed...
if (!$conn)
	{
		die("Connection is failed: ".mysqli_connect_error());
	}
$fname = $_POST['fullname'];
$email= $_POST['email'];
$booking=$_POST['booking'];
$contact=$_POST['mobile'];
$date=$_POST['date'];
$sql = "insert into booking (`Name`, `Email`, `Booking`, `contact`, `Date`) values ('$fname','$email','$booking','$contact','$date')";
$result = mysqli_query($conn,$sql);
header("Location:loginpage.html");
?>