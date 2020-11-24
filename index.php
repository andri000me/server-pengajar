<?php
include 'function.php';
$mahasiswa = getAllMahasiswa();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mx-auto px-4 pt-5">
    <h1 class="text-5xl font-bold font-sarif mb-5">Daftar Mahasiswa</h1>
    <a href="add.php" class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-sm text-white my-2">Tambah mahasiswa</a>
    <table class="border-collapse table-auto border border-green-800 mt-3  w-full">
      <thead>
        <tr class="py-3">
          <th class="border bg-indigo-200 px-8 py-4  ">No</th>
          <th class="border bg-indigo-200 px-8 py-4 ">NIM</th>
          <th class="border bg-indigo-200 px-8 py-4 ">Nama</th>
          <th class="border bg-indigo-200 px-8 py-4 ">Prodi</th>
          <th class="border bg-indigo-200 px-8 py-4 ">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
          <tr>
            <td class="border text-center px-8 py-3"><?= $no; ?></td>
            <td class="border text-center px-8 py-3"><?= $mhs['nim'] ?></td>
            <td class="border text-center px-8 py-3"><?= $mhs['nama']; ?></td>
            <td class="border text-center px-8 py-3"><?= $mhs['prodi']; ?></td>
            <td class="border text-center py-3">
              <a href="info.php?id=<?= $mhs['mhs_id']; ?>" class="bg-blue-500 hover:bg-tael-600 focus:outline-none focus:shadow-outline py-1 px-3 mx-1 rounded-md text-white">
                Info
              </a>
              <a href="edit.php?id=<?= $mhs['mhs_id']; ?>" class="bg-yellow-500 hover:bg-tael-600 focus:outline-none focus:shadow-outline py-1 px-3 mx-1 rounded-md text-white">
                Edit
              </a>
              <a href="delete.php?id=<?= $mhs['mhs_id']; ?>" class="bg-red-500 hover:bg-tael-600 focus:outline-none focus:shadow-outline py-1 px-3 mx-1 rounded-md text-white">
                Hapus
              </a>
            </td>
          </tr>
          <?php $no++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>