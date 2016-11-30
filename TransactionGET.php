<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ToolBase";

// Create connection
$connect = mysqli_connect("localhost", "root","root","ToolBase");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT fname, lname, FROM transactions";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

/* 
	$id = $_GET['id'];
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$user = $_GET['user'];
	$email = $_GET['email'];
	$tel = $_GET['tel'];
	$address = $_GET['address']; 
	$tel = $_GET['product']; 
	$date = $_GET['date']; 

//mysql query to connect the php to the sql database
	//server, username, password, database name 
	$connect = mysqli_connect("localhost", "root","root","ToolBase");
	
	if(!$connect){
		echo "opps";
	}

	$sql = "INSERT INTO users (id, fname, lname, user, email, pw, phone, address) VALUES (NULL, '$fname', '$lname', '$user', '$email', '$pw', '$tel', '$address');";

	mysqli_query($connect, $sql);

mysqli_close($connect);


?>

*/