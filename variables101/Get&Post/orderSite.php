<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <form action="orderSite.php" method="post">
        <label>Quantity: </label><br>
        <input type="text" name="Quantity"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $food = "Pizza";
    $price = 5.99;
    $Quantity = $_POST["Quantity"];
    $total = null;

    $total = $Quantity * $price;

    echo "You have ordered {$Quantity} x {$food}/s<br>";
    echo "Your total is: \${$total}";


?>