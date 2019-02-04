<?php 
	include('connection.php'); 
?>

<table>
	<tr>
		<td>id</td>
		<td>name</td>
		<td>update</td>
		<td>delete</td>
	</tr>
	<?php 
		$readQuery = "SELECT * FROM person";
		$readRess = mysqli_query($conn,$readQuery);
		while ($readRow = mysqli_fetch_array($readRess)) {
			echo "<tr>
					<td>".$readRow[0]."</td>
					<td>".$readRow[1]."</td>
					<td><a href='update.php?updateGetId=$readRow[0]&updateGetName=$readRow[1]'><></a></td>
					<td><a href='delete.php?deleteGetId=$readRow[0]'>X</a></td>
				  </tr>"
			;
		}
	?>
</table>