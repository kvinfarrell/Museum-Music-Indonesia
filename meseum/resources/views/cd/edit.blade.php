@extends('main')
@section('container')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;"> <!-- Centering content horizontally and vertically -->
    <div class="col-lg-8 col-md-10 col-sm-12"> <!-- Adjust column width as needed -->
        <div class="card shadow-sm" style="border-radius: 15px;">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center mb-0">Edit CD</h2>
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

                <form action="{{ route('cd.update', $cd->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="nomor_regist">Nomor Registrasi:</label>
                            <input type="text" id="nomor_regist" name="nomor_regist" class="form-control" placeholder="Nomor Registrasi" value="{{ $cd->nomor_regist }}">
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="penyumbang">Penyumbang:</label>
                            <input type="text" id="penyumbang" name="penyumbang" class="form-control" placeholder="Penyumbang" value="{{ $cd->penyumbang }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="tgl_masuk">Tanggal Masuk:</label>
                            <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" value="{{ $cd->tgl_masuk }}">
                        </div>

                        <!-- <div class="form-group col-md-6 mb-3">
                            <label for="cover">Cover:</label>
                            <input type="text" id="cover" name="cover" class="form-control" placeholder="Cover" value="{{ $cd->cover }}">
                        </div> -->
                    </div>

                    <div class="form-group mb-3">
                        <label for="judul">Judul:</label>
                        <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul" value="{{ $cd->judul }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="lagu">Nama Musisi:</label>
                        <input type="text" id="lagu" name="lagu" class="form-control" placeholder="Lagu" value="{{ $cd->lagu }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi:</label>
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" value="{{ $cd->deskripsi }}">
                    </div>

                    <div class="form-group mb-4">
                        <label for="rak">Rak:</label>
                        <input type="text" id="rak" name="rak" class="form-control" placeholder="Rak" value="{{ $cd->rak }}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
