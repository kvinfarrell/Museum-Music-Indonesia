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
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .nav-link {
        font-size: 1rem;
      }
      .jumbotron {
        background-size: cover;
        color: white;
        border-radius: 10%;
        height: 70%;
        width: auto;
        filter: blur(10px);
      }
      .navbar-bottom {
        position: bottom;
        bottom: 0;
        width: 100%;
      }
      .info h3{
        font-weight: 700;
        margin-bottom: 20px
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-black">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="/Museum/home.html">
          <img src="/Img/MMI2.jpg" alt="Logo" href="home.html" role="button" width="70" height="70" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white me-3" aria-current="page" href="#">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white me-3" href="#">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <style>
    .drum {
        width: 50%;
        height: auto;
    }
    .drumtwo {
        width: 35%;
        height: auto;
        margin-left: -40%;
        justify-content: center;
    }
    .drumtri {
        width: 45%;
        height: auto;
    }
    .image-logo-1 {
        background: url('/img/background.jpg');
        background-size: cover;
        height: 50vh;
        background-position: center;
        position: relative;
        width: 50%;
        align-items: end;
        border-top-right-radius: 100px;
        border-bottom-right-radius: 100px;
        display: flex;
        justify-content: center;
        padding-left: 15%;
    }
    .container-image-logo {
        display: flex;
        margin-top: 100px;
        gap: 100px;
    }
    .content {
        margin-top: 50px;
    }
    .not {
        width: auto;
        height: 25%;
        bottom: 2px;
    }
    .logo2 {
        margin-top: -6%;
        width:10%;
        margin-left: 3%;
    }
    .image-logo-3 {
        background: url('/Img/background.jpg');
        background-size: cover;
        height: 50vh;
        background-position: center;
        position: relative;
        width: 50%;
        align-items: end;
        border-top-left-radius: 100px;
        border-bottom-left-radius: 100px;
        display: flex;
        justify-content: center;
        margin-top: 5%;
        margin-left: -20%;
    }.image-logo-4 {
        height: 50vh;
        position: relative;
        width: 50%;
        align-items: end;
        border-top-right-radius: 100px;
        border-bottom-right-radius: 100px;
        display: flex;
        justify-content: center;
    }


    .back{
        position:absolute;
        margin-top: 2%;
        cursor: pointer;
        z-index: 100;
    }

    </style>
    <div class = "back" onclick="goBack()">
        <img src="/Img/tombol_back-removebg-preview.png" style="align-items: center; width: 30%;">
    </div>

    <div class="container-image-logo">
        <div class="image-logo-1">
          <div class="content">
           <a href="/Memorabilia/Piala.html"><img src="/Img/piala_1x1-removebg-preview.png" style="margin-left: 35%;" alt="" class="drum"></a>
            <h4 style="margin-bottom: 5%; margin-left: 50%;">Piala</h4>
          </div>
        </div>
        <div class="logo2">
             <img src="/Img/memorabilia_1x1-removebg-preview (1).png" style="margin-left: 50%; margin-top: 6%;" alt="" class="not">
             <h4 style="margin-left: 55%; text-align: center;">Memorabilia</h4>
        </div>
       <div class="image-logo-4">
        <div class="content">
            <a href="/Memorabilia/suvenir.html"><img src="/Img/suvenir_1x1-removebg-preview.png " class="drumtwo"></a>
          <h4 style="margin-left: -34%;">Souvenir</h4>
        </div>
      </div>
        <div class="image-logo-3">
          <div class="content">
            <a href="/Memorabilia/foto.html"> <img src="/Img/foto_1x1-removebg-preview.png" class="drumtri"></a>
            <img src="{{ asset($memorabilia->foto) }}" class="img-thumbnail" style="width:200px" alt="tes" />
          </div>
        </div>
      </div>

    <nav class="navbar navbar-expand-lg bg-black mt-4 navbar-bottom">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">
          <img src="/Img/skrinsyot leflok.png" alt="Logo" style="width: 60%;" class="d-inline-block align-text-bottom">
        </a>
        <div class="paragraph" style="width: 70%; margin: auto; padding-right: 5%;">
          <h1 style="font-size: 1em; text-align: left; color: white;">Museum Musik Indonesia</h1>
          <p style="text-align: justify; color: white;">
            Gedung Penunjang Museum Mpu Purwa lantai 2</br>
            Jl.Soekarno Hatta Perum Griya Shanta Blok B No.210 Kelurahan Mojolangu, Kecamatan Lowokwaru Kota Malang 65141</br>
            WA : 081 80 3230 472</br>
            Buka pukul : 09.00-16.00 wib, Senin dan Hari Besar libur</br>
            Email : museummusikindonesia@yahoo.co.id</br>
          </p>
        </div>
        <a class="navbar-brand text-white" href="#" style="padding-right: 10px;">
          <img src="/Img/MMI2.jpg" alt="Logo" style="width: 20%; margin-left: 70%;">
        </a>
      </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZO/NUNyXtH9reG2j70DXtCrOFEhz0eI9Wpr9WBUa5nr0Edsvkh0fH9vGZmnA+Elh" crossorigin="anonymous"></script>
  </body>
</html>
