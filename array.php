<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric Array</title>
</head>
<body>
    <?php
        // First method to create an array 
        $numbers = array(1,2,3,4,5);
        foreach($numbers as $value){
            echo "Value is $value <br/>";
        }

        // second method to create an array
        $numbers[0] = "one";
        $numbers[1] = "two";
        $numbers[2] = "three";
        $numbers[3] = "four";
        $numbers[4] = "five";
        foreach($numbers as $value){
            echo "Value is $value <br/>";
        }
    ?>
</body>
</html>