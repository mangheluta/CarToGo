<?php
	
	$name = $_POST['name'];
	$telephone = $_POST['telephone'];
	$carType = $_POST['carType'];
	$from = $_POST['startDay'];
	$to = $_POST['endDay'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h2>Order data</h2>
	<p>Name: <?php echo $name; ?></p>
	<p>Telephone: <?php echo $telephone; ?></p>
	<p>Car <?php echo $carType; ?></p>
	<p>From: <?php echo $from; ?></p>
	<p>To: <?php echo $to; ?></p>

</body>
</html>