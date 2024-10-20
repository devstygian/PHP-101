<?php
    $name = "Stygian";
    $food = "Hotdog and pasta";
    $email = "fake564gmail.com";

    //int
    $age = 21;
    $users = 2;
    $quantity = 6;

    //float
    $grade = 2.5;
    $price = 26.99;
    $taxt_rate = 5.1;

    //Boolian
    $employed = true;
    $online = true;
    $for_sale = true;
    /*
    echo "Hello {$name}<br>";
    echo "I like {$food}<br>";
    echo "This is your email {$email}<br>";
    echo "you are {$age} year old<br>";
    echo "There are {$users} users online<br>";
    echo "You would like to buy {$quantity} Items<br>";
    echo "Youre gpa is: {$grade}<br>";
    echo "Youre pizza is \${$price}<br>";
    echo "Youre sales taxt rate is: \${$taxt_rate}<br>";
    echo "Online status: {$online}<br>";
    */

    $total = null;

    echo "You ordered {$quantity} xl {$food}<br>";
    $total = $quantity * $price;
    echo "Your total is \${$total}<br>"









?>
