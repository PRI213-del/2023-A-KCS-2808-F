<?php
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password
$dbname = "eco_tracking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_POST['user_id'];
$activity = $_POST['activity'];
$carbon_emission = $_POST['carbon_emission'];

$sql = "INSERT INTO tracking (user_id, activity, carbon_emission) VALUES ('$user_id', '$activity', '$carbon_emission')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. <a href='index.php'>Go back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
