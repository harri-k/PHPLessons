<?php
// Arithmetic operators
$a = 5;
$b = 3;
$addition = $a + $b;
$subtraction = $a - $b;
$multiplication = $a * $b;
$division = $a / $b;

// Assignment operators
$c = 10;
$c += 5; // equivalent to $c = $c + 5

// Comparison operators
$d = 5;
$e = 3;
$equal = $d == $e;
$not_equal = $d != $e;
$greater_than = $d > $e;
$less_than = $d < $e;

// Increment operators
$f = 5;
$f++; // equivalent to $f = $f + 1

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>PHP Operators</h1>
        <h2>Arithmetic Operators</h2>
        <p>Example: $a = 5, $b = 3</p>
        <ul>
            <li>Addition: $a + $b = <?php echo $addition; ?></li>
            <li>Subtraction: $a - $b = <?php echo $subtraction; ?></li>
            <li>Multiplication: $a * $b = <?php echo $multiplication; ?></li>
            <li>Division: $a / $b = <?php echo $division; ?></li>
        </ul>

        <h2>Assignment Operators</h2>
        <p>Example: $c = 10, $c += 5</p>
        <p>$c = <?php echo $c; ?></p>

        <h2>Comparison Operators</h2>
        <p>Example: $d = 5, $e = 3</p>
        <ul>
            <li>Equal: $d == $e = <?php echo var_export($equal, true); ?></li>
            <li>Not Equal: $d != $e = <?php echo var_export($not_equal, true); ?></li>
            <li>Greater Than: $d > $e = <?php echo var_export($greater_than, true); ?></li>
            <li>Less Than: $d < $e = <?php echo var_export($less_than, true); ?></li>
        </ul>

        <h2>Increment Operators</h2>
        <p>Example: $f = 5, $f++</p>
        <p>$f = <?php echo $f; ?></p>

        <h2>Logical Operators</h2>
        <p>Example: $g = true, $h = false</p>
        <ul>
            <li>And: $g && $h = <?php echo var_export($and, true); ?></li>
            <li>Or: $g || $h = <?php echo var_export($or, true); ?></li>
            <li>Not: !$g = <?php echo var_export($not, true); ?></li>
        </ul>
    </div>
</body>
</html>
