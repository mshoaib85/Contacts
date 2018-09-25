<!DOCTYPE html>
<html>
<head>
	<title>Online Phone Book</title>
	<link rel="stylesheet" type="text/css" href="dist/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Header Area -->
	<div class="container text-center">
		<div class="row">
			<div class="header col-md-12">
				<a href="index.php"><h1>Online Phone Book</h1></a>
			</div>
		</div>
	</div>

	<!-- Input Part -->
	<div class="container text-center">
		<div class="row">
			<div class="input_area col-md-12">
				<form method="post" action="">
					<button type="submit" name="add_button">Add New</button>
				</form>
			</div>
		</div>
	</div>

<?php
if (isset($_POST['add_button'])) {
	header('Location: addnew.php');
}

?>


	<!-- Show Data -->
	<div class="container text-center">
		<div class="row">
			<div class="show_data_area col-md-12">
				<table class="table col-md-12">
					<tr class="success">
						<td>#</td>
						<td>Name</td>
						<td>Phone</td>
						<td>Action</td>
					</tr>
	
				</table>
			</div>
		</div>
	</div>
	<!-- Footer Part -->
	<div class="container text-center">
				</dir>
	</div>

	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/scrolltop.js"></script>
	<script src="dist/bootstrap/bootstrap.min.js"></script>
</body>
</html>
