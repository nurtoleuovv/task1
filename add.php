<html>
<body>
<?php
include_once("config.php");
if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	if(empty($name) || empty($surname) || empty($email)) {
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($surname)) {
			echo "<font color='red'>surname field is empty.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		$result = mysqli_query($mysqli, "INSERT INTO users(name,surname,email) VALUES('$name','$surname','$email')");
		echo "<font color='red'>Data added successfully.";
		echo "<br/><button type='button' style='border: 1px solid grey; background-color: black; border-radius: 5px'><a href='index.php' style='color: yellow; text-decoration:none'>Result</a></button>";
	}
}
?>
</body>
</html>
