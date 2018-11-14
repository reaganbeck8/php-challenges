<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Variables Challenge</title>
    
</head>
<body>
    <?php

        $name = ' Bob ';

        $age = 35;

        $job = 'plumber';

        $carMake = ' Toyota';

        $carColour = 'RED';

        $happy = true;
        
        $time = '9';

        $break = ' '; 

        // name - WHITESPACE TRIM

        echo trim($name) . " ";

        $break;

        // car colour to lowercase
       
        echo strtolower($carColour) . " ";  

        $break;

        //Time is considered as 9 hours because there are eight letters, but a [SPACE] is also considered as a character.


        // Car make and colour
        
        $car = $carColour . $carMake;
        echo $car;

        $break;

        $yearsTillretirement = 65 - $age;

        $break;
        
        $story = "$name is a $job. He drives a $car and works $time hours a day. He is $age years old and is $yearsTillretirement years from retirement. He is happy with his life.";

        echo $story;
    ?>
</body>
</html>