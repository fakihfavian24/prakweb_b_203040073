<?php
require 'php/functions.php';

$buku  = query("SELECT * FROM buku");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- link font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="style4.css">

  <title>Halaman Admin</title>
</head>

<body>

  <!-- awal header -->

  <header>

    <a href="#" class="logo"><i class="fas fa-book"></i> BookStore.</a>

  </header>

  <!-- akhir header -->

  <h1>Daftar Buku Novel</h1>

  <button class="tbl_tambah"><a href="php/tambah.php" class="tambah">Tambah Data</a></button>
  <br><br>

  <table class="tabel" border="1" cellpadding="10" cellspacing="0">

    <tr class="teks">
      <th>No.</th>
      <th>Gambar</th>
      <th>Judul</th>
      <th>Penulis</th>
      <th>Aksi</th>
    </tr>


    <?php $i = 1; ?>
    <?php foreach ($buku as $bk) : ?>
      <tr class="isi">
        <td><?= $i; ?></td>
        <td><img src="img/<?= $bk["gambar"]; ?>" width="100"></td>
        <td><?= $bk["judul"]; ?></td>
        <td><?= $bk["penulis"]; ?></td>
        <td class="aksi">
          <a href="php/ubah.php?id=<?= $bk["id"]; ?>" class="tbl-hijau"><i class="fas fa-edit"></i></a>
          <a href="php/hapus.php?id=<?= $bk["id"]; ?>" onclick="return confirm('yakin?');" class="tbl-merah"><i class="fas fa-trash-alt"></i></a>
        </td>

      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>


  </table>
  <br><br>

</body>

</html>