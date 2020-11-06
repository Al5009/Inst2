<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "25urok");
	$query1 = mysqli_query($connect, "DELETE FROM inst WHERE id='" . $_GET["id"] . "'");
	header('Location: index.php');
 ?>