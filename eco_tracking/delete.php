<?php
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password
$dbname = "eco_tracking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM tracking WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully. <a href='view.php'>Go back</a>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
