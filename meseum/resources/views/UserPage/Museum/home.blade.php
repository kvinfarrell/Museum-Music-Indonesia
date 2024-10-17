<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Museum Musik Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
      *{
        font-family: "Poppins";
      }
      body {
        /* margin: 0 50px; */
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
      .jumbotron {
        background-image: url('/Img/background.jpg');
        background-size: cover;
        color: white;
        height: 1000px;
      }
      .logo-section{
        display: flex;
        justify-content:space-between;
        align-items: center;
        margin-left: 50px;
        margin-right: 50px;

      }
      .logo-section img {
        width: 200px;
        height: 200px;
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

      .title{
        color: #ffff;
        font-weight: 900;
      }

      .info h3{
        font-weight: 700;
        margin-bottom: 20px
      }


      .menu h4{
        margin-top: 10px;
      }


    .koleksi {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
        margin-bottom: 50px;
        text-shadow: 1px 1px #000;
    }
    .strip{
        letter-spacing: -3px;
    }

    .land{
        display: flex;
        width: 100%;
        justify-content: space-between;
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 80px;
    }
    .img-land {
        align-self: center;
        flex: 1; /* Allows the image section to take up equal space as the paragraph */
        text-align: center;
    }

    .img-land img {
        max-width: 100%; /* Ensures the image doesn't exceed its container's width */
        height: auto;    /* Maintains the aspect ratio */
        width: 250px;    /* Adjust the width as needed */
    }

    .paragraph {
        flex: 2; /* Paragraph section takes up twice the space compared to the image */
        padding-left: 30px;
        text-align: justify;
        width: auto; /* Adjust width to fit naturally */
    }

    .card {
        padding: 30px;
        background-color: rgba(246, 246, 246, 0.7);
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, background-color 0.3s;
    }

    .card:hover {
        transform: translateY(-10px);
        background-color: rgba(246, 246, 246, 1);
    }

    .menu img,
    .menu h4 {
        opacity: 1;
    }

    .container-fluid{
        padding: none;
    }

    /* .nav-item a{
        font-size: 20px;
        margin-left: 8px;
        padding: 2px;
    } */

    .nav-item a:hover{
        color: lightblue;
    }
    .information{
        margin-left: 50px;
    }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid" style="padding: 0%;">
        <a class="navbar-brand" href="/home">
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
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <div class="land">
        {{-- <div class="img-land">
            <img src="/Img/background remove mmi.png" alt="">
        </div> --}}
        <div class="paragraph">
          <h1 style="font-size: 4em; text-align: left; font-weight:900;margin-bottom:20px; text-shadow: 2px 2px #000">SELAMAT DATANG</h1>
          <p style="text-align: justify; font-size:20px; font-weight:600;">
            Sejak tahun 2009, museum musik pertama di Indonesia telah menjadi penjaga setia sejarah musik Indonesia dan dunia, dengan tekad untuk mengumpulkan, mendokumentasikan, dan melestarikan warisan berharga yang telah terbentang selama bertahun-tahun. Museum ini telah menjadi tempat yang penting bagi para penggemar musik untuk belajar lebih dalam mengenai perjalanan musik Indonesia dan global. Dengan koleksi yang terus berkembang, museum ini terus berupaya untuk menyediakan wawasan yang lebih dalam tentang beragam genre musik dan para musisi yang telah memengaruhi budaya musik dunia.
          </p>
        </div>
      </div>
      <div class="koleksi">
        <h4 class="strip">---------------------------------------------------------------------</h4>
            <h1 style="font-weight: 700">&nbspKoleksi Kami&nbsp</h1>
        <h4 class="strip">---------------------------------------------------------------------</h4>
      </div>
      <div class="logo-section">
        <div class="card">
        <div class="menu">
            <a href="/PageMusik"><img src="/Img/logo musik1.png" alt="Musik"></a>
            <h4>Media Musik</h4>
        </div>
        </div>
        <div class="card">
        <div class="menu">
            <a href="/alatmusik/home"><img src="/Img/logo_alat_musik_1x1-removebg-preview.png" alt="Alat Musik"></a>
            <h4>Alat Musik</h4>
        </div>
        </div>
        <div class="card">
            <div class="menu">
                <a href="/user/artikel"><img src="/Img/majalah_1x1-removebg-preview.png" alt="Artikel"></a>
                <h4>Artikel</h4>
            </div>
        </div>
        <div class="card">
            <div class="menu">
                <a href="/user/memorabilia"><img src="/Img/memorabilia_1x1-removebg-preview (1).png" alt="Memorabilia"></a>
                <h4>Memorabilia</h4>
            </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
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
                <img src="Img/instagram.png" alt="Facebook" style="width: 20px; margin-right: 10px;">@museummusikindonesia<br>
                <img src="Img/facebook.png" alt="Instagram" style="width: 20px; margin-right: 10px;">Museum MUSIK Indonesia<br>
                <img src="Img/mail.png" alt="Email" style="width: 20px; margin-right: 10px;">museummusikindonesia@yahoo.co.id
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
