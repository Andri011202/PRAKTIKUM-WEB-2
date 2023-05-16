<?php
require "Koneksi.php";
require "Model.php";

if (!empty($_GET['id_buku'])) {
  $id_buku = $_GET['id_buku'];
  deletedata("buku", $id_buku, "id_buku");
  header('location:buku.php');
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Daftar buku</title>
  <style>
    h1,
    table {
      text-align: center;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
                <a class="navbar-brand" href="#">PRAKTIKUM 5</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="Member.php">Data Member <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Buku.php">Data Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Peminjaman.php">Data Peminjaman</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
  <h1 class="mt-1">Daftar Buku</h1>
  <center><a href="FormBuku.php"><button type="button" class="btn btn-sm btn-dark">Tambah Data Baru</button></a></center>
  <div class="table-responsive mx-4 mt-4">
    <table class="table table-striped align-middle">
      <tr class="table-dark">
        <th>ID</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th colspan="2">Opsi</th>
      </tr>

      <?php
      $result = selectalldata("buku");
      while ($data = mysqli_fetch_array($result)) { ?>
        <tr>
          <td><?php echo $data['id_buku'] ?></td>
          <td><?php echo $data['judul_buku'] ?></td>
          <td><?php echo $data['penulis'] ?></td>
          <td><?php echo $data['penerbit'] ?></td>
          <td><?php echo $data['tahun_terbit'] ?></td>
          <td style="text-align: center;"><a href="FormBuku.php?id_buku=<?php echo $data['id_buku']; ?>"><button class="btn btn-primary btn-sm">Edit</button></a></td>
          <td style="text-align: center;"><a href="Buku.php?id_buku=<?php echo $data['id_buku']; ?>" onclick="return confirm('Hapus data?')"><button class="btn btn-danger btn-sm">Hapus</button></a></td>
        </tr>
      <?php } ?>
    </table>
  </div>
      </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>