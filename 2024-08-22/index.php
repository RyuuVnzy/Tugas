<?php require_once("content.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web sekolah</title>
</head>
<body>
<?php foreach ($pages as $key => $value) ?>
<?php
 ?>

<ul>
    <li>  <a href="index.php">home</a></li>
    <li>  <a href="pages/jurusan.php">jurusan</a></li>
    <li>  <a href="pages/sejarah.php">jurusan</a></li>
    <li>  <a href="pages/contact.php">jurusan</a></li>
</ul>

    <?php foreach ($gambars as $key) { ?>
    <img src="images/<?= $key?>" alt="">
        <?php }   ?>

</body>
</html>