<?php

	include('connection.php');

	if (isset($_GET['updateGetId']) and isset($_GET['updateGetName'])) {	
		$updateGetId = $_GET['updateGetId'];
		$updateGetName = $_GET['updateGetName'];
	}

	if (isset($_POST['updateName'])) {
		$updateId = $_POST['updateId'];
		$updateName = $_POST['updateName'];
		$updateQuery = "UPDATE person SET name = '$updateName' WHERE id = $updateId";
		mysqli_query($conn,$updateQuery);
		header('Location: index.php');
	}

?>
<link rel="stylesheet" href="style.css">
<form action="update.php" method="POST">
	<label for="updateId">Id</label>
	<input type="number" id="updateId" name="updateId" value="<?php echo $updateGetId; ?>">
	<label for="updateName">name</label>
	<input type="text" id="updateName" name="updateName" value="<?php echo $updateGetName; ?>">
	<input type="submit" value="update">
</form>
