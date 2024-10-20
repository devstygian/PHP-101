<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <form action="math.php" method="post">
        <label>X: </label>
        <input type="text" name="x"><br>
        <input type="submit" value="total">
    </form>
</body>

</html>
<?php
    $x = $_POST["x"];
    $total = null;

    //$total = abs($x);
    //$total = round($x);
    $total = round($x);

    echo $total;
?>