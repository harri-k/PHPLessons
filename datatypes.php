<?php
// datatypes.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Linked to shared stylesheet -->
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="calculator.php">My Calculator</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="calendar.php">Calendar</a></li>
            <li class="nav-item"><a class="nav-link" href="operators.php">Operators</a></li>
            <li class="nav-item"><a class="nav-link" href="conditionals.php">Conditionals</a></li>
            <li class="nav-item"><a class="nav-link" href="datatypes.php">Data Types</a></li>
        </ul>
    </div>
</nav>

<!-- Main Content -->
<div class="container my-5">
    <h1 class="text-center">PHP Data Types</h1>

    <?php
    $dataTypes = [
        "String" => "Hello, this is a string!",
        "Integer" => 42,
        "Float" => 3.14159,
        "Boolean" => true,
        "Array" => [3, 7, 9]
    ];

    foreach ($dataTypes as $type => $example) {
        echo "<div class='card mt-4'>
                <div class='card-body'>
                    <h4 class='card-title'>$type</h4>
                    <p class='card-text'>Example: ";
        echo is_array($example) ? implode(", ", $example) : (is_bool($example) ? ($example ? "true" : "false") : $example);
        echo "</p></div></div>";
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
