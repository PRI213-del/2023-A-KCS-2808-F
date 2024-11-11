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
$sql = "SELECT * FROM tracking WHERE id = $id";
$result = $conn->query($sql);
$track = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tracking Data</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Tracking Data</h1>
        <form action="update.php" method="POST" class="mt-4">
            <input type="hidden" name="id" value="<?= $track['id'] ?>">
            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="text" class="form-control" name="user_id" value="<?= $track['user_id'] ?>" required>
            </div>
            <div class="form-group">
                <label for="carbon_emission">Carbon Emission (kg)</label>
                <input type="number" class="form-control" name="carbon_emission" value="<?= $track['carbon_emission'] ?>" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Track</button>
        </form>
        <a href="view.php" class="btn btn-secondary mt-3">Back to Tracking Data</a>
    </div>
</body>
</html>
