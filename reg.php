<?php
	$conn = mysqli_connect("localhost","root","","galleryscape");
echo "Connected to the database of the host...."."<br>";
//IF the connection doesnot connect then error message is being showed...
if (!$conn)
	{
		die("Connection is failed: ".mysqli_connect_error());
	}
$name = $_POST['name'];
$pass = $_POST['pass'];
$email= $_POST['email'];

$sql = "INSERT INTO register(name,email,password) VALUES('$name','$email','$pass')";
echo $sql;
$result = mysqli_query($conn,$sql) or die("Error: $sql. ".mysql_error($conn));
header("Location:loginpage.html");
?>