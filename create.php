<?php 

	include('connection.php');

	if (isset($_POST['createName'])) {
		$createName = $_POST['createName'];
		$createQuery = "INSERT INTO person(name) VALUES ('$createName')";
		mysqli_query($conn,$createQuery);
		header('Location: index.php');
	}

?>

<form action="create.php" method="POST">
	<label for="createName">name</label>
	<input type="text" id="createName" name="createName">
	<input type="submit" value="create">
</form>