<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 Dimensional Array</title>
</head>
<body>
    <?php
        // 2 Dimensional Array
        $students = array(
            array("John", 20, "A"),
            array("Jane", 22, "B"),
            array("Doe", 21, "C")
        );

        foreach($students as $student){
            echo "Name: $student[0], Age: $student[1], Grade: $student[2] <br/>";
        }

        // Associative 2D Array
        $students = array(
            array("name" => "John", "age" => 20, "grade" => "A"),
            array("name" => "Jane", "age" => 22, "grade" => "B"),
            array("name" => "Doe", "age" => 21, "grade" => "C")
        );

        foreach($students as $student){
            echo "Name: {$student['name']}, Age: {$student['age']}, Grade: {$student['grade']} <br/>";
        }
    ?>
</body>
</html>