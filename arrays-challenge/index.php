<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arrays - Challenge</title>
</head>
<body>
    <?php
    
    
    
    $fruitsveg = array('apple', 'avocado', 'nectarine','pumpkin', 'carrot');
    $results = array_slice($fruitsveg,0,1);
    print_r($results);
    echo end($fruitsveg);

    ?>
</body>
</html>