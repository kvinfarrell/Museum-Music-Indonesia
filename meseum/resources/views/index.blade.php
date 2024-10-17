@extends('main')
@section('container')


    <style>

        /* Container Padding */
        .row a{
            text-decoration: none;
        }

        .p-5 {
            padding: 20px !important;
        }

        /* Dashboard Title */
        h3.dashboard {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Dashboard Cards */
        .dashboard-card {
            min-height: 80px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        /* Alat Musik - Main and Subcategories */
        .bg-warning {
            background-color: #ffc107 !important; /* Main Category */
        }
        .bg-warning-sub {
            background-color: #ffdd57 !important; /* Subcategory */
        }

        /* Artikel - Main and Subcategories */
        .bg-secondary {
            background-color: #6c757d !important; /* Main Category */
        }
        .bg-secondary-sub {
            background-color: #a3a9b2 !important; /* Subcategory */
        }

        /* Media Musik - Main and Subcategories */
        .bg-primary {
            background-color: #0d6efd !important; /* Main Category */
        }
        .bg-primary-sub {
            background-color: #5aa9fa !important; /* Subcategory */
        }

        /* Memorabilia */
        .bg-info {
            background-color: #0dcaf0 !important;
        }
        .bg-info-sub {
            background-color: #64e5ed !important;
        }

        /* Komponen Audio */
        .bg-dark {
            background-color: #343a40 !important;
        }
        .bg-dark-sub {
            background-color: #5a5f63 !important;
        }

        /* Adjustments for Text and Icons */
        .dashboard-card h6 {
            font-size: 16px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .dashboard-card h6 i {
            margin-right: 8px;
            font-size: 1.2rem;
        }

        /* Display Numbers */
        .dashboard-card .display-6 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .dashboard-card {
                padding: 10px;
            }

            .dashboard-card .display-6 {
                font-size: 1.5rem;
            }

            h3.dashboard {
                font-size: 20px;
            }
        }

        /* Card Styling */
        .card {
            /* border: none; */
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-header {
            background-color: white;
            border-bottom: none;
            /* border-radius: 10px !important; */
        }

        .card-body {
            padding: 0;
        }

        .alat-musik{
            background-color: #FFAF00;
        }

        .artikel{
            background-color: #229799;
        }

        .artikel-1{
            background-color: #48CFCB;
        }

        .media-musik1{
            background-color: #FF8225;
        }

        .media-musik{
            background-color: #B43F3F;
        }

        .other{
            background-color: #173B45;
        }

        .card h5{
            color: white;
            font-weight: bold;
        }
    </style>

    <div class="container-fluid p-5">
        <div class="row">
            <!-- Left Column (9/12 width) -->
            <div class="col-md-9">
                {{-- Section Alat Musik --}}
                <div class="card alat-musik">
                    <div class="card-header alat-musik">
                        <h5>Alat Musik</h5>
                    </div>
                    <div class="row m-0">
                        <!-- Alat Musik Modern -->
                        <div class="col-md-6 col-sm-12 mb-4">
                            <div class="dashboard-card bg-warning text-white">
                                <div>
                                    <h6 class="card-title"><i class="bi bi-music-note"></i>Instrument Modern</h6>
                                    <div class="display-6">{{$alatMusikmodern}}</div>
                                </div>
                                <a href="/instrumenmodern">
                                    <p class="card-text">Selengkapnya &raquo;</p>
                                </a>
                            </div>
                        </div>
                        <!-- Alat Musik Tradisional -->
                        <div class="col-md-6 col-sm-12 mb-4">
                            <div class="dashboard-card bg-warning text-white">
                                <div>
                                    <h6 class="card-title"><i class="bi bi-cassette-fill"></i>Instrument Tradisional</h6>
                                    <div class="display-6">{{$alatMusiktradisional}}</div>
                                </div>
                                <a href="instrumentradisional">
                                    <p class="card-text">Selengkapnya &raquo;</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Section Artikel --}}
                <div class="card artikel">
                    <div class="card-header artikel">
                        <h5>Artikel</h5>
                    </div>
                    <div class="row m-0">
                        <!-- Buku -->
                        <div class="col-md-6 col-sm-12 mb-4">
                            <div class="dashboard-card text-white artikel-1">
                                <div>
                                    <h6 class="card-title"><i class="bi bi-book-fill"></i>Buku</h6>
                                    <div class="display-6">{{$buku}}</div>
                                </div>
                                <a href="/buku">
                                    <p class="card-text">Selengkapnya &raquo;</p>
                                </a>
                            </div>
                        </div>
                        <!-- Majalah -->
                        <div class="col-md-6 col-sm-12 mb-4">
                            <div class="dashboard-card artikel-1 text-white">
                                <div>
                                    <h6 class="card-title"><i class="bi bi-book-half"></i></i>Majalah</h6>
                                    <div class="display-6">{{$majalah}}</div>
                                </div>
                                <a href="/majalah">
                                    <p class="card-text">Selengkapnya &raquo;</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column (3/12 width) -->
            <div class="col-md-3">
                {{-- Memorabilia Card --}}
                <div class="dashboard-card other text-white mb-4 dashboard">
                    <div>
                        <div class="display-6">Dashboard</div>
                        <h6 class="card-title"><i class="fa fa-calendar" aria-hidden="true"></i>{{ \Carbon\Carbon::now()->format('d F Y') }}</h6>
                    </div>
                </div>

                {{-- Memorabilia Card --}}
                <div class="dashboard-card other text-white mb-4">
                    <div>
                        <h6 class="card-title"><i class="bi bi-award-fill"></i>Memorabilia</h6>
                        <div class="display-6">{{$memorabilia}}</div>
                    </div>
                    
                    <a href="/memorabilia">
                        <p class="card-text">Selengkapnya &raquo;</p>
                    </a>
                </div>

                {{-- Komponen Audio Card --}}
                <div class="dashboard-card other text-white mb-4">
                    <div>
                        <h6 class="card-title"><i class="bi bi-speaker-fill"></i>Komponen Audio</h6>
                        <div class="display-6">{{$komponen}}</div>
                    </div>
                    <a href="/komponen">
                        <p class="card-text">Selengkapnya &raquo;</p>
                    </a>
                </div>
            </div>

            <!-- Full Width Column -->
            <div class="col-md-12">
                {{-- Section Media Musik --}}
                <div class="card media-musik">
                    <div class="card-header media-musik">
                        <h5>Media Musik</h5>
                    </div>
                    <div class="row m-0">
                        <!-- Kaset -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="dashboard-card text-white media-musik1">
                                <div>
                                    <h6 class="card-title"><i class="bi bi-cassette-fill"></i>Kaset</h6>
                                    <div class="display-6">{{$kaset}}</div>
                                </div>
                                <a href="/kaset">
                                    <p class="card-text">Selengkapnya &raquo;</p>
                                </a>
                            </div>
                        </div>
                        <!-- CD -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="dashboard-card media-musik1 text-white">
                                <div>
                                    <h6 class="card-title"><i class="bi bi-disc-fill"></i>CD</h6>
                                    <div class="display-6">{{$cd}}</div>
                                </div>
                                <a href="/cd">
                                    <p class="card-text">Selengkapnya &raquo;</p>
                                </a>
                            </div>
                        </div>
                        <!-- Piringan Hitam -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="dashboard-card media-musik1 text-white">
                                <div>
                                    <h6 class="card-title"><i class="bi bi-vinyl-fill"></i>Piringan Hitam</h6>
                                    <div class="display-6">{{$piringanHitam}}</div>
                                </div>
                                <a href="/piringanhitam">
                                    <p class="card-text">Selengkapnya &raquo;</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
