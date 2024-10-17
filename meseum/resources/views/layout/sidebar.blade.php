<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .nav-item .collapse.show + a .bi-caret-down {
            transform: rotate(180deg);
            transition: transform 0.3s ease;
        }

        .nav-item .bi-caret-down {
            transition: transform 0.3s ease;
        }

        .bg-dark-custom {
            background-color: #343a40;
        }
    </style>
</head>
<body>
    <div class="col-md-2 bg-dark-custom p-4 vh-100">
        <ul class="nav flex-column">
            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link active text-white" href="/dashboard">
                    <i class="bi bi-house-door"></i> Dashboard
                </a>
                <hr class="border border-light opacity-30">
            </li>

            <!-- Media Musik -->
            <li class="nav-item">
                <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#mediaMusik" role="button" aria-expanded="false" aria-controls="mediaMusik">
                    <span><i class="bi bi-music-note"></i> Media Musik</span>
                    <i class="bi bi-caret-down"></i>
                </a>
                <div class="collapse" id="mediaMusik">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/kaset">Kaset</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/cd">CD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/piringanhitam">Piringan Hitam</a>
                        </li>
                    </ul>
                </div>
                <hr class="border border-light opacity-30">
            </li>

            <!-- Alat Musik -->
            <li class="nav-item">
                <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#alatMusik" role="button" aria-expanded="false" aria-controls="alatMusik">
                    <span><i class="bi bi-file-music-fill"></i> Alat Musik</span>
                    <i class="bi bi-caret-down"></i>
                </a>
                <div class="collapse" id="alatMusik">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/instrumenmodern">Instrumen Modern</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/instrumentradisional">Instrumen Tradisional</a>
                        </li>
                    </ul>
                </div>
                <hr class="border border-light opacity-30">
            </li>

            <!-- Artikel -->
            <li class="nav-item">
                <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#artikel" role="button" aria-expanded="false" aria-controls="artikel">
                    <span><i class="bi bi-book"></i> Artikel</span>
                    <i class="bi bi-caret-down"></i>
                </a>
                <div class="collapse" id="artikel">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/buku">Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/majalah">Majalah</a>
                        </li>
                    </ul>
                </div>
                <hr class="border border-light opacity-30">
            </li>

            <!-- Memorabilia -->
            <li class="nav-item">
                <a class="nav-link text-white" href="/memorabilia">
                    <i class="bi bi-star"></i> Memorabilia
                </a>
                <hr class="border border-light opacity-30">
            </li>

            <!-- Komponen Audio -->
            <li class="nav-item">
                <a class="nav-link text-white" href="/komponen">
                    <i class="bi bi-speaker"></i> Komponen Audio
                </a>
                <hr class="border border-light opacity-30">
            </li>

        </ul>
    </div>


    <!-- Bootstrap JavaScript and Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
