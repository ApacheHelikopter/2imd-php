<?php 

  $id = $_GET['id'];

  $conn = new PDO("mysql:host=localhost;dbname=spotify", "root", "root");
  $statement = $conn->prepare("select * from albums where artist_id=$id");
  $statement->execute();
  $collection = $statement->fetchAll();

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Spotify - Albums</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <div id="spotify">
  <?php include_once(""); ?>
  
  <div class="collectionDetails">
    <?php foreach($collection as $c): ?>
    <a href="song.php?id=<?php echo $c['id']; ?>" class="collection__item__details" style="background-image: url(<?php echo $c['cover']; ?>)"></a>
    <?php endforeach; ?>
  </div>
  
</div>

</body>
</html>