<?php
    $comments = [
        [
            "username" => "apachehelikopter",
            "comment" => "Awesome picture!"
        ],
        [
            "username" => "theblubking",
            "comment" => "just follow me 4HEad"
        ]
    ];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagram</title>
</head>
<body>
    <div class="post">
        <div class="post__image">
            <img src="https://fakeimg.pl/250x250/">
        </div>
        <div class="post__comments">
            <?php foreach($comments as $comment): ?>
            <p class="post__comment">
                <strong><?php echo $comment['username']; ?></strong>
                <span><?php echo $comment['comment']; ?></span>
            </p>
            <?php endforeach; ?>

            <p class="post__comment">
                <strong>apachehelikopter</strong>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
            </p>
        </div>
    </div>
</body>
</html>