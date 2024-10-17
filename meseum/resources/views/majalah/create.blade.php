@extends('main')

@section('container')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; width: 100%;">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="card shadow-lg border-light" style="border-radius: 20px;">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h2 class="mb-0">Add New</h2>
                </div>
                <div class="card-body p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('majalah.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="issn">ISSN:</label>
                            <input type="text" id="issn" name="issn" class="form-control" placeholder=" ISSN">
                        </div>

                        <div class="form-group mb-3">
                            <label for="tgl_masuk">Tanggal Masuk:</label>
                            <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="judul">Judul:</label>
                            <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul">
                        </div>

                        <div class="form-group mb-3">
                            <label for="isi_majalah">Penerbit:</label>
                            <input type="text" id="isi_majalah" name="isi_majalah" class="form-control" placeholder="Penerbit">
                        </div>

                        <div class="form-group mb-3">
                            <label for="deskripsi">Deskripsi:</label>
                            <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi">
                        </div>

                        <div class="form-group mb-4">
                            <label for="rak">Rak:</label>
                            <input type="text" id="rak" name="rak" class="form-control" placeholder="Rak">
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
