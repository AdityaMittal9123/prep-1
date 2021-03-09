<!DOCTYPE html>
<html>
 <head>
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.modal').modal();
    });
	</script>
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

 <body  style="background-color:#ffe6e6;background-position:center; background-size:cover; background-attachment:fixed;">

	<section class="container black-text">

	<h4 class="center black-text">Add Book</h4>

	<form class="white" action="index.php" method="POST" style="max-width:450px;margin:20px auto; padding:20px;">

		<label for="name">Name:</label>
		<br>

		<input type="text" name="name" id="name" required>
		<br><br>

		<label for="author_name">Author:</label>
		<br>

		<input type="text" name="author_name" id="author_name" required>
		<br><br>

		<label for="description">Description:</label>
		<br>

		<input type="text" name="description" id="description">
		<br><br>

		<label type="cover_image">Image:</label>
		<br>

		<input type="url" pattern="^(?:(?:https?|HTTPS?|ftp|FTP):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)*)(?::\d{2,})?(?:[\/?#]\S*)?$" name="cover_image" id="cover_image" required>
		<br><br>

		<label for="pdf">pdf:</label>
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

