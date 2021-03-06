<?php
include 'config/connect.php';

function getAllMahasiswa()
{
  global $conn;
  $query = 'SELECT * FROM tbl_mhs';

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  };

  return $rows;
}

function getByIdMahasiswa($id)
{
  global $conn;

  $query = "SELECT * FROM tbl_mhs WHERE mhs_id=$id";
  $result = mysqli_query($conn, $query);

  return mysqli_fetch_assoc($result);
}

function addMahasiswa($data)
{
  global $conn;

  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $prodi = htmlspecialchars($data['prodi']);

  $query = "INSERT INTO tbl_mhs(nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi');";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function updateMahasiswa($data)
{
  global $conn;

  $id = $data['id'];
  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $prodi = htmlspecialchars($data['prodi']);

  $query = "UPDATE tbl_mhs SET nim='$nim', nama='$nama', prodi='$prodi' WHERE mhs_id=$id;";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function deleteMahasiswa($id)
{
  global $conn;

  $query = "DELETE FROM tbl_mhs WHERE mhs_id='$id';";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function getCountMhs()
{
  global $conn;

  $query = "SELECT COUNT(*) FROM tbl_mhs";

  $result = mysqli_query($conn, $query);

  return mysqli_fetch_array($result)[0];
}
