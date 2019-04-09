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
        $name = "Ruben";
        echo "<h1>Hi, my name is $name</h1>";
        echo '<h1>Hi, my name is ' . $name . '</h1>';

        $name2 = "";
        unset($name2); //verwijdert variabele

        if (isset($name2)){ //isset -> kijkt of iets bestaat of niet
            echo "yeet";
        }

        if (!empty($name2)){ //kijkt of het leeg is of niet
            echo "yeeet";
        }

        $answer = 1;
        if($answer == 1){ //checkt alleen waarde en geen type
            echo "ok";
        }
        if($answer === "1"){ // === checkt waarde en type
            echo "ok";
        }
    ?>
</body>
</html>