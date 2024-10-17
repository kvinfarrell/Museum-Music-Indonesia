<!doctype html>
<html lang="en">
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaset Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .navbar {
        background-color: #000;
        position: sticky;
        top: 0;
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

      .info h3 {
        font-weight: 700;
        margin-bottom: 20px;
      }

      .card-box {
        background-color: whitesmoke;
        outline-style: ridge;
        border-radius: 20px;
        padding: 1em;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      .card-box:hover {
        transform: scale(1.05);
      }

      .card-box img {
        width: 100%;
        height: 250px; /* Atur tinggi gambar menjadi sama */
        object-fit: cover; /* Agar gambar menyesuaikan tanpa terdistorsi */
        border-radius: 10px;
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

      .footer .map {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 20px;
      }

      .info {
        width: 100%;
        display: flex;
      }

      .footer .map iframe {
        height: 200px;
        border: 0;
      }

      .title h3 {
        color: white;
      }

      .card-content {
        padding: 10px;
      }

      .card-content h3 {
        font-size: 1.2rem;
        margin-top: 10px;
      }

      .card-content p {
        font-size: 0.9rem;
        margin: 5px 0;
      }
    </style>
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
      <img src="/Img/kaset_tape_1x1-removebg-preview.png" style="align-items: center; width: 15%;">
    </div>
    <div class="ukuran">
      <h1 style="text-align: center; margin-top: -2%;">Memorabilia</h1>
    </div>
    <div class="content row">
      @foreach ($memorabilia as $memorabilias)
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card-box h-100">
          <img src="{{asset($memorabilias->foto)}}" alt="Foto memorabilia">
          <div class="card-content">
            <!-- <h3>Biografi: {{$memorabilias->Biografi}}</h3> -->
           <b> <p style="font-size:20px;">Nama: {{$memorabilias->nama}}</p></b>
            <p>Deskripsi: {{$memorabilias->deskripsi}}</p>
          </div>
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
            <img src="/Img/instagram.png" alt="Instagram" style="width: 20px; margin-right: 10px;">@museummusikindonesia<br>
            <img src="/Img/facebook.png" alt="Facebook" style="width: 20px; margin-right: 10px;">Museum MUSIK Indonesia<br>
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
