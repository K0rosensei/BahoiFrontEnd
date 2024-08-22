<?php 
include '../../config/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/bahoitourismv2/css/Style4.css" />
  <link rel="stylesheet" href="/bahoitourismv2/css/popup.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <title>Document</title>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li class="logo"><img src="../../asset/icon1/Logo1.png" alt="Logo" /></li>
        <li class="name"><a href="../../index.php">Bahoi Tourism</a></li>
        <li class="spacer"></li>
        <li class="center"><a href="../../index.php">Beranda</a></li>
        <li class="center"><a href="../../config/logout.php">Kontak</a></li>
        <li class="spacer"></li>
        <?php
        if (empty($token)) {
          ?>
          <li id="loginButton" class="button">
            <button id="showLoginBtn" class="masuk">
              <img src="../../asset/icon1/User.png" alt="User Icon" class="icon" />Masuk
            </button>
          </li>
          <li id="registerButton" class="button">
            <button id="showRegisterBtn" class="daftar">Daftar</button>
          </li>
          <?php
        } else {
          ?>
          <li id="pemesananButton" class="center"><a href="fitur/pesan/pemesanan.php">Pemesanan</a>
          </li>
          <li id="usernameDisplay" class="username">
            <img src="../../asset/icon1/User.png" alt="User Icon" class="user-icon" />
            <span class="user-name"><?= $username ?></span>
          </li>
          <?php
        }
        ?>
      </ul>
    </nav>

    <div id="loginPopup" class="popup">
      <div class="popup-content">
        <span class="close">&times;</span>
        <h2>Login</h2>
        <form id="loginForm" action="../../config/login.php" method="post">
          <div class="input-group">
            <input type="email" name="email" id="loginEmail" required />
            <label for="loginEmail">Email</label>
            <img src="asset/icon2/Email.png" alt="Email Icon" class="input-icon" />
          </div>
          <div class="input-group">
            <input type="password" name="password" id="loginPassword" required />
            <label for="loginPassword">Password</label>
            <img src="asset/icon2/Lock.png" alt="Lock Icon" class="input-icon" />
          </div>
          <div class="checkbox-group">
            <input type="checkbox" id="remember" />
            <label1 for="remember" class="label1">Remember me</label1>
            <a href="#" class="forget-password">Forget Password?</a>
          </div>
          <button type="submit">Login</button>
        </form>
        <p class="register-link">
          Don't have an account?
          <a href="#" id="showRegisterLink">Register</a>
        </p>
      </div>
    </div>

    <div id="registrationPopup" class="popup">
      <div class="popup-content">
        <span class="close">&times;</span>
        <h2>Registration</h2>
        <form id="registrationForm" action="../config/signup.php" method="post">
          <div class="input-group">
            <input type="text" id="registerName" name="registerName" required />
            <label for="registerName">Name</label>
            <img src="/bahoitourismv2/asset/icon2/User.png" alt="User Icon" class="input-icon" />
          </div>
          <div class="input-group">
            <input type="email" id="registerEmail" name="registerEmail" required />
            <label for="registerEmail">Email</label>
            <img src="/bahoitourismv2/asset/icon2/Email.png" alt="Email Icon" class="input-icon" />
          </div>
          <div class="input-group">
            <input type="password" id="registerPassword" name="registerPassword" required />
            <label for="registerPassword">Password</label>
            <img src="/bahoitourismv2/asset/icon2/Lock.png" alt="Lock Icon" class="input-icon" />
          </div>
          <div class="checkbox-group">
            <input type="checkbox" id="terms" required />
            <label1 for="terms" class="label2">I agree to the Terms & Conditions</label1>
          </div>
          <button type="submit">Registration</button>
        </form>
        <p class="login-link">
          Already have an account? <a href="#" id="showLoginLink">Login</a>
        </p>
      </div>
    </div>
  </header>

  <div class="judul">
    <h1>
      Liburan sekeluarga? Tidak<br />
      lengkap rasanya kalau tidak<br />
      mampir ke wisata mangrove<br />
      desa ekowisata bahoi<br />
    </h1>
  </div>

  <div class="container">
    <h1>Wisata Mangrove</h1>
    <div class="tour-container">
      <div class="collage-container">
        <img src="/bahoitourismv2/asset/wisata/1.png" alt="Image 1" class="horizontal" />
        <img src="/bahoitourismv2/asset/wisata/2.png" alt="Image 2" />
        <div class="vertical">
          <img src="/bahoitourismv2/asset/wisata/4.png" alt="Image 3" />
          <img src="/bahoitourismv2/asset/wisata/3.png" alt="Image 4" />
        </div>
        <div class="vertical">
          <img src="/bahoitourismv2/asset/wisata/5.png" alt="Image 5" />
          <img src="/bahoitourismv2/asset/wisata/6.png" alt="Image 6" />
        </div>
        <img src="/bahoitourismv2/asset/wisata/7.png" alt="Image 7" />
      </div>
      <div class="tour-info">
        <div class="tour-details">
          <h2>Wisata Mangrove</h2>
          <div class="rating">
            <span class="stars">★★★★☆</span>
            <span class="rating-number">4.8</span>
            <span class="review-count">(3 reviews)</span>
          </div>
        </div>
        <div class="price">
          <span>Mulai dari <br></span>
          <span class="price-amount">Rp. 5.000</span>
          <span>/Orang</span>
          <br>
          <button id="cekharga" class="book-now">Lihat Paket</button>
        </div>
      </div>

      <div class="reviews-navigation">
        <img src="/bahoitourismv2/asset/icon2/BackArrow.png" alt="Previous" class="prev-reviews">
        <img src="/bahoitourismv2/asset/icon2/NextArrow.png" alt="Next" class="next-reviews">
      </div>

      <div class="reviews">
        <div class="review">
          <h4>5,0/5</h4>
          <div class="stars">★★★★★</div>
          <p>Wisatanya bagus banget, murah banget tiket masuknya</p>
          <span class="review-date">30 Mei 2024</span>
        </div>
        <div class="review">
          <h4>5,0/5</h4>
          <div class="stars">★★★★☆</div>
          <p>Ada sampah di tempat berteduh yang belum dibersihkan</p>
          <span class="review-date">01 Juni 2024</span>
        </div>
        <div class="review">
          <h4>5,0/5</h4>
          <div class="stars">★★★★★</div>
          <p>Sangat Bagus, pokoknya mah rekomen banget sama temen” sekalian yah</p>
          <span class="review-date">28 Mei 2024</span>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer-about">
      <h3>About Bahoi Tourism</h3>
      <ul>
        <li>Cara Memesan</li>
        <li>Cara Membatalkan</li>
        <li>Pusat Bantuan</li>
        <li>Kupon</li>
        <li>About Us</li>
      </ul>
    </div>
    <div class="footer-links">
      <h3>Ikuti Kami di</h3>
      <ul class="social-icons">
        <li>
          <a href="#"><img src="/bahoitourismv2/asset/icon4/facebook.png" alt="Facebook" /> Facebook</a>
        </li>
        <li>
          <a href="#"><img src="/bahoitourismv2/asset/icon4/Instagram.png" alt="Instagram" /> Instagram</a>
        </li>
        <li>
          <a href="#"><img src="/bahoitourismv2/asset/icon4/Telegram.png" alt="Telegram" /> Telegram</a>
        </li>
        <li>
          <a href="#"><img src="/bahoitourismv2/asset/icon4/Whatsapp.png" alt="WhatsApp" /> WhatsApp</a>
        </li>
        <li>
          <a href="#"><img src="/bahoitourismv2/asset/icon4/Yt.png" alt="Youtube" /> Youtube</a>
        </li>
        <li>
          <a href="#"><img src="/bahoitourismv2/asset/icon4/Tiktok.png" alt="Tiktok" /> Tiktok</a>
        </li>
      </ul>
    </div>
    <div class="footer-qr">
      <h3>QR code</h3>
      <img src="/bahoitourismv2/asset/icon4/qrcode.jpeg" alt="Scan untuk terhubung ke grup WhatsApp" />
      <p>Scan untuk terhubung ke grup WhatsApp</p>
    </div>
    <div style="clear: both"></div>
  </footer>

  <div class="copyright">
    <p>
      Hak Cipta © 2024 Bahoi Tourism. Seluruh hak cipta dilindungi undang -
      undang
    </p>
  </div>

  <script src="/bahoitourismv2/js/js.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const cekharga = document.getElementById("cekharga");
      function showAlert() {
        <?php
          if (empty($token)){
        ?>
        alert('Silahkan Login Dahulu')
        <?php
          } else {
        ?>
        document.location.href ='../../index.php';
        <?php
          }
        ?>
      }
      cekharga.addEventListener("click", showAlert);
    })
  </script>
</body>

</html>