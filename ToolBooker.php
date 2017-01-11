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


//mysql query to connect the php to the sql database
	//server, username, password, database name 
	$connect = mysqli_connect("localhost","fsf2016","W3bD3vFun!","fsf2016");
			
	if(!$connect){
		echo "opps";
	}

	else {echo "item is passing over to database <br>";}

	

   	//now we have to create a confirm button and move this data down to the transactions database 
	$sql2 = "INSERT INTO transactionsMP (tid, uid, fname, lname, email, phone, address, product, date) VALUES (null, '$uid', '$fname', '$lname', '$email', '$phone', '$address', '$product', '$date' );";

	mysqli_query($connect, $sql2);

   

    echo "<br>";

//loop through products 
   

 		

//change json
$inp = file_get_contents('product_reference.json');
$tempArray = json_decode($inp, true);

$objectCount = count($tempArray) + 1;
$key = "Product".$objectCount;
for ($j=0; $j<$objectCount; ++j){
	if (($tempArray[$j]["product_name"] == $product) && ($tempArray[$j]["product_date"] == $date)) {
		echo "hello"
		--$tempArray["quantity"];
	}else{

		echo "bye"
		$id = end($tempArray)["id"];
$id = str_pad(++$id, 4, "0", STR_PAD_LEFT);

$addThis = array(
				"id" => $id,
				"product_name" => $product,
				"product_date" => $date,
				"quantity" => "20"
				
				);


$tempArray[$key] = $addThis;

$jsonData = json_encode($tempArray);
file_put_contents('product_reference.json', $jsonData);
	}

}





// Closing Connection
//mysqli_close($connect); 
header('Location: Booking.php');

//die();
?>

