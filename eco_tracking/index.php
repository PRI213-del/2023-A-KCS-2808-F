<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Tracking System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Eco Tracking System</h1>
        <form action="process.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="text" class="form-control" name="user_id" required>
            </div>
            <div class="form-group">
                <label for="carbon_emission">Carbon Emission (kg)</label>
                <input type="number" class="form-control" name="carbon_emission" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Track Emission</button>
        </form>
        <a href="view.php" class="btn btn-secondary mt-3">View Tracking Data</a>
    </div>
</body>
</html>
