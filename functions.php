<?php
// functions.php

// Define an array with multiple names
$names = array("Zariah", "Malik", "Harrison", "Avery", "Joaquin");

// Function to only display your name from the array
function printMyName($nameArray) {
    echo "<h2>Welcome:</h2>";
    echo "<ul>";
    foreach ($nameArray as $name) {
        if ($name === "Harrison") {
            echo "<li>$name</li>";
        }
    }
    echo "</ul>";
}

// Call the function
printMyName($names);
?>

<?php
// New PHP block for a separate calculation

// Function to calculate total hours in a week
function hoursInAWeek() {
    $days = 7;
    $hoursPerDay = 24;
    return $days * $hoursPerDay;
}

// Use the result in a sentence
$totalHours = hoursInAWeek();
echo "<p>There are $totalHours hours in a week. Make the most of them, Harrison!</p>";
?>
