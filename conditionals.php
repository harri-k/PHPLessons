<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditionals</title>
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
<div class="container mt-5">
    <h2 class="text-center">PHP Conditionals</h2>
    <div class="content-box p-4">
        <p>
            <?php
            // Define a variable
            $number = 10;

            // Conditional statements
            if ($number < 0) {
                echo "The number is negative.";
            } elseif ($number == 0) {
                echo "The number is zero.";
            } elseif ($number > 0 && $number <= 10) {
                echo "The number is between 1 and 10.";
            } elseif ($number > 10 && $number <= 20) {
                echo "The number is between 11 and 20.";
            } else {
                echo "The number is greater than 20.";
            }
            ?>
        </p>

        <h2 class="mt-4">PHP Switch Statement</h2>
        <p>
            <?php
            // Define a variable for switch statement
            $day = "Monday";

            // Switch statement
            switch ($day) {
                case "Monday":
                    echo "It's the start of the week!";
                    break;
                case "Friday":
                    echo "It's almost the weekend!";
                    break;
                case "Saturday":
                case "Sunday":
                    echo "It's the weekend!";
                    break;
                default:
                    echo "It's a regular weekday.";
            }
            ?>
        </p>
    </div>
</div>

</body>
</html>
