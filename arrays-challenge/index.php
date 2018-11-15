<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arrays - Challenge</title>
</head>
<body>

    <h2>Task 1</h2>
    <?php
    $fruitsveg = array(1=>"apple",2=> "avocado",3=> "nectarine",4=>"pumpkin",5=> "carrot");
//reset is used to set the internal pointer to the beginning and display the first value in an array

    echo reset($fruitsveg);
    echo "<br>";
//echo end displays the last value in an array 
    echo end($fruitsveg);

//////////////////////////////////////////////
    echo "<br>";
    echo "<br>";
/////////////////////////////////////////////

// Array shift removes the first value of an array
    $fruit = array_shift($fruitsveg);
    print_r($fruitsveg);

    echo "<br>";
    echo "<br>";

//Array push adds an item to the end of an array
    array_push($fruitsveg, 'plum');
    print_r($fruitsveg);

    echo "<br>";
    echo "<br>";

//reset is used to set the internal pointer to the beginning and display the first value in an array
    echo reset($fruitsveg);

    echo "<br>";

//echo end displays the last value in an array 
    echo end($fruitsveg);

    echo "<br>";
    echo "<br>";
//Array splicing so as to remove the third value and replace that with another array of three items

    $replaceFruits = array('potatos', 'butternut', 'brinjal');

    array_splice($fruitsveg, 3,0,$replaceFruits);

    echo "<br>";

    var_dump($fruitsveg);

    echo "<br>";
//asort is used to alphabetically sort an associative array like the $fruitsveg array I made

    echo asort($fruitsveg);

    var_dump($fruitsveg);


    echo "<br>";
//implode function is used to separate an array into a string separated by a character of your choice, in this case it was a comma.
    $separatedByCommas = implode(', ',$fruitsveg);

    echo $separatedByCommas;
    ?>
</body>
</html>