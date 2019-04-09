<?php
$name = "Ruben";
    $posts = [
        [
            "username" => "apachehelikopter",
            "location_specific" => "Coffee Shop LA",
            "location" => "Los Angeles, CA",
            "time" => "12s",
            "img" => "1"
        ],
        [
            "username" => "theblubking",
            "location_specific" => "Bowling Alley",
            "location" => "Hamme, Belgium",
            "time" => "32m"
        ],
        [
            "username" => $name,
            "location_specific" => "Thuis",
            "location" => "Hamme, Belgium",
            "time" => "1h"
        ],
        [
            "username" => "Equinox",
            "location_specific" => "Wijnbar",
            "location" => "Temse, Belgium",
            "time" => "5h",
            "img" => "1"
        ]
    ];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Jezelf 1</title>
</head>
<?php include "header.php" ?>
<body>
    <?php foreach($posts as $post): ?>
        <p class="post__full">
        <?php if(isset($post['img'])){
            echo "<div class='post__image'  style='float:left; padding-right: 10px;'><img src='https://fakeimg.pl/75x75/'></div>";
        } 
        ?>
            <div class="post__text">
                <strong><?php echo $post['username']; ?></strong>
                <br><span><?php echo $post['location_specific']; ?></span>
                <br><span><?php echo $post['location']; ?></span>
                <br><span><?php echo $post['time']; ?></span>
            </div>
        </p>
    <?php endforeach; ?>
</body>
<?php include "footer.php" ?>
</html>