<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        for($x = 1; $x<=100; $x++){
            if($x%3==0 && $x%5==0){
                echo "FizzBuzz";
            }
            elseif($x%3 == 0){
                echo "Fizz";
            }
            elseif($x%5 == 0){
                echo "Buzz";
            }
            else{
                echo $x;
            }
            echo "<br>";
        }
    ?>
</body>
</html>