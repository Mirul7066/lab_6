<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 6 Q3</title>
</head>
<body>

  <h2>Calculate Area of a Rectangle</h2>

  <form method="post" action="">
    <label for="length">Length:</label>
    <input type="number" name="length" id="length" required>
    <br><br>
    <label for="width">Width:</label>
    <input type="number" name="width" id="width" required>
    <br><br>
    <input type="submit" value="Calculate">
  </form>

  <?php
    function calculateArea($length, $width) {
      return $length * $width;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $length = $_POST["length"];
      $width = $_POST["width"];
      $area = calculateArea($length, $width);

      echo "<p>The area of the rectangle is: <strong>$area</strong></p>";
    }
  ?>

</body>
</html>
