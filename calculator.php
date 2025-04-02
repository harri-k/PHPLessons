<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            $result = ($num2 != 0) ? $num1 / $num2 : 'Error: Division by zero';
            break;
        default:
            $result = 'Error: Invalid operator';
            break;
    }
} else {
    $num1 = $num2 = $operator = $result = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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

<div class="container mt-5">
    <h1 class="text-center">Simple Calculator</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="num1">Number 1:</label>
            <input type="number" class="form-control" id="num1" name="num1" value="<?php echo htmlspecialchars($num1); ?>">
        </div>
        <div class="form-group">
            <label for="operator">Operator:</label>
            <select class="form-control" id="operator" name="operator">
                <option value="add" <?php if ($operator == 'add') echo 'selected'; ?>>+</option>
                <option value="subtract" <?php if ($operator == 'subtract') echo 'selected'; ?>>-</option>
                <option value="multiply" <?php if ($operator == 'multiply') echo 'selected'; ?>>*</option>
                <option value="divide" <?php if ($operator == 'divide') echo 'selected'; ?>>/</option>
            </select>
        </div>
        <div class="form-group">
            <label for="num2">Number 2:</label>
            <input type="number" class="form-control" id="num2" name="num2" value="<?php echo htmlspecialchars($num2); ?>">
        </div>
        <button type="submit" class="btn btn-custom" name="submit">Calculate</button>
    </form>
    <p class="mt-3">Result: <strong><?php echo $result; ?></strong></p>
</div>

</body>
</html>
