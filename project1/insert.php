<html>
<body>
<?php

// Create connection
$conn = new mysqli('localhost','root','');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}

echo "DB Connected successfully";

// this will select the Database project1_db
mysqli_select_db($conn, "project1_db");

echo "\n DB is selected as Test successfully";

// create INSERT query

$sql="INSERT INTO project1_table (fname,age) VALUES ('$_POST[fname]','$_POST[age]')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";	
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}



mysqli_close($conn);
?>
</body>
</html>