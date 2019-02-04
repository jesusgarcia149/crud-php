<?php

	include('connection.php');

	if (isset($_GET['deleteGetId'])) {
		$deleteGetId = $_GET['deleteGetId'];
		$deleteQuery = "DELETE FROM person WHERE id = $deleteGetId";
		mysqli_query($conn,$deleteQuery);
		header('Location: index.php');
	}

?>