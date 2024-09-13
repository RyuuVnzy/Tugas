<?php
require_once("content.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="images/<?= $gambar; ?>" width="300" alt="">
    <img src="images/<?= $gambars[1]; ?>" width="300" alt="">
    <img src="images/<?= $gambars[2]; ?>" width="300" alt="">
    <?php
        foreach ($gambars as $key) {
            echo "<h1>Gambar<h1>";
            echo "<img src='images/$key' width='300' alt=''>";
            # code...
        }
    ?>
</body>
</html>