<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
     <style>
        .navbar{
            padding-left: 27%;
        }
        .kantin-card {
          border: 1px solid #ddd;
          border-radius: 10px;
          padding: 20px;
          margin-bottom: 30px;
          background-color: #f8f9fa;
        }
        .menu-item img {
          width: 100%;
          max-width: 150px;
          border-radius: 10px;
        }
     </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="kantin.php">About Kantin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cafe.php">Cafetaria list</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buy.php">How to buy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contact.php">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>
</div>

<h2 style="padding-top: 10px; padding-bottom: 10px; padding-left: 35%;">Daftar Kantin & Menu</h2>

<div class="kantin-card">
    <h4>Kantin Guz Pixmen</h4>
    <img src="img/kantin1.jpg" alt="Kantin Guz Pixmen" class="img-fluid mb-3" style="max-width: 400px;">
    <div class="row">
      <div class="col-md-3 menu-item">
        <img src="img/nasi_goreng.jpg" alt="Nasi Goreng">
        <p>Nasi Goreng - Rp10.000</p>
      </div>
      <div class="col-md-3 menu-item">
        <img src="img/mie_goreng.jpg" alt="Mie Goreng">
        <p>Mie Goreng - Rp8.000</p>
      </div>
      <div class="col-md-3 menu-item">
        <img src="img/ayam_geprek.jpg" alt="Ayam Geprek">
        <p>Ayam Geprek - Rp12.000</p>
      </div>
      <div class="col-md-3 menu-item">
        <img src="img/es_teh.jpg" alt="Es Teh">
        <p>Es Teh - Rp5.000</p>
      </div>
    </div>
  </div>

  <br>

  <div class="kantin-card">
    <h4>Kantin Bu Rikka</h4>
    <img src="img/kantin1.jpg" alt="Kantin Guz Pixmen" class="img-fluid mb-3" style="max-width: 400px;">
    <div class="row">
      <div class="col-md-3 menu-item">
        <img src="img/nasi_goreng.jpg" alt="Nasi Goreng">
        <p>Nasi Goreng - Rp10.000</p>
      </div>
      <div class="col-md-3 menu-item">
        <img src="img/mie_goreng.jpg" alt="Mie Goreng">
        <p>Mie Goreng - Rp8.000</p>
      </div>
      <div class="col-md-3 menu-item">
        <img src="img/ayam_geprek.jpg" alt="Ayam Geprek">
        <p>Ayam Geprek - Rp12.000</p>
      </div>
      <div class="col-md-3 menu-item">
        <img src="img/es_teh.jpg" alt="Es Teh">
        <p>Es Teh - Rp5.000</p>
      </div>
    </div>
  </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>