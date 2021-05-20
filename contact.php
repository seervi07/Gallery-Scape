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
$message=$_POST['message'];
$sql = "insert into contact values ('$fname','$email','$message')";
$result = mysqli_query($conn,$sql);
header("Location:index1.html");
?>