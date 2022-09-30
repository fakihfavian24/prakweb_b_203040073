<?php

require 'functions.php';

$id = $_GET['id'];
$bk = query("SELECT * FROM buku WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

  // cek keberhasilan data
  if (ubah($_POST) > 0) {
    echo "
      <script>
          alert('data berhasil diubah!');
          document.location.href = '../index.php';
      </script>
  ";
  } else {
    echo "
      <script>
          alert('data gagal diubah!');
          document.location.href = '../index.php';
      </script>
  ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data</title>
</head>

<body>

  <h1>Ubah data buku</h1>

  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $bk['id']; ?>">
    <ul>

      <li>
        <label for="judul">Judul : </label>
        <input type="text" name="judul" id="judul" required value="<?= $bk['judul']; ?>">
      </li>
      <br>
      <li>
        <label for="penulis">Penulis : </label>
        <input type="text" name="penulis" id="penulis" required value="<?= $bk['penulis']; ?>">
      </li>
      <br>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" required value="<?= $bk['gambar']; ?>">
      </li>
      <br>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>

  </form>

</body>

</html>