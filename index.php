<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $week = "Monday";
    switch($week) {
        case 'Monday':
            echo "Weekdays";
            break;
        case 'Tuesday':
            echo "Weekdays";
            break;
        case 'Wednesday':
            echo "Weekdays";
            break;
        case 'Thrusday':
            echo "Weekdays";
            break;
        case 'Friday':
            echo "Weekdays";
            break;
        case 'Saturday':
            echo "Weekends";
            break;
        case 'Sunday':
            echo "Weekends";
            break;
        default;
        echo "NOT VALID DATE";
        break;
    }
    
    ?>

</body>
</html>