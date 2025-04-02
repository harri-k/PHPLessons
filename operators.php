<?php
// Arithmetic operators
$a = 5;
$b = 3;
$addition = $a + $b;
$subtraction = $a - $b;
$multiplication = $a * $b;
$division = number_format($a / $b, 2); // Rounded to 2 decimal places

// Assignment operators
$c = 10;
$c += 5; // Equivalent to $c = $c + 5

// Comparison operators
$d = 5;
$e = 3;
$equal = $d == $e;
$not_equal = $d != $e;
$greater_than = $d > $e;
$less_than = $d < $e;

// Increment operators
$f = 5;
$f++; // Equivalent to $f = $f + 1

// Logical operators
$g = true;
$h = false;
$and = $g && $h;
$or = $g || $h;
$not = !$g;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="calculator.php">My Calculator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="calendar.php">Calendar</a></li>
                <li class="nav-item"><a class="nav-link active" href="operators.php">Operators</a></li>
                <li class="nav-item"><a class="nav-link" href="conditionals.php">Conditionals</a></li>
                <li class="nav-item"><a class="nav-link" href="datatypes.php">Data Types</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <h1 class="text-center mb-4">PHP Operators</h1>

    <div class="card p-4 mb-4">
        <h2>Arithmetic Operators</h2>
        <p>Example: <code>$a = 5</code>, <code>$b = 3</code></p>
        <ul>
            <li>Addition: <code>$a + $b</code> = <strong><?php echo $addition; ?></strong></li>
            <li>Subtraction: <code>$a - $b</code> = <strong><?php echo $subtraction; ?></strong></li>
            <li>Multiplication: <code>$a * $b</code> = <strong><?php echo $multiplication; ?></strong></li>
            <li>Division: <code>$a / $b</code> = <strong><?php echo $division; ?></strong></li>
        </ul>
    </div>

    <div class="card p-4 mb-4">
        <h2>Assignment Operators</h2>
        <p>Example: <code>$c = 10</code>, then <code>$c += 5</code></p>
        <p>Result: <code>$c</code> = <strong><?php echo $c; ?></strong></p>
    </div>

    <div class="card p-4 mb-4">
        <h2>Comparison Operators</h2>
        <p>Example: <code>$d = 5</code>, <code>$e = 3</code></p>
        <ul>
            <li>Equal (<code>$d == $e</code>): <strong><?php echo var_export($equal, true); ?></strong></li>
            <li>Not Equal (<code>$d != $e</code>): <strong><?php echo var_export($not_equal, true); ?></strong></li>
            <li>Greater Than (<code>$d > $e</code>): <strong><?php echo var_export($greater_than, true); ?></strong></li>
            <li>Less Than (<code>$d < $e</code>): <strong><?php echo var_export($less_than, true); ?></strong></li>
        </ul>
    </div>

    <div class="card p-4 mb-4">
        <h2>Increment Operators</h2>
        <p>Example: <code>$f = 5</code>, then <code>$f++</code></p>
        <p>Result: <code>$f</code> = <strong><?php echo $f; ?></strong></p>
    </div>

    <div class="card p-4">
        <h2>Logical Operators</h2>
        <p>Example: <code>$g = true</code>, <code>$h = false</code></p>
        <ul>
            <li>AND (<code>$g && $h</code>): <strong><?php echo var_export($and, true); ?></strong></li>
            <li>OR (<code>$g || $h</code>): <strong><?php echo var_export($or, true); ?></strong></li>
            <li>NOT (<code>!$g</code>): <strong><?php echo var_export($not, true); ?></strong></li>
        </ul>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
