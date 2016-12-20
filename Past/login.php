<?php

$user = $_POST['user'];
$pw = $_POST['pw'];

$connect = mysqli_connect("localhost", "root","root","ToolBase");
$sql = "SELECT * from users WHERE user='$user' AND pw='$pw'";

$loginCheck = mysqli_query($connect, $sql);



if(!$connect){
		echo "opps";
	}

	else {echo "in <br>";}

$rows = mysqli_num_rows($loginCheck);
echo $user;
echo $pw;
echo $rows;

if ($rows == 1) {
 while($row = mysqli_fetch_assoc($loginCheck)) {
  echo $row["id"];
  $_SESSION['id'] = $row["id"];
 }
} 
else {
 echo "try again";
}
mysqli_close($connection); // Closing Connection


?>
