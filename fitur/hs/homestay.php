<?php 
include '../../config/session.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/bahoitourismv2/css/Style2.css" />
    <link rel="stylesheet" href="/bahoitourismv2/css/popup.css" />
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
        if (empty($token)){
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
        }else{
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
              <input
                type="text"
                id="registerName"
                name="registerName"
                required
              />
              <label for="registerName">Name</label>
              <img
                src="/bahoitourismv2/asset/icon2/User.png"
                alt="User Icon"
                class="input-icon"
              />
            </div>
            <div class="input-group">
              <input
                type="email"
                id="registerEmail"
                name="registerEmail"
                required
              />
              <label for="registerEmail">Email</label>
              <img src="/bahoitourismv2/asset/icon2/Email.png" alt="Email Icon" class="input-icon" />
            </div>
            <div class="input-group">
              <input
                type="password"
                id="registerPassword"
                name="registerPassword"
                required
              />
              <label for="registerPassword">Password</label>
              <img src="/bahoitourismv2/asset/icon2/Lock.png" alt="Lock Icon" class="input-icon" />
            </div>
            <div class="checkbox-group">
              <input type="checkbox" id="terms" required />
              <label1 for="terms" class="label2"
                >I agree to the Terms & Conditions</label1
              >
            </div>
            <button type="submit">Registration</button>
          </form>
          <p class="login-link">
            Already have an account? <a href="#" id="showLoginLink">Login</a>
          </p>
        </div>
      </div>

      <div class="search-bar">
        <button>
          <img src="/bahoitourismv2/asset/icon1/search.png" alt="Search" />
        </button>
        <input type="text" placeholder="Homestay" />
      </div>
    </header>

    <div class="judul">
      <h1>
        Mau Menginap? Silahkan<br />
        cari homestay sesuai<br />
        keinginan kamu
      </h1>
    </div>
    <div class="container">
      <h1>Semua Homestay</h1>
      <div class="homestay-grid">
        <div class="homestay-card">
          <img src="/bahoitourismv2/asset/homestay/Amelia1.png" alt="Homestay Amelia" />
          <h3>Homestay Amelia</h3>
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
          <a href="detail.php?id=11"><button>Pesan Sekarang</button></a>
        </div>
        <div class="homestay-card">
          <img src="/bahoitourismv2/asset/homestay/Enjelo1.png" alt="Homestay Enjelo" />
          <h3>Homestay Enjelo</h3>
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
          <a href="detail.php?id=10"><button>Pesan Sekarang</button></a>
        </div>
        <div class="homestay-card">
          <img src="/bahoitourismv2/asset/homestay/Josua1.png" alt="Homestay Josua All" />
          <h3>Homestay Josua All</h3>
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
          <a href="detail.php?id=9"><button>Pesan Sekarang</button></a>
        </div>
        <div class="homestay-card">
          <img src="/bahoitourismv2/asset/homestay/Revi1.png" alt="Homestay Revi" />
          <h3>Homestay Revi</h3>
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
          <a href="detail.php?id=5"><button>Pesan Sekarang</button></a>
        </div>
        <div class="homestay-card">
          <img src="/bahoitourismv2/asset/homestay/Sally1.png" alt="Homestay Sally" />
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
          <a href="detail.php?id=6"><button>Pesan Sekarang</button></a>
        </div>
        <div class="homestay-card">
          <img src="/bahoitourismv2/asset/homestay/Defandro1.png" alt="Homestay Defandro" />
          <h3>Homestay Defandro</h3>
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
          <a href="detail.php?id=8"><button>Pesan Sekarang</button></a>
        </div>
        <div class="homestay-card">
          <img src="/bahoitourismv2/asset/homestay/Marina1.png" alt="Homestay Marina" />
          <h3>Homestay Marina</h3>
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
          <a href="detail.php?id=4"><button>Pesan Sekarang</button></a>
        </div>
        <div class="homestay-card">
          <img src="/bahoitourismv2/asset/homestay/Jein1.png" alt="Homestay Jein" />
          <h3>Homestay Jein</h3>
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
          <a href="detail.php?id=2"><button>Pesan Sekarang</button></a>
        </div>
        <div class="homestay-card">
          <img src="/bahoitourismv2/asset/homestay/Renata1.png" alt="Homestay Renata" />
          <h3>Homestay Renata</h3>
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
          <a href="detail.php?id=7"><button>Pesan Sekarang</button></a>
        </div>
        <div class="homestay-card">
          <img src="/bahoitourismv2/asset/homestay/Aget1.png" alt="Homestay Aget" />
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
          <a href="detail.php?id=1"><button>Pesan Sekarang</button></a>
        </div>
        <div class="homestay-card">
          <img src="/bahoitourismv2/asset/homestay/Karisa1.png" alt="Homestay Karisa" />
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
          <a href="detail.php?id=3"><button>Pesan Sekarang</button></a>
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
            <a href="#"
              ><img src="/bahoitourismv2/asset/icon4/facebook.png" alt="Facebook" /> Facebook</a>
          </li>
          <li>
            <a href="#"
              ><img src="/bahoitourismv2/asset/icon4/Instagram.png" alt="Instagram" /> Instagram</a>
          </li>
          <li>
            <a href="#"
              ><img src="/bahoitourismv2/asset/icon4/Telegram.png" alt="Telegram" /> Telegram</a>
          </li>
          <li>
            <a href="#"
              ><img src="/bahoitourismv2/asset/icon4/Whatsapp.png" alt="WhatsApp" /> WhatsApp</a>
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
        <img
          src="/bahoitourismv2/asset/icon4/qrcode.jpeg"
          alt="Scan untuk terhubung ke grup WhatsApp"
        />
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
  </body>
</html>
