<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .calendar {
            max-width: 400px;
            margin: 20px auto;
        }
        .day {
            width: 14.28%;
            text-align: center;
            padding: 10px;
        }
        .current-day {
            background-color: #0d6efd;
            color: white;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">PHP Calendar</h1>
        <div class="calendar border p-3">
            <?php
                $month = date('m');
                $year = date('Y');
                $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                $firstDayOfMonth = date('w', strtotime("$year-$month-01"));
                $currentDay = date('j');
                
                echo "<h3 class='text-center'>" . date('F Y') . "</h3>";
                echo "<table class='table table-bordered text-center'>";
                echo "<tr class='bg-primary text-white'><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";
                echo "<tr>";

                for ($i = 0; $i < $firstDayOfMonth; $i++) {
                    echo "<td></td>";
                }

                for ($day = 1; $day <= $daysInMonth; $day++) {
                    if (($i % 7) == 0) {
                        echo "</tr><tr>";
                    }
                    $class = ($day == $currentDay) ? "current-day" : "";
                    echo "<td class='day $class'>$day</td>";
                    $i++;
                }
                
                while ($i % 7 != 0) {
                    echo "<td></td>";
                    $i++;
                }

                echo "</tr></table>";
            ?>
        </div>
    </div>
</body>
</html>