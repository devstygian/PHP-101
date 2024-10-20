<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="get&post_Variables.php" method="POST">
        
        <label>username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br>
        
        <input type="submit" value="Login">

    </form>
</body>

</html>
<?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";

?>