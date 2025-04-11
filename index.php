<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Linked to global stylesheet -->
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="calculator.php">My Calculator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="calendar.php">Calendar</a></li>
                <li class="nav-item"><a class="nav-link" href="operators.php">Operators</a></li>
                <li class="nav-item"><a class="nav-link" href="conditionals.php">Conditionals</a></li>
                <li class="nav-item"><a class="nav-link" href="datatypes.php">Data Types</a></li>
                <li class="nav-item"><a class="nav-link" href="functions.php">Array</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to My Website</h1>
        <p class="lead">This is a simple Bootstrap website created with PHP.</p>
        <hr class="my-4">
        <p>Click the button below to explore more.</p>
        <a class="btn btn-primary btn-lg" href="about.php" role="button">Learn More</a>
    </div>
</div>

<!-- Data Types Link -->
<div class="container text-center mt-4">
    <h2><a href="datatypes.php" class="btn btn-info">Explore Data Types</a></h2>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
