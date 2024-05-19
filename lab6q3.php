<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Area</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 4;
        $width = 2;

        $area = calculateArea($length, $width);
    ?>

    <p>The area of the rectangle with length <?php echo $length; ?> and width <?php echo $width; ?> is <?php echo $area; ?>.</p>
</body>
</html>
