<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hellooo world</title>
</head>
<body>
    <?php
        $name = "Thang Nguyen";
        $year = 1;
        define("Pi",3.14);
        echo'<p> My name is $name. </p>';
        echo Pi;

        $helloworld = "hello " . "World. ";
        echo "<p>$helloworld </p>";

        echo "</br>";

        if( 5!= 5.0) echo "Not equal";
        if(5 !== 5.0) echo "Not identical";

        function hello($name, $year){
            echo "<p> My name is $name. I am a year $year student </p>";
        }

        hello($name, $year)

 

    ?>
</body>
</html>