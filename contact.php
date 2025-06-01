<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "nyobaphp";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
  die("Koneksi gagal.");
}

$successMessage = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $pesan = $_POST["pesan"];

  $sql = "INSERT INTO contact (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
  $result = mysqli_query($con, $sql);

  if ($result) {
    $successMessage = "Pesan berhasil terkirim!";
  } else {
    $successMessage = "Pesan gagal dikirim: " . mysqli_error($con);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact - Kantin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .navbar {
      padding-left: 27%;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="kantin.php">About Kantin</a></li>
        <li class="nav-item"><a class="nav-link" href="cafe.php">Cafetaria list</a></li>
        <li class="nav-item"><a class="nav-link" href="buy.php">How to buy</a></li>
        <li class="nav-item"><a class="nav-link active" href="contact.php">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <h2>Contact Us</h2>

  <?php if ($successMessage): ?>
    <div class="alert alert-info"><?= $successMessage ?></div>
  <?php endif; ?>

  <form method="post">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" name="nama" id="nama" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="pesan" class="form-label">Pesan</label>
      <textarea name="pesan" id="pesan" rows="4" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
