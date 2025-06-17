<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 6 Q3</title>
</head>
<body>
  <?php
    function calculateArea($length, $width) {
      return $length * $width;
    }

    // Example values
    $length = 10;
    $width = 5;
    $area = calculateArea($length, $width);

    echo "<p>The area of the rectangle is: <strong>$area</strong></p>";
  ?>
</body>
</html>
