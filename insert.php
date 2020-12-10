<?php

if (isset($_GET['btn'])) {
	$id = $_GET['id'];
	$name = $_GET['name'];
	$age = $_GET['age'];

	$server = "localhost";
	$user = "root";
	$psw = "";
	$database = "coda";

	$con = new mysqli($server,$user,$psw,$database);

	if ($con->connect_error) {
		echo "connect failed";
	}else{
		echo "connected";
	}

	$sql = "INSERT INTO student(id,name,age) VALUES($id,'$name',$age)";

	if ($con->query($sql) == TRUE) {
		echo "insert";
	}else{
		echo "failed insert";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

	<form method="GET">
		<label>ID</label>
		<input type="number" name="id"><br>

		<label>Name</label>
		<input type="text" name="name"><br>

		<label>Age</label>
		<input type="number" name="age"><br>

		<input type="submit" name="btn" value="Insert">
	</form>

</body>
</html>