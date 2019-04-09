<?php 

  $id = $_GET['id'];

  $conn = new PDO("mysql:host=localhost;dbname=spotify", "root", "root");
  $statement = $conn->prepare("select * from tracks where album_id=$id");
  $statement->execute();
  $collection = $statement->fetchAll();

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Spotify - Song</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <div id="netflix">
  <?php include_once(""); ?>
  
  <div class="collection">
    <?php foreach($collection as $c): ?>
    <p class="collection__title"><?php echo $c['title']; ?></a>
    <?php endforeach; ?>
  </div>
  
</div>

</body>
</html>