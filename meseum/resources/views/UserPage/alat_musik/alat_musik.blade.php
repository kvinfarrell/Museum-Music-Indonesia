<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Museum Musik Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      * {
        font-family: "Poppins", sans-serif;
      }

      .navbar {
        background-color: #000;
        position: sticky;
        top: 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 99;
      }

      .navbar-brand img {
        width: 70px;
        height: 70px;
      }

      .nav-link {
        color: #fff !important;
        font-size: 1rem;
      }

      .container-image-logo {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 100px;
        margin-top: 100px;
      }

      .image-card {
        background: #f5f5ff;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 330px;
        text-align: center;
        transition: transform 0.3s, background-color 0.3s;
      }

      .image-card:hover {
        transform: translateY(-10px);
        background-color: rgba(246, 246, 246, 1);
      }

      .image-logo {
        width: 100%;
        height: 250px;
        background-size: cover;
        background-position: center;
        object-fit: cover;
      }

      .image-logo-1 {
        background-image: url('/Img/Alat musik modern.png');
        background-size: contain;
        background-repeat: no-repeat;
      }

      .image-logo-3 {
        background-image: url('/Img/Alat musik tradisional.png');
        background-size: contain;
        background-repeat: no-repeat;
      }

      .info h3{
        font-weight: 700;
        margin-bottom: 20px
      }
      .image-card a{
        text-decoration: none;
        color: black;
        margin-top: 5px;
        font-weight: bold;
      }

      .image-card h4{
        margin: 10px 0;
        font-size: 1.2rem;
        color: #333;
      }

      .main-title h4 {
            color: black;
            font-size: 30px;
        }
      .drum {
        width: 200px;
        height: 100px;
      }

      .back {
            position: absolute;
            display: flex;
            top: 130px;
            left: 36px;
            cursor: pointer;
        }

        .back img {
            width: 80px;
            height: auto;
        }

      .content {
        text-align: center;
        color: #fff;
      }

      .main-title {
        display: flex;
        justify-content: center;
        margin-top: 30px;
      }

      .main-title img {
        width: 50px;
        height: auto;
      }

      .main-title h4 {
        color: black;
        font-size: 30px;
        font-weight: bold;
      }

      .footer {
        background-color: #000;
        color: white;
        padding: 20px 50px;
        margin-top: 50px;
      }

      .info {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
      }

      .address, .information, .map {
        flex: 1;
        padding-right: 20px;
      }

      .map {
        height: 200px;
        border: 0;
      }

      .map iframe {
        width: 100%;
        height: 100%;
        border: 0;
      }

      .text-center {
        margin-top: 50px;
      }

      .strip {
        letter-spacing: -3px;
        color: black;
        margin: 0;
        margin-bottom: 100px;
      }

      .title h3 {
        color: white;
      }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid" style="padding: 0;">
        <a class="navbar-brand" href="/Museum/home.html">
          <img src="/Img/MMI2.jpg" alt="Logo" style="margin-left: 50px">
        </a>
        <div class="title">
          <h3>Museum Musik Indonesia</h3>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto" style="margin-right: 50px">
            <li class="nav-item">
                <a class="nav-link" href="/PageMusik">Musik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/alatmusik/home">Alat Musik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user/artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user/memorabilia">Memorabilia</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="back" onclick="goBack()">
      <img src="/Img/tombol_back-removebg-preview.png" alt="Back">
    </div>

    <div class="content">
      <div class="main-title">
        <h4>Koleksi Alat Musik</h4>
        <img src="/Img/logo alat musik 1x1.png" alt="Musik" class="drum">
      </div>
      <h4 class="strip">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h4>
      <div class="container-image-logo">
        <div class="image-card">
          <a href="/alatmusik/modern">
            <div class="image-logo image-logo-1"></div>
            <h4>Alat Musik Modern</h4>
          </a>
        </div>
        <div class="image-card">
          <a href="/alatmusik/tradisional">
            <div class="image-logo image-logo-3"></div>
            <h4>Alat Musik Tradisional</h4>
          </a>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="info">
        <div class="address">
          <h3>Informasi</h3>
          <p>
            Gedung Penunjang Museum Mpu Purwa lantai 2<br>
            Jl. Soekarno Hatta Perum Griya Shanta Blok B No.210, Malang 65141<br>
            Contact | WA: 081 80 3230 472<br>
            Buka pukul: 09.00-16.00 WIB, Senin dan Hari Besar libur
          </p>
        </div>
        <div class="information">
          <h3>Media Sosial Kami</h3>
          <p>
            <img src="/Img/instagram.png" alt="Instagram" style="width: 20px; margin-right: 10px;">@museummusikindonesia<br>
            <img src="/Img/facebook.png" alt="Facebook" style="width: 20px; margin-right: 10px;">Museum MUSIK Indonesia<br>
            <img src="/Img/mail.png" alt="Email" style="width: 20px; margin-right: 10px;">museummusikindonesia@yahoo.co.id
          </p>
        </div>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.6213246926734!2d112.62251081485086!3d-7.966620994257203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788207c8c7f5d5%3A0x4027a76e3530d43e!2sMuseum%20Musik%20Indonesia!5e0!3m2!1sen!2sid!4v1602501212808!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <div class="text-center">
        <p>&copy; 2024 Museum Musik Indonesia. All rights reserved.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZO/NUNyXtH9reG2j70DXtCrOFEzZBciw1f9Cq40paeI6aZRP5KnBvAtBLSpG1jP4" crossorigin="anonymous"></script>
    <script>
      function goBack() {
        window.history.back();
      }
    </script>
  </body>
</html>
