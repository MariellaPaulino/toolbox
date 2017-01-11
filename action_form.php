<?php session_start();
	$user = $_POST['uname'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pw = $_POST['pw'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$address = $_POST['address']; 

//mysql query to connect the php to the sql database
	//server, username, password, database name 
	//ON LOCAL 
	//$connect = mysqli_connect("localhost", "root","root","ToolBase");
	//ON SERVER 
	$connect = mysqli_connect("localhost","fsf2016","W3bD3vFun!","fsf2016");
	
	if(!$connect){
		echo "opps";
	}

	$sql = "INSERT INTO usersMP (id, fname, lname, user, email, pw, phone, address) VALUES (NULL, '$fname', '$lname', '$user', '$email', '$pw', '$tel', '$address');";

	mysqli_query($connect, $sql);


header('Location: Booking.php');

//die();
?>

?>

