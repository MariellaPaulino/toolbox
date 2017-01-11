<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hearing Tool Borrower</title>
	<link rel="stylesheet" href="css/stylesheet.css">
	<script src="jquery.min.js"></script>
	<script src="productCheck.js"></script>
</head>

<body>

	<div class = "container">
	<div id="one">
		<h1> Book a Tool</h1>

		<h3>hey <?php echo $_SESSION['fname']; ?>,</h3>
<hr>
		<br> 
		<div class="container">
		<form method="POST" action="toolBooker.php">
			<h2> ITEM to book </h2>
			<br>
				<select name = "product" id = "product" required>
					<option value="Compilot">Compilot</option>
					<option value="Roger Pen">Roger Pen</option>
				</select>
			<br>
			
			<h2> GET the Product: </h2>
			<br>
				<input type="date" name="date" id="date" required>
			<br>
			<!--<h2> RETURN the Product: </h2>
			<br> 	

				<input type="date" name="date2" required>
			<br>
			-->
				 <input type='submit'/>


		</form>
	    </div>
	</div>
    </div>








<!--

<hr>

	<div class="container">
		<h1> There are ________ available </h1>
		<p> NOTE: PHP IF statement goes here that is linked to database and counts how many compilots are available ...if more than 1 then show click button.  If less than 1 say sorry this item is not currently available </p>

		<button type="button">Book Item!</button>
-->




</body>



</html>

