<?php

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek keberhasilan data
  if (tambah($_POST) > 0) {
    echo "
      <script>
          alert('data berhasil ditambahkan!');
          document.location.href = '../index.php';
      </script>
  ";
  } else {
    echo "
      <script>
          alert('data gagal ditambahkan!');
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
  <title>Tambah Data</title>
</head>

<body>

  <h1>Tambah data buku</h1>

  <form action="" method="post">
    <ul>

      <li>
        <label for="judul">Judul : </label>
        <input type="text" name="judul" id="judul" required>
      </li>
      <br>
      <li>
        <label for="penulis">Penulis : </label>
        <input type="text" name="penulis" id="penulis" required>
      </li>
      <br>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" required>
      </li>
      <br>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>
      </li>
    </ul>

  </form>

</body>

</html>