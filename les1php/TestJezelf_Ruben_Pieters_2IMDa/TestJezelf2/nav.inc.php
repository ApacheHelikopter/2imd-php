<?php 

$current_page=$_SERVER['SCRIPT_NAME'];
?>
<nav>
    <?php 
        if($current_page == "/les1php/TestJezelf2/home.php"){
            echo '<ul><li style="background-color:#fb3000;"><a href="home.php" id="home" style="color: #1a0f24;">Home</a></li><li><a href="contact.php" id="contact">Contact</a></li></ul>';
        } elseif($current_page == "/les1php/TestJezelf2/contact.php"){
            echo '<ul><li><a href="home.php" id="home">Home</a></li><li style="background-color:#fb3000;"><a href="contact.php" id="contact" style="color: #1a0f24;">Contact</a></li></ul>';
        }
    ?>
</nav>



