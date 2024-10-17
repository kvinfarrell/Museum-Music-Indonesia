<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .nav-link {
        font-size: 1rem;
      }

      .navbar-bottom {
        position: bottom;
        bottom: 0;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-black">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="home.html">
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

    .image-logo-1 {
        background: url('/img/background.jpg');
        background-size: cover;
        height: 50vh;
        background-position: center;
        position: relative;
        width: 500px;
        align-items: end;
        border-top-right-radius: 100px;
        border-bottom-right-radius: 100px;
        display: flex;
        justify-content: center;
    }

    .image-logo-3 {
        background: url('/Img/background.jpg');
        background-size: cover;
        height: 50vh;
        background-position: center;
        position: relative;
        width: 500px;
        align-items: end;
        border-top-left-radius: 100px;
        border-bottom-left-radius: 100px;
        display: flex;
        justify-content: center;
        margin-top: 100px;
    }


    .box{
      display: grid;
  grid-template-columns: repeat(4, 1fr);
        flex-wrap: wrap;
        align-content: flex-start;
        gap: 15em;
        margin-top: 3%;
        margin-left: 1%;
        margin-right: 1%;
        margin-bottom: 3%;

    }
    .box1 {
    width: 290px;
    height: 230px;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;
    flex-grow: 1;
    border-radius: 20px;
    }

    .box2 {
        width: 290px;
    height: 230px;
    flex-grow: 1;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;

    border-radius: 20px;
    }
    .box3 {
        width: 290px;
    height: 230px;
    flex-grow: 1;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;

    border-radius: 20px;
    }
    .box4 {
        width: 290px;
    height: 230px;
    flex-grow: 1;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;
    ;
    border-radius: 20px;
    }
    .box5 {
        width: 290px;
    height: 230px;
    flex-grow: 1;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;

    border-radius: 20px;
    }
    .box6 {
        width: 290px;
    height: 230px;
    flex-grow: 1;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;

    border-radius: 20px;
    }
    .box7 {
        width: 290px;
    height: 230px;
    flex-grow: 1;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;

    border-radius: 20px;
    }
    .box8 {
        width: 290px;
    height: 230px;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;
    flex-grow: 1;
    border-radius: 20px;
    }
    .box9 {
        width: 290px;
    height: 230px;
    flex-grow: 1;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;

    border-radius: 20px;
    }
    .box10 {
        width: 290px;
    height: 230px;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;
    flex-grow: 1;
    border-radius: 20px;
    }
    .box11 {
        width: 290px;
    height: 230px;
    flex-grow: 1;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;

    border-radius: 20px;
    }
    .box12 {
        width: 290px;
    height: 230px;
    flex-grow: 1;
    position: relative;
    background-color:whitesmoke;
    outline-style:ridge;

    border-radius: 20px;
    }
    .judul{

        position: center;
        justify-content: center;
        display: flex;

    }
   .ukuran{

   }


    </style>
<div class="judul">
    <img src="/Img/kaset_tape_1x1-removebg-preview.png" style="align-items: center; width: 15%;">

</div>
<div class="ukuran">
<h1 style="text-align: center;"> Kaset</h1>
</div>
   <div class="box">
 <div class="box1"></div>
 <div class="box2"></div>
 <div class="box3"></div>
 <div class="box4"></div>
 <div class="box5"></div>
 <div class="box6"></div>
 <div class="box7"></div>
 <div class="box8"></div>
 <div class="box9"></div>
 <div class="box10"></div>
 <div class="box11"></div>
 <div class="box12"></div>
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
