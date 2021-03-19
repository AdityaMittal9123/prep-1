<?php

//including database connection file
include_once 'connect.php';

$cover_image = $name = $author_name = " ";
$errors = array('name' => '', 'author_name' => '', 'cover_image' => '');

if (isset($_POST['submit'])) {

	//checking the errors (i.e., checking whether the field is empty or not)
	if (empty($_POST['name'])) {
		$errors['name'] = "A name is required! ";
	}

	if (empty($_POST['cover_image'])) {
		$errors['cover_image'] = 'a cover image is required! <br />';

	}
	if (empty($_POST['author_name'])) {
		$errors['author_name'] = "An author name is required!";
	}

	if (array_filter($errors)) {
		echo 'something is missing';
	}

	//SQL query to insert the data
	else {
		$sql = "INSERT INTO books (name,author_name,description,cover_image , pdf) VALUES('" . $_POST["name"] . "','" . $_POST["author_name"] . "','" . $_POST["description"] . "','" . $_POST["cover_image"] . "','" . $_POST["pdf"] . "')";

		$result = mysqli_query($conn, $sql);
		?>
		if (result) {
			<script type="text/javascript">
					alert("Book Added Successfully!");
					window.location.href="index.php";
			</script>
			}
	<?php
}

}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
 <head>
 	<link rel="stylesheet" href=styles.css>
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
	<title>Add Book</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <header>
		<center><h3>E-Library</h3></center>
	 </header>

		<nav class="nav-wrapper">
			<div class="container">
				<ul id="nav-mobile" class="Left">
					<li><a href="index.php" class="btn brand ">Home</a></li>
				</ul>
		</nav>

 <body class=>
 	<section class="container black-text">
 		<h4 class="center black-text">Add Book</h4>

	 <form action="add.php" method="POST">
		<label>Name *:</label>
		<br>
		<input type="text" name="name" required>
		<div class="red-text"><?php echo $errors['name']; ?></div>
		<br><br>
		<label>Author *:</label>
		<br>
		<input type="text" name="author_name" required>
		<div class="red-text"><?php echo $errors['author_name']; ?></div>
		<br><br>
		<label >Description:</label>
		<br>
		<input type="text" name="description" id="description">
		<br><br>
		<label type="cover_image">Image *:</label>
		<br>
		<input type="url" name="cover_image" required>
		<div class="red-text"><?php echo $errors['cover_image']; ?></div>
		<br><br>
		<label>pdf:</label>
		<br>
		<input type="url" name="pdf" id="pdf">
		<br><br>
		<div class="center">
		<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>
	  </form>

    </section>
  </body>
</html>

