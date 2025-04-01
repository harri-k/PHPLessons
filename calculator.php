<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the values from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Perform the calculation
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
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Error: Division by zero';
            }
            break;
        default:
            $result = 'Error: Invalid operator';
            break;
    }
} else {
    $num1 = '';
    $num2 = '';
    $operator = '';
    $result = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Simple Calculator</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="num1">Number 1:</label>
                <input type="number" class="form-control" id="num1" name="num1" value="<?php echo $num1; ?>">
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
                <input type="number" class="form-control" id="num2" name="num2" value="<?php echo $num2; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Calculate</button>
        </form>
        <p>Result: <?php echo $result; ?></p>
    </div>
</body>
</html>
