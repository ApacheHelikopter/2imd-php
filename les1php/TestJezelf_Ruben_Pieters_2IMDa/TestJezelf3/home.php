<?php
    $todos = [
        [
            "beschrijving" => "Kamer kuisen",
            "tijdsduur" => "30m",
            "categorie" => "Thuis"
        ],
        [
            "beschrijving" => "Oefeningen PHP",
            "tijdsduur" => "5h",
            "categorie" => "Thuis"
        ],
        [
            "beschrijving" => "Test WebTech3",
            "tijdsduur" => "2h",
            "categorie" => "School"
        ],
        [
            "beschrijving" => "Huisdieren eten geven",
            "tijdsduur" => "5m",
            "categorie" => "Thuis"
        ],
        [
            "beschrijving" => "Weekendwerk",
            "tijdsduur" => "10h",
            "categorie" => "Werk"
        ]
    ];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Jezelf 3</title>
    <link rel="stylesheet" type="text/css" href="screen.css">
</head>
<body>

    <div class="todo-list">
    
        <?php foreach($todos as $todo): ?>
            <div class="todo__item">
                <span><?php echo $todo['beschrijving']; ?></span>
                <span><?php echo $todo['tijdsduur']; ?></span>
                <span><?php echo $todo['categorie']; ?></span>
            </div>
        <?php endforeach; ?>
    
    </div>
    
</body>
</html>