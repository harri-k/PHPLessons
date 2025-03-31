<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditionals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP Conditionals</h2>
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

        <h2>PHP Switch Statement</h2>
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
</body>
</html>
