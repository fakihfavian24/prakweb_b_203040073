<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb_2022_b_203040073");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;


  $judul = htmlspecialchars($data["judul"]);
  $penulis = htmlspecialchars($data["penulis"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "INSERT INTO buku
                VALUES
                (NULL, '$judul', '$penulis', '$gambar')
                ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;

  mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;

  $id = $data["id"];
  $judul = htmlspecialchars($data["judul"]);
  $penulis = htmlspecialchars($data["penulis"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "UPDATE buku SET
                judul = '$judul',
                penulis = '$penulis',
                gambar = '$gambar'
                WHERE id = $id
                ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
