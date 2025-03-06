<?php 
    /* 
        °F = °C * 9/5 + 32
        °C = (°F - 32) / (9/5)

        here,
        fractor = 9/5 = 1.8
        offset = 32
    */

    define("fractor",  "1.8");
    define("offset","32");

    echo "Temperature value : ";
    $tem = (float)readline();

    echo "Convert into (1. Fahrenhite, 2. Celsius)";
    $choice = (int)readline();

    switch($choice){
        case 1: 
            $result = $tem * fractor + offset;
            echo "The Fahrenhite is : $result";
            break;
        case 2:
            $result = ($tem - offset) / fractor;
            echo "The Celsius is : $result";
            break;  
        default: 
            echo "Invalid value.";
    }

?>