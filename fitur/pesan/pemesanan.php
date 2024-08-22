<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/bahoitourismv2/css/pesan1.css" />
  <link rel="stylesheet" href="/bahoitourismv2/css/popup.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <title>Document</title>
</head>

<body>
  <div class="header">
    <div class="Logo">
      <img src="/bahoitourismv2/asset/icon1/Logo1.png" alt="Bahoi Tourism Logo">
      <img src="/bahoitourismv2/asset/icon1/Logo2.png" alt="Bahoi Tourism Logo">
    </div>
    <nav>
      <a href="#" class="active">
        <span class="step">1</span>
        Detail Pesanan
      </a>
      <span class="separator">—</span>
      <a href="#">
        <span class="step inactive">2</span>
        Metode Pembayaran
      </a>
    </nav>
  </div>

  <div class="container">
        <h1>Pesanan Saya</h1>
        <p>Detail kontak ini akan digunakan untuk pengiriman e-tiket</p>
        <form>
            <div class="title">
                <input type="radio" id="tuan" name="title" value="tuan" checked>
                <label for="tuan">Tuan</label>
                <input type="radio" id="nyonya" name="title" value="nyonya">
                <label for="nyonya">Nyonya</label>
                <input type="radio" id="nona" name="title" value="nona">
                <label for="nona">Nona</label>
            </div>
            
            <div class="form-group">
                <label for="fullname">Nama Lengkap Sesuai Identitas</label>
                <input type="text" id="fullname" name="fullname" value="sisco mamahi">
            </div>

            <div class="form-group">
                <label for="phone">Nomor Ponsel</label>
                <div class="phone-input">
                    <select>
                        <option value="ID">🇮🇩</option>
                    </select>
                    <input type="text" id="phone" name="phone" value="+62 821 9669 8282">
                </div>
            </div>

            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" value="siscomamahi@gmail.com" readonly>
            </div>
        </form>
    </div>
  <script src="/bahoitourismv2/js/js.js"></script>
</body>

</html>