<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .navbar {
        background-color: #000;
        position: sticky;
        top: 0%;
        box-shadow:#000;
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

      .title h3{
        color: white;
      }

      .image-logo {
        background: url('/img/background.jpg') center/cover;
        height: 50vh;
        width: 500px;
        display: flex;
        justify-content: center;
        align-items: end;
        position: relative;
        border-radius: 0 100px 100px 0;
        margin-bottom: 2rem;
      }

      .image-logo.image-logo-3 {
        border-radius: 100px 0 0 100px;
        margin-top: 100px;
      }

      .box {
        display: flex;
        flex-wrap: wrap;
        gap: 1em;
        margin: 3% 1%;
        justify-content: center;
      }

      .box > div {
        width: 290px;
        height: 230px;
        background-color: whitesmoke;
        border-radius: 20px;
        outline-style: ridge;
        position: relative;
        flex-grow: 1;
        padding: 1rem;
      }

      .judul {
        display: flex;
        justify-content: center;
        margin-top: 1rem;
      }

       .back {
            position: absolute;
            display: flex;
            top: 130px;
            left: 36px;
            cursor: pointer;
        }

        .back img {
            width: 80px !important;
            height: auto;
        }

      .footer-content {
        width: 70%;
        margin: auto;
        color: white;
      }

      .footer-content h1 {
        font-size: 1em;
        text-align: left;
      }

      .footer-content p {
        text-align: justify;
      }

      .footer-logo {
        width: 60%;
      }

      .footer {
        background-color: #000;
        color: white;
        padding: 20px 50px;
      }
      .footer .footer .map {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 20px;
      }
      .info{
        /* align-items: center; */
        /* justify-content: center; */
        width: 100%;
        display: flex;
      }
      .footer .map iframe {
        /* width: 50%; */
        height: 200px;
        border: 0;
      }
      .info h3{
        font-weight: 700;
        margin-bottom: 20px
      }


      .navbar {
        background-color: #000;
        position: sticky;
        top: 0%;
        box-shadow:#000;
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
      .image-logo {
        background: url('/img/background.jpg');
        background-size: cover;
        height: 50vh;
        background-position: center;
        position: relative;
        width: 100%;
        align-items: end;
        border-radius: 100px;
        display: flex;
        justify-content: center;
        margin: 2em 0;
      }

      .content {
        margin: 3% 1%;
      }
      .info h3{
        font-weight: 700;
        margin-bottom: 20px
      }

      .card-box {
        background-color: whitesmoke;
        outline-style: ridge;
        border-radius: 20px;
        padding: 1em;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s;
        height: 100%;
      }

      .card-box:hover {
        transform: scale(1.05);
      }

      .judul {
        display: flex;
        justify-content: center;
      }

      .back {
            position: absolute;
            display: flex;
            top: 130px;
            left: 36px;
            cursor: pointer;
        }

        .back img {
            width: 80px !important;
            height: auto;
        }

      .footer {
        background-color: #000;
        color: white;
        padding: 20px 50px;
      }
      .footer .footer .map {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 20px;
      }
      .info{
        /* align-items: center; */
        /* justify-content: center; */
        width: 100%;
        display: flex;
      }
      .footer .map iframe {
        /* width: 50%; */
        height: 200px;
        border: 0;
      }

      .title h3{
        color:  white;
      }
    </style>
    <script>
      function goBack() {
        window.history.back();
      }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">

        <div class="container-fluid" style="padding: 0%;">
          <a class="navbar-brand" href="home.html">
            <img src="/Img/MMI2.jpg" alt="Logo" style="margin-left: 50px ">

          </a>
          <div class="title">
              <h3>Museum Musik Indonesia</h3>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
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
      <img src="/Img/tombol_back-removebg-preview.png" style="align-items: center; width: 30%;">
    </div>

    <div class="judul">
      <img src="/Img/Alat musik modern.png" style="align-items: center; width: 15%;">
    </div>
    <div class="ukuran">
      <h1 style="text-align: center; margin-top: 1%;">Alat Musik Modern</h1>
    </div>
{{--
    <div class="box">
      @foreach ($alatmusik_modern as $alatmusikmodern)
      <div>
        <h1>Nama Instrumen: {{$alatmusikmodern->nama_instrumen}}</h1>
        <h1>Quantity: {{$alatmusikmodern->quantity}}</h1>
      </div>
      @endforeach
    </div> --}}

    <div class="content row">
        @foreach ($alatmusik_modern as $alatmusikmodern)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card-box h-100">
                <h4>Nama Instrumen: {{$alatmusikmodern->nama_instrumen}}</h4>
                <p>Quantity: {{$alatmusikmodern->quantity}}</h1>
            </div>
        </div>
        @endforeach
    </div>


    <footer class="footer">
        <div class="info">
          <div class="address" style="flex: 1; padding-right: 20px;">
            <h3>Informasi</h3>
            <p>
               Gedung Penunjang Museum Mpu Purwa lantai 2<br>
               Jl.Soekarno Hatta Perum Griya Shanta Blok B No.210, Malang 65141<br>
               Contact | WA: 081 80 3230 472<br>
               Buka pukul: 09.00-16.00 WIB, Senin dan Hari Besar libur
            </p>
          </div>
          <div class="information" style="flex: 1; padding-right: 20px;">
              <h3>Media Sosial Kami</h3>
              <p>
                <img src="/Img/instagram.png" alt="Facebook" style="width: 20px; margin-right: 10px;">@museummusikindonesia<br>
                <img src="/Img/facebook.png" alt="Instagram" style="width: 20px; margin-right: 10px;">Museum MUSIK Indonesia<br>
                <img src="/Img/mail.png" alt="Email" style="width: 20px; margin-right: 10px;">museummusikindonesia@yahoo.co.id
              </p>
          </div>
          <div class="map" style="flex: 1;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.6213246926734!2d112.62251081485086!3d-7.966620994257203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788207c8c7f5d5%3A0x4027a76e3530d43e!2sMuseum%20Musik%20Indonesia!5e0!3m2!1sen!2sid!4v1602501212808!5m2!1sen!2sid" allowfullscreen="" loading="lazy" style="width: 100%; height: 200px; border: 0;"></iframe>
          </div>
        </div>
        <div class="text-center mt-3" style="margin-top: 50px">
          <p>&copy; 2024 Museum Musik Indonesia. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZO/NUNyXtH9reG2j70DXtCrOFEhz0eI9Wpr9WBUa5nr0Edsvkh0fH9vGZmnA+Elh" crossorigin="anonymous"></script>
  </body>
</html>
