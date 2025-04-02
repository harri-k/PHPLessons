<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Custom Stylesheet -->
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

<!-- Calendar Section -->
<div class="container">
    <h1 class="text-center my-4">PHP Calendar</h1>
    <div class="calendar border p-3">
        <?php
            $month = date('n');
            $year = date('Y');
            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
            $firstDayOfMonth = date('N', strtotime("$year-$month-01"));
            $currentDay = date('j');

            echo "<h3 class='text-center'>" . date('F Y') . "</h3>";
            echo "<table class='table table-bordered text-center'>";
            echo "<tr class='bg-primary text-white'><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>";
            echo "<tr>";

            for ($i = 1; $i < $firstDayOfMonth; $i++) {
                echo "<td></td>";
            }

            for ($day = 1; $day <= $daysInMonth; $day++, $i++) {
                $class = ($day == $currentDay) ? "current-day" : "";
                echo "<td class='day $class'>$day</td>";
                if ($i % 7 == 0) {
                    echo "</tr><tr>";
                }
            }

            while ($i % 7 != 1) {
                echo "<td></td>";
                $i++;
            }

            echo "</tr></table>";
        ?>
    </div>
</div>

</body>
</html>
