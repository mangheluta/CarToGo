<?php
	include 'header.php';
?>


<div class="container-fluid">
	<br><br>
	<h1> <span class="choose">Choose your option</span> </h1>
	<br><br>

	<div class="row">

		<div class="col-md-3">
			<div class="title">
			<img src="images/logan.jpg" alt="">
			<h2>Economy</h2>
			<p>15$/day</p>
			<a class="btn btn-info" data-toggle="modal" data-target="#economy">Select</a>
			</div>
		</div>

		<div class="col-md-3">
			<div class="title">
			<img src="images/golf.jpg" alt="">
			<h2>Medium</h2>
			<p>25$/day</p>
			<a class="btn btn-info" data-toggle="modal" data-target="#medium">Select</a>
			</div>
		</div>

		<div class="col-md-3">
			<div class="title">
			<img src="images/audi.jpg" alt="">
			<h2>Luxury</h2>
			<p>50$/day</p>
			<a class="btn btn-info" data-toggle="modal" data-target="#luxury">Select</a>
			</div>
		</div>
		<div class="col-md-3">
			<div class="title">
			<img src="images/van.jpg" alt="">
			<h2>Vans</h2>
			<p>60$/day</p>
			<a class="btn btn-info" data-toggle="modal" data-target="#van">Select</a>
			</div>
		</div>
		
	</div>

	<br><br><br>

	<div class="row presentation">
		
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<div class="title2">
				<h2>SEARCH</h2>
				<h4>Car Rentals</h4>
				<i class="fas fa-search fa-6x"></i>
			</div>
		</div>
		<div class="col-md-2">
			<div class="title2">
				<h2>RESERVE</h2>
				<h4>The right car</h4>
				<i class="fas fa-calendar-check fa-6x"></i>
			</div>
		</div>
		<div class="col-md-2">
			<div class="title2">
				<H2>PICK</H2>
				<h4>Your car</h4>
				<i class="fas fa-car fa-6x space"></i>
			</div>
		</div>
		<div class="col-md-2">
			<div class="title2">
				<H2>ENJOY</H2>
				<h4>The ride</h4>
				<i class="far fa-laugh-beam fa-6x space"></i>
			</div>
		</div>
		<div class="col-md-2"></div>

	</div>

	<br><br><br>

</div>

<?php
	include 'modaleconomy.php';
	include 'modalmedium.php';
	include 'modalluxury.php';
	include 'modalvan.php';
?>

<?php
	include 'footer.php';
?>