<?php session_start();
	$id =  $_SESSION['id']; 
	$uname = $_SESSION['uname'];;
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	$user = $_SESSION['user'];
	$email = $_SESSION['email'];
	$phone = $_SESSION['phone'];
	$address = $_SESSION['address'];
	$product = $_POST['product'];
	$date = $_POST['date'];
	$date2 = $_POST['date2'];


//mysql query to connect the php to the sql database
	//server, username, password, database name 
	$connect = mysqli_connect("localhost", "root","root","ToolBase");
			
	if(!$connect){
		echo "opps";
	}

	else {echo "item is passing over to database <br>";}

	

   	//now we have to create a confirm button and move this data down to the transactions database 
	$sql2 = "INSERT INTO transactions (tid, uid, fname, lname, email, phone, address, product, date, date2) VALUES (null, '$uid', '$fname', '$lname', '$email', '$phone', '$address', '$product', '$date', '$date2');";

	mysqli_query($connect, $sql2);

   

    echo "<br>";





	


?>
