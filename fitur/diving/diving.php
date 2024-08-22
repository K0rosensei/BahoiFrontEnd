<?php 
include '../../config/session.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/bahoitourismv2/css/Style3.css" />
    <link rel="stylesheet" href="/bahoitourismv2/css/popup.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
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
    </header>

    <div class="judul">
      <h1>
        Mau Diving / Snorkeling?<br/>
        silahkan cari perlengkapan<br/>
        yang kamu butuhkan<br/>
      </h1>
    </div>
    <div class="container">
      <h1>Perlengkapan Diving & Snorkeling</h1>
      <div class="grid-container">
        <div class="card">
          <img src="/bahoitourismv2/asset/diving/fullsetdiving.png" alt="Fullset Diving" />
          <div class="card-content">
            <h3>Fullset Diving</h3>
            <p><i class="fas fa-clock"></i> Pemakaian selama 7 jam</p>
            <p>
              Jika barang yang anda pesan tidak sesuai, silahkan hubungi admin
            </p>
            <div class="price-info">
              <span class="price"
                >Rp. 250.000 <span class="unit">/Set /Orang</span></span
              >
              <button id="cekharga">Pesan Sekarang</button>
            </div>
          </div>
        </div>
        <div class="card">
            <img src="/bahoitourismv2/asset/diving/fullsetsnorkeling.png" alt="Fullset Snorkeling" />
            <div class="card-content">
              <h3>Fullset Snorkeling</h3>
              <p><i class="fas fa-clock"></i> Pemakaian selama 7 jam</p>
              <p>
                Jika barang yang anda pesan tidak sesuai, silahkan hubungi admin
              </p>
              <div class="price-info">
                <span class="price"
                  >Rp. 150.000 <span class="unit">/Set /Orang</span></span
                >
                <button id="cekharga">Pesan Sekarang</button>
              </div>
            </div>
          </div>
          <div class="card">
            <img src="/bahoitourismv2/asset/diving/Hotpot.png" alt="BCD (Jacket)" />
            <div class="card-content">
              <h3>BCD (Jacket)</h3>
              <p><i class="fas fa-clock"></i> Pemakaian selama 7 jam</p>
              <p>
                Jika barang yang anda pesan tidak sesuai, silahkan hubungi admin
              </p>
              <div class="price-info">
                <span class="price"
                  >Rp. 60.000 <span class="unit">/Set /Orang</span></span
                >
                <button id="cekharga">Pesan Sekarang</button>
              </div>
            </div>
          </div>
          <div class="card">
            <img src="/bahoitourismv2/asset/diving/Pelampung.png" alt="Fullset Pelampung" />
            <div class="card-content">
              <h3>Pelampung</h3>
              <p><i class="fas fa-clock"></i> Pemakaian selama 7 jam</p>
              <p>
                Jika barang yang anda pesan tidak sesuai, silahkan hubungi admin
              </p>
              <div class="price-info">
                <span class="price"
                  >Rp. 50.000 <span class="unit">/Set /Orang</span></span
                >
                <button id="cekharga">Pesan Sekarang</button>
              </div>
            </div>
          </div>
          <div class="card">
            <img src="/bahoitourismv2/asset/diving/Regulator.png" alt="Regulator" />
            <div class="card-content">
              <h3>Regulator</h3>
              <p><i class="fas fa-clock"></i> Pemakaian selama 7 jam</p>
              <p>
                Jika barang yang anda pesan tidak sesuai, silahkan hubungi admin
              </p>
              <div class="price-info">
                <span class="price"
                  >Rp. 60.000 <span class="unit">/Set /Orang</span></span
                >
                <button id="cekharga">Pesan Sekarang</button>
              </div>
            </div>
          </div>
          <div class="card">
            <img src="/bahoitourismv2/asset/diving/Boots.png" alt="Boots" />
            <div class="card-content">
              <h3>Boots</h3>
              <p><i class="fas fa-clock"></i> Pemakaian selama 7 jam</p>
              <p>
                Jika barang yang anda pesan tidak sesuai, silahkan hubungi admin
              </p>
              <div class="price-info">
                <span class="price"
                  >Rp. 50.000 <span class="unit">/Set /Orang</span></span
                >
                <button id="cekharga">Pesan Sekarang</button>
              </div>
            </div>
          </div>
          <div class="card">
            <img src="/bahoitourismv2/asset/diving/Wetsuit.png" alt="Wetsuit" />
            <div class="card-content">
              <h3>Wetsuit</h3>
              <p><i class="fas fa-clock"></i> Pemakaian selama 7 jam</p>
              <p>
                Jika barang yang anda pesan tidak sesuai, silahkan hubungi admin
              </p>
              <div class="price-info">
                <span class="price"
                  >Rp. 50.000 <span class="unit">/Set /Orang</span></span
                >
                <button id="cekharga">Pesan Sekarang</button>
              </div>
            </div>
          </div>
          <div class="card">
            <img src="/bahoitourismv2/asset/diving/Hotpot2.png" alt="Snorkel & Mask" />
            <div class="card-content">
              <h3>Snorkel & Mask</h3>
              <p><i class="fas fa-clock"></i> Pemakaian selama 7 jam</p>
              <p>
                Jika barang yang anda pesan tidak sesuai, silahkan hubungi admin
              </p>
              <div class="price-info">
                <span class="price"
                  >Rp. 100.000 <span class="unit">/Set /Orang</span></span
                >
                <button id="cekharga">Pesan Sekarang</button>
              </div>
            </div>
          </div>
          <div class="card">
            <img src="/bahoitourismv2/asset/diving/Fins.png" alt="Fins" />
            <div class="card-content">
              <h3>Fins</h3>
              <p><i class="fas fa-clock"></i> Pemakaian selama 7 jam</p>
              <p>
                Jika barang yang anda pesan tidak sesuai, silahkan hubungi admin
              </p>
              <div class="price-info">
                <span class="price"
                  >Rp. 50.000 <span class="unit">/Set /Orang</span></span
                >
                <button id="cekharga">Pesan Sekarang</button>
              </div>
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
