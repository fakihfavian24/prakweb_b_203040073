<?php

class Mahasiswa_model
{
  // private $mhs = [
  //   [
  //     "nama" => "Fakih Favian",
  //     "nrp" => "203040073",
  //     "email" => "203040073@mail.unpas.ac.id",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Fajar",
  //     "nrp" => "203040074",
  //     "email" => "203040020@mail.unpas.ac.id",
  //     "jurusan" => "Teknik mesin"
  //   ],
  //   [
  //     "nama" => "Alfi",
  //     "nrp" => "203040054",
  //     "email" => "203040054@mail.unpas.ac.id",
  //     "jurusan" => "Teknik Industri"
  //   ]
  // ];

  // database handler
  private $dbh;
  private $stmt;

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT *FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
