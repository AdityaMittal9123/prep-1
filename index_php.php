<?php
include_once 'connect.php';

if (isset($_POST['submit'])) {

	//creatind sql query to insert the elements
	$sql = "INSERT INTO books (name,author_name,description,cover_image , pdf) VALUES('" . $_POST["name"] . "','" . $_POST["author_name"] . "','" . $_POST["description"] . "','" . $_POST["cover_image"] . "','" . $_POST["pdf"] . "')";

	// $result = $conn->query($sql);
	$result = mysqli_query($conn, $sql);
	?>

    if($result){
    	<script type="text/javascript">
    		alert("Book added Successfully");
    		window.location.href="index.php";
    		</script>
    }else{
    	<script type="text/javascript">
    	 	alert("oops! You missed something");
    	 	window.location.href="add.php";
    	</script>
    }
    <?php

	mysqli_close($conn);

}

//write query for all data
$sql = 'SELECT * FROM books';

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting data from memory
$datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>