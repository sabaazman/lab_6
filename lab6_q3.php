<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Area</title>
</head>
<body>
    <?php
    function calculateArea($width, $height) {
        return $width * $height;
    }

    // Call the function with example values
    $width = 4;
    $height = 2;
    $area = calculateArea($width, $height);

    // Display the result
    echo "The area of a rectangle with a width of $width and a height of $height is $area.";
    ?>
</body>
</html>
