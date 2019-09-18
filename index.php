<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<html>
<body>
	<table width='80%' border=0>
	<tr bgcolor='black' style="color:red; font-size: 40px">
		<td>Name</td>
		<td>Surname</td>
		<td>Email</td>
		<td>Update</td>
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['surname']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a style='color:yellow; text-decoration: none; font-size: 20px; border:1px solid grey; background-color: black; border-radius: 5px;' href=\"edit.php?id=$res[id]\" >Edit</a> | <a style='color:yellow; text-decoration: none; font-size: 20px; border:1px solid grey; background-color: black; border-radius: 5px;' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
	<button type="button" style="border: 1px solid grey; background-color: black; border-radius: 5px"><a href="add.html" style="color:yellow; text-decoration: none; font-size: 20px">Add New Data</a></button><br/><br/>
</body>
</html>
