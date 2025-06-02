<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kantin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar { padding-left: 27%; }
    .menu-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
    }
    .qr-box {
      text-align: center;
      margin-top: 20px;
    }
    .form-check-input {
      margin-right: 10px;
    }
    footer{
      display: flex;
    }
  </style>
</head>
<body>

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
        <li class="nav-item"><a class="nav-link active" href="buy.php">How to buy</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!--KANTIN GUZ PIXMEN-->

<div class="container mt-5">
  <h2 class="text-center mb-4">Kantin Guz Pixmen</h2>

  <form id="formOrder">
    <div class="row">
      <!-- Makanan -->
      <div class="col-md-6">
        <h4>Makanan</h4>
        <div class="menu-card">
          <div class="d-flex justify-content-between align-items-center">
            <label>
              <input type="checkbox" class="form-check-input menu-item" data-harga="10000" data-stok="10">
              Nasi Goreng (Rp10.000) - Stok: <span class="stok">10</span>
            </label>
            <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled style="width: 60px;">
          </div>
        </div>

        <div class="menu-card">
          <div class="d-flex justify-content-between align-items-center">
            <label>
              <input type="checkbox" class="form-check-input menu-item" data-harga="8000" data-stok="4">
              Mie Goreng (Rp8.000) - Stok: <span class="stok">4</span>
            </label>
            <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled style="width: 60px;">
          </div>
        </div>
      </div>

      <!-- Minuman -->
      <div class="col-md-6">
        <h4>Minuman</h4>
        <div class="menu-card">
          <div class="d-flex justify-content-between align-items-center">
            <label>
              <input type="checkbox" class="form-check-input menu-item" data-harga="5000" data-stok="6">
              Es Teh (Rp5.000) - Stok: <span class="stok">6</span>
            </label>
            <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled style="width: 60px;">
          </div>
        </div>

        <div class="menu-card">
          <div class="d-flex justify-content-between align-items-center">
            <label>
              <input type="checkbox" class="form-check-input menu-item" data-harga="6000" data-stok="3">
              Es Jeruk (Rp6.000) - Stok: <span class="stok">3</span>
            </label>
            <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled style="width: 60px;">
          </div>
        </div>
      </div>
    </div>

<!--KANTIN BU RIKKA-->

<div class="container mt-5">
  <h2 class="text-center mb-4">Kantin Bu Rikka</h2>

  <form id="formOrder">
    <div class="row">
      <!-- Makanan -->
      <div class="col-md-6">
        <h4>Makanan</h4>
        <div class="menu-card">
          <div class="d-flex justify-content-between align-items-center">
            <label>
              <input type="checkbox" class="form-check-input menu-item" data-harga="10000" data-stok="5">
              Nasi Goreng (Rp10.000) - Stok: <span class="stok">5</span>
            </label>
            <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled style="width: 60px;">
          </div>
        </div>

        <div class="menu-card">
          <div class="d-flex justify-content-between align-items-center">
            <label>
              <input type="checkbox" class="form-check-input menu-item" data-harga="8000" data-stok="4">
              Mie Goreng (Rp8.000) - Stok: <span class="stok">4</span>
            </label>
            <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled style="width: 60px;">
          </div>
        </div>
      </div>

      <!-- Minuman -->
      <div class="col-md-6">
        <h4>Minuman</h4>
        <div class="menu-card">
          <div class="d-flex justify-content-between align-items-center">
            <label>
              <input type="checkbox" class="form-check-input menu-item" data-harga="5000" data-stok="6">
              Es Teh (Rp5.000) - Stok: <span class="stok">6</span>
            </label>
            <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled style="width: 60px;">
          </div>
        </div>

        <div class="menu-card">
          <div class="d-flex justify-content-between align-items-center">
            <label>
              <input type="checkbox" class="form-check-input menu-item" data-harga="6000" data-stok="3">
              Es Jeruk (Rp6.000) - Stok: <span class="stok">3</span>
            </label>
            <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled style="width: 60px;">
          </div>
        </div>
      </div>
    </div>
    <hr>
    <h4>Total Harga: <span id="totalHarga">Rp0</span></h4>

    <button type="button" class="btn btn-primary mt-3" onclick="tampilkanQR()">Bayar Sekarang</button>
  </form>

  <br>

  <div class="qr-box" id="qrBox" style="display: none;">
    <h5>Scan QR Code Ini Untuk Membayar</h5>
    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Pembayaran+Kantin" alt="QR Code">
  </div>
</div>
<br>

<footer class="bg-dark text-white text-center py-4 mt-auto">
    <div class="container">
      <p class="mb-1">&copy; Fathan Athillah</p>
    </div>
  </footer>

<script>
  const items = document.querySelectorAll('.menu-item');
  const totalEl = document.getElementById('totalHarga');
  const qrBox = document.getElementById('qrBox');

  items.forEach(item => {
    const qtyInput = item.closest('.menu-card').querySelector('.qty-input');

    item.addEventListener('change', () => {
      qtyInput.disabled = !item.checked;
      hitungTotal();
    });

    qtyInput.addEventListener('input', hitungTotal);
  });

  function hitungTotal() {
    let total = 0;
    items.forEach(item => {
      const qtyInput = item.closest('.menu-card').querySelector('.qty-input');
      if (item.checked) {
        const harga = parseInt(item.dataset.harga);
        const qty = parseInt(qtyInput.value) || 0;
        total += harga * qty;
      }
    });
    totalEl.textContent = 'Rp' + total.toLocaleString('id-ID');
  }

  function tampilkanQR() {
    let valid = true;

    items.forEach(item => {
      if (item.checked) {
        const qtyInput = item.closest('.menu-card').querySelector('.qty-input');
        const stokEl = item.closest('.menu-card').querySelector('.stok');

        const stok = parseInt(item.dataset.stok);
        const qty = parseInt(qtyInput.value);

        if (qty > stok) {
          alert("Stok tidak cukup untuk: " + item.parentElement.textContent.trim());
          valid = false;
        }
      }
    });

    if (!valid) return;

    items.forEach(item => {
      if (item.checked) {
        const qtyInput = item.closest('.menu-card').querySelector('.qty-input');
        const stokEl = item.closest('.menu-card').querySelector('.stok');

        let stok = parseInt(item.dataset.stok);
        const qty = parseInt(qtyInput.value);

        stok -= qty;
        item.dataset.stok = stok;
        stokEl.textContent = stok;

        // Reset input
        qtyInput.value = 1;
        item.checked = false;
        qtyInput.disabled = true;
      }
    });

    hitungTotal();
    qrBox.style.display = 'block';
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
