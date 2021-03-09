<?php

include_once 'connect.php';

//geting id
$id = $_GET['id'];

//Query to delete the book
$sql = "DELETE FROM books WHERE id='$id'";
$result = mysqli_query($conn, $sql);
?>
if ($result) {
	<script type="text/javascript">
	alert("Data deleted successfully!");
	 window.location.href="index.php";
	</script>

} else {
	<script type="text/javascript">
	alert("oops! Data not deleted!");
	window.location.href="Book_details.php";
    </script>
}
<?php

//closing connection
mysqli_close($conn);
?>

