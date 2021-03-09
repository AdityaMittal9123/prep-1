<?php
include_once 'connect.php';

if (isset($_GET['id'])) {

	$id = mysqli_real_escape_string($conn, $_GET['id']);

	//make sql
	$sql = "SELECT * FROM books WHERE id=$id";

	//get the query result
	$output = mysqli_query($conn, $sql);

	//fetch result in array format
	$data = mysqli_fetch_assoc($output);

	//query to update the data of database
	if (isset($_POST['name']) && isset($_POST['author_name']) && isset($_POST['description']) && isset($_POST['cover_image']) && isset($_POST['pdf'])) {
		$name = $_POST['name'];
		$author_name = $_POST['author_name'];
		$description = $_POST['description'];
		$cover_image = $_POST['cover_image'];
		$pdf = $_POST['pdf'];

		if (isset($_POST['Edit'])) {

			$sql = "UPDATE  books SET name='$name' , author_name='$author_name' , description='$description' , cover_image='$cover_image' , pdf='$pdf' WHERE id='$id'";

			$result = mysqli_query($conn, $sql);
			?>


			if ($result){
				<script type="text/javascript">
	            alert("data Updated  Successfully!");
	            window.location.href="Book_details.php?id=<?php echo $data['id'] ?>";
				</script>
			} else {
				<script type="text/javascript">
				alert("oops! Data not Updated");
				window.location.href="edit.php";
				</script>


			}<?php

		}

	}
	mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
	<title>E-Library</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
<header>
	<center><h3>E-Library</h3></center>
</header>
	<nav class="nav-wrapper">
		<div class="container">
			<ul id="nav-mobile" class="Left hide-on-small-and-down">
				<li><a href="index.php" class="btn brand ">Home</a></li>
			</ul>
	</nav>

<body  style="background-color:#ffe6e6;background-position:center; background-size:cover;background-attachment: fixed;">

	<section class="container grey-text">

	<h4 class="center black-text">Edit Book</h4>

	<form class="white" action="#" method="POST" style="max-width:450px;margin:20px auto; padding:20px;">

		<label for="name">Name:</label>
		<br>

		<input value="<?php echo $data['name']; ?>" type="text" name="name" id="name" required>
		<br><br>

		<label for="author_name">Author:</label>
		<br>

		<input value="<?php echo $data['author_name']; ?>" type="text" name="author_name" id="author_name" required>
		<br><br>

		<label for="description">Description:</label>
		<br>

		<input value="<?php echo $data['description']; ?>" type="text" name="description" id="description">
		<br><br>

		<label type="cover_image">Image:</label>
		<br>

		<input value="<?php echo $data['cover_image']; ?>" type="text" name="cover_image" id="cover_image" required>
		<br><br>

		<label for="pdf">pdf:</label>
		<br>

		<input value="<?php echo $data['pdf']; ?>" type="text" name="pdf" id="pdf">
		<br><br>

		<div class="center">
			<input type="submit" name="Edit" value="Edit" class="btn brand z-depth-0">
		</div>
	</form>
</section>
</body>
</html>

