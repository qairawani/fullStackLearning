<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculating Circle</h1>
    <br>
    <br>
    <form action="index.php" method="post">
        <label>Please enter the radius (in cm):</label><br>
        <input type="text" name="radius">
        <input type="submit" value="Calculate">
    </form>
    <br>
</body>
</html>
    
<?php
    $radius = $_POST["radius"];
    $circumference = 2 * pi() * $radius;
    $area = pi() * pow($radius, 2);
    $volume = (4/3) * pi() * pow($radius, 3);

    $circumference = round($circumference,2);
    $area = round($area,2);
    $volume = round($volume,2);

    echo"The circumference is {$circumference} cm<br>";
    echo"The area is {$area} cm<sup>2</sup> <br>";
    echo"The volume is {$volume} cm<sup>3</sup>";
?>
