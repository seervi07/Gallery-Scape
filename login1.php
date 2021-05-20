<?php
session_start();
//The above line connects to the database of the myphpadmin
$conn = mysqli_connect("localhost","root","","galleryscape");
echo "Connected to the database of the host...."."<br>";
//IF the connection doesnot connect then error message is being showed...
if (!$conn)
	{
		die("Connection is failed: ".mysqli_connect_error());
	}

//Taking the Input form  the website
$loginname = $_POST['your_name'];
$loginpass = $_POST['your_pass'];

//echo $loginname."<br>";
//echo $loginpass."<br>";
if ($loginname == "Admin" && $loginpass == "Admin"){
	$_SESSION['Log'] = "Active";
	header("Location:loginpage.html");
}
else {
	$sql = "SELECT * FROM register WHERE  name= '$loginname' and password = '$loginpass'";

	//For getting the results of the querys
	$result = mysqli_query($conn,$sql);

	if(!$row = mysqli_fetch_assoc($result))//checks if the result has selected any of the rows...
		{
			?>
			<script>
			alert( "Your UserName or password is incorrect");
			 window.location.href = "login.php";
			</script>
			<?php
			$_SESSION["pass"] = "False";
		}
	else
		{	
			$_SESSION['Log'] = "Active";
			$_SESSION['CID']  = $row['name'];
			echo $_SESSION['Log'];
			header("Location:loginpage.html");
		}
}
?>
