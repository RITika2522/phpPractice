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

        // Assocative array
        // Associative array with index
        $salaries = array("John" => 1000, "Jane" => 2000, "Doe" => 3000);
        echo "salary of John is = $salaries[John] <br/>";
        echo "salary of Jane is = $salaries[Jane] <br/>";
        echo "salary of Doe is = $salaries[Doe] <br/>";

        // Associative array with foreach loop
        $salaries = array("John" => 1000, "Jane" => 2000, "Doe" => 3000);
        foreach($salaries as $name => $salary){
            echo "$name earns $salary <br/>";
        }

        // Associative array with index
        $salaries ['John'] = 1000;
        $salaries ['Jane'] = 2000;
        $salaries ['Doe'] = 3000;

        echo "Salary of John is = $salaries['John'] <br/>";
        echo "Salary of Jane is = $salaries['Jane'] <br/>";
        echo "Salary of Doe is = $salaries['Doe'] <br/>";

    ?>
</body>
</html>