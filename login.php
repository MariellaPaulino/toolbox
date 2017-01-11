<?php session_start();

$user = $_POST['user'];
$pw = $_POST['pw'];

$connect = mysqli_connect("localhost","fsf2016","W3bD3vFun!","fsf2016");

$query = "select * from usersMP WHERE pw='$pw' AND user='$user'";

$loginCheck = mysqli_query($connect, $query);

$rows = mysqli_num_rows($loginCheck);

//echo $rows;

//echo "<br>";

if ($rows == 1) {
 while($row = mysqli_fetch_assoc($loginCheck)) {
  //echo $row["id"].'<br>';
  $_SESSION['id'] = $row["id"];
  //echo $row["fname"].'<br>';
  $_SESSION['fname'] = $row["fname"];
  //echo $row["lname"].'<br>';
  $_SESSION['lname'] = $row["lname"];
  //echo $row["user"].'<br>';
  $_SESSION['user'] = $row["user"];
    //echo $row["email"].'<br>';
  $_SESSION['email'] = $row["email"];
    //echo $row["pw"].'<br>';
  $_SESSION['pw'] = $row["pw"];
    //echo $row["phone"].'<br>';
  $_SESSION['phone'] = $row["phone"];
    //echo $row["address"].'<br>';
  $_SESSION['address'] = $row["address"];

  
 }
} 
else {
   echo "your password or username is incorrect, try again.";
}
mysqli_close($connect); // Closing Connection
header('Location: Booking.php');

//die();
?>