<?php 

  $conn = new PDO("mysql:host=localhost;dbname=spotify", "root", "root");
  $statement = $conn->prepare("select * from artists");
  $statement->execute();
  $collection = $statement->fetchAll();

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Spotify - Artists</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <div id="netflix">
  <?php include_once(""); ?>
  
  <div class="collection">
    <?php foreach($collection as $c): ?>
    <a href="details.php?id=<?php echo $c['id']; ?>" class="collection__item">
    <?php echo $c['name']; ?>
    </a><br>
    <?php endforeach; ?>
  </div>
  
</div>

</body>
</html>