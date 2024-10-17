@extends('main')
@section('container')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;"> <!-- Centering content horizontally and vertically -->
    <div class="col-lg-8 col-md-10 col-sm-12"> <!-- Adjust column width as needed -->
        <div class="card shadow-sm" style="border-radius: 15px;">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center mb-0">Edit Book</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="isbn">ISBN:</label>
                            <input type="text" id="isbn" name="isbn" class="form-control" placeholder="ISBN" value="{{ $buku->isbn }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tgl_masuk">Tanggal Masuk:</label>
                            <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" value="{{ $buku->tgl_masuk }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul:</label>
                        <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul" value="{{ $buku->judul }}">
                    </div>

                    <div class="form-group">
                        <label for="isi_buku">Penulis:</label>
                        <textarea id="isi_buku" name="isi_buku" class="form-control" placeholder="Isi Buku" rows="3">{{ $buku->isi_buku }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" rows="3">{{ $buku->deskripsi }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="rak">Rak:</label>
                        <input type="text" id="rak" name="rak" class="form-control" placeholder="Rak" value="{{ $buku->rak }}">
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
