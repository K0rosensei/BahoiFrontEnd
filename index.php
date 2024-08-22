<?php 
include 'config/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/Style1.css" />
  <link rel="stylesheet" href="css/popup.css" />
  <title>Bahoi Tourism</title>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li class="logo"><img src="asset/icon1/Logo1.png" alt="Logo" /></li>
        <li class="name"><a href="index.php">Bahoi Tourism</a></li>
        <li class="spacer"></li>
        <li class="center"><a href="index.php">Beranda</a></li>
        <li class="center"><a href="config/logout.php">Kontak</a></li>
        <li class="spacer"></li>
        <?php
        if (empty($token)){
        ?>
        <li id="loginButton" class="button">
          <button id="showLoginBtn" class="masuk">
            <img src="asset/icon1/User.png" alt="User Icon" class="icon" />Masuk
          </button>
        </li>
        <li id="registerButton" class="button">
          <button id="showRegisterBtn" class="daftar">Daftar</button>
        </li>
        <?php
        }else{
        ?>
        <li id="pemesananButton" class="center"><a href="fitur/pesan/pemesanan.php">Pemesanan</a>
        </li>
        <li id="usernameDisplay" class="username">
          <a href="fitur/akun/akunsaya.php">
            <img src="asset/icon1/User.png" alt="User Icon" class="user-icon" />
            <span class="user-name"><?= $username ?></span>
          </a>
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
        <form id="loginForm" action="config/login.php" method="post">
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
        <form id="registrationForm" action="config/signup.php" method="post">
          <div class="input-group">
            <input type="text" id="registerName" name="registerName" required />
            <label for="registerName">Name</label>
            <img src="asset/icon2/User.png" alt="User Icon" class="input-icon" />
          </div>
          <div class="input-group">
            <input type="email" id="registerEmail" name="registerEmail" required />
            <label for="registerEmail">Email</label>
            <img src="asset/icon2/Email.png" alt="Email Icon" class="input-icon" />
          </div>
          <div class="input-group">
            <input type="password" id="registerPassword" name="registerPassword" required />
            <label for="registerPassword">Password</label>
            <img src="asset/icon2/Lock.png" alt="Lock Icon" class="input-icon" />
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

    <div class="header-container">
      <h1>Hai, mau liburan sekeluarga?</h1>
      <div class="search-bar">
        <input type="text" placeholder="Homestay" />
        <button>
          <img src="asset/icon1/search.png" alt="Search" />
        </button>
      </div>
      <div class="icon-container">
        <div class="icon-row">
          <div class="icon">
            <a href="fitur/hs/homestay.php"><img src="asset/icon1/homestay.png" alt="Homestay" />
              <p>Homestay</p>
            </a>
          </div>
          <div class="icon">
            <a href="fitur/diving/diving.php"><img src="asset/icon1/diving.png" alt="Diving & Snorkeling" />
              <p>Diving & Snorkeling</p>
            </a>
          </div>
          <div class="icon">
            <a href="fitur/wisata/mangrove.php">
              <img src="asset/icon1/mangrove.png" alt="Wisata Mangrove" />
              <p>Wisata Mangrove</p>
            </a>
          </div>
          <div class="icon">
            <img src="asset/icon1/kuliner.png" alt="Kuliner" />
            <p>Kuliner</p>
          </div>
        </div>
        <div class="icon-row">
          <div class="icon">
            <img src="asset/icon1/budaya.png" alt="Budaya" />
            <p>Budaya</p>
          </div>
          <div class="icon">
            <img src="asset/icon1/mancing.png" alt="Wisata Mancing" />
            <p>Wisata Mancing</p>
          </div>
          <div class="icon">
            <img src="asset/icon1/trip.png" alt="Trip Antar Pulau" />
            <p>Trip Antar Pulau</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container" id="homestay">
    <h1>Rekomendasi Homestay</h1>
    <h2>Berdasarkan review teratas</h2>
    <div class="homestay-grid">
      <div class="homestay-card">
        <img src="asset/homestay/Aget1.png" alt="Homestay Aget" />
        <h3>Homestay Aget</h3>
        <p>Sudah termasuk sarapan</p>
        <div class="info">
          <div class="rating">
            <span class="stars">★★★★☆</span>
            <span>(4 Review)</span>
          </div>
          <div class="details">
            <p>Maksimal 2 Orang</p>
            <p class="price">Rp. 150.000 /Malam /Org</p>
          </div>
        </div>
        <a href="fitur/hs/list/aget.php"><button>Pesan Sekarang</button></a>
      </div>
      <div class="homestay-card">
        <img src="asset/homestay/Karisa1.png" alt="Homestay Karisa" />
        <h3>Homestay Karisa</h3>
        <p>Sudah termasuk sarapan</p>
        <div class="info">
          <div class="rating">
            <span class="stars">★★★★☆</span>
            <span>(4 Review)</span>
          </div>
          <div class="details">
            <p>Maksimal 2 Orang</p>
            <p class="price">Rp. 150.000 /Malam /Org</p>
          </div>
        </div>
        <a href="fitur/hs/list/karisa.php"><button>Pesan Sekarang</button></a>
      </div>
      <div class="homestay-card">
        <img src="asset/homestay/Sally1.png" alt="Homestay Sally" />
        <h3>Homestay Sally</h3>
        <p>Sudah termasuk sarapan</p>
        <div class="info">
          <div class="rating">
            <span class="stars">★★★★☆</span>
            <span>(4 Review)</span>
          </div>
          <div class="details">
            <p>Maksimal 8-10 Orang</p>
            <p class="price">Rp. 150.000 /Malam /Org</p>
          </div>
        </div>
        <a href="fitur/hs/list/sally.php"><button>Pesan Sekarang</button></a>
      </div>
    </div>
    <div class="view-all">
      <a href="fitur/hs/homestay.php"><button>Lihat Semua</button></a>
    </div>
  </div>

  <div class="owner" id="kontak">
    <div>
      <img src="asset/icon1/DekiTamamilang.png" alt="" />
      <h4>Dekky Tamamilang</h4>
      <p>Sekretaris Desa</p>
      <div class="contact">
        <img src="asset/icon1/fb.png" alt="Facebook" />
        <img src="asset/icon1/ig.png" alt="Instagram" />
        <img src="asset/icon1/wa.png" alt="WhatsApp" />
      </div>
    </div>
    <div>
      <img src="asset/icon1/JecelineMelvandaDalero.png" alt="" />
      <h4>Jaceline M. Dalero</h4>
      <p>Ketua Pengelola Homestay</p>
      <div class="contact">
        <img src="asset/icon1/fb.png" alt="Facebook" />
        <img src="asset/icon1/ig.png" alt="Instagram" />
        <img src="asset/icon1/wa.png" alt="WhatsApp" />
      </div>
    </div>
    <div>
      <img src="asset/icon1/OIP.png" alt="" />
      <h4>Maxi Lahading (the monster)</h4>
      <p>Pengelola Daerah Perlindungan Laut</p>
      <div class="contact">
        <img src="asset/icon1/fb.png" alt="Facebook" />
        <img src="asset/icon1/ig.png" alt="Instagram" />
        <img src="asset/icon1/wa.png" alt="WhatsApp" />
      </div>
    </div>
  </div>

  <div class="location-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4481621380357!2d106.80161381533532!3d-6.230364995483137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f430f0c192f5%3A0x50ef6a9a7c11d81!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1627403989750!5m2!1sen!2sid"
      width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
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
          <a href="#"><img src="asset/icon4/facebook.png" alt="Facebook" /> Facebook</a>
        </li>
        <li>
          <a href="#"><img src="asset/icon4/Instagram.png" alt="Instagram" /> Instagram</a>
        </li>
        <li>
          <a href="#"><img src="asset/icon4/Telegram.png" alt="Telegram" /> Telegram</a>
        </li>
        <li>
          <a href="#"><img src="asset/icon4/Whatsapp.png" alt="WhatsApp" /> WhatsApp</a>
        </li>
        <li>
          <a href="#"><img src="asset/icon4/Yt.png" alt="Youtube" /> Youtube</a>
        </li>
        <li>
          <a href="#"><img src="asset/icon4/Tiktok.png" alt="Tiktok" /> Tiktok</a>
        </li>
      </ul>
    </div>
    <div class="footer-qr">
      <h3>QR code</h3>
      <img src="asset/icon4/qrcode.jpeg" alt="Scan untuk terhubung ke grup WhatsApp" />
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

  <script src="js/js.js"></script>
</body>

</html>