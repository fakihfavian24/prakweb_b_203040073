<?php
require 'functions.php';

$id = $_GET['id'];

$buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Detail</title>
</head>

<body>

  <div class="container">
    <div class="box">
      <ul>
        <img src="../img/<?= $buku["gambar"]; ?> " width="100" alt="">
        <li><?= $buku["judul"]; ?></li>
        <li><?= $buku["penulis"]; ?></li>
      </ul>
    </div>
  </div>

</body>

</html>