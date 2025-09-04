<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$Y  = (int)$_POST['Y'];
$X = (int)$_POST['X'];
echo"<div style='width: {$X}px; height: {$Y}px; background-color: black'></div>";
?>
<a href="vierkantcalculator.php">weer berekenen?</a>
<a href="../../index.php">home</a>
</body>
</html>


