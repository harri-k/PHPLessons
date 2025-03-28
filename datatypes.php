<?php
// datatypes.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJx3WpqLa76m33-39PyfKdw9z6xpMk2DZXZ6d5YsfpihY3JPSZQ3b0+L13w5" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">PHP Data Types</h1>
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">String</h4>
                <p class="card-text">
                    <?php
                        $stringExample = "Hello, this is a string!";
                        echo "Example: $stringExample";
                    ?>
                </p>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Integer</h4>
                <p class="card-text">
                    <?php
                        $integerExample = 42;
                        echo "Example: $integerExample";
                    ?>
                </p>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Float</h4>
                <p class="card-text">
                    <?php
                        $floatExample = 3.14159;
                        echo "Example: $floatExample";
                    ?>
                </p>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Boolean</h4>
                <p class="card-text">
                    <?php
                        $booleanExample = true;
                        echo "Example: " . ($booleanExample ? 'true' : 'false');
                    ?>
                </p>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Array</h4>
                <p class="card-text">
                    <?php
                        $arrayExample = array(3);
                        echo "Example: ";
                        print_r($arrayExample);
                    ?>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0gSS6XfpJt3GJ8cz5jVozl+MwI1FIlhfuTUCNz27RZQ4yjjy" crossorigin="anonymous"></script>
</body>
</html>
