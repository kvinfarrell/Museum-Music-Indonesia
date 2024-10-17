@extends('main')
@section('container')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;"> <!-- Centering content horizontally and vertically -->
    <div class="col-lg-8 col-md-10 col-sm-12"> <!-- Adjust column width as needed -->
        <div class="card shadow-sm" style="border-radius: 15px;">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center mb-0">Edit Memorabilia</h2>
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

                <form action="{{ route('memorabilia.update', $memorabilia->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row mb-3">
                        <div class="col-md-6">
                            <label for="nomor_regist">Nomor Regist:</label>
                            <input type="text" id="nomor_regist" name="nomor_regist" class="form-control" placeholder="Nomor Regist" value="{{ $memorabilia->nomor_regist }}">
                        </div>
                        <div class="col-md-6">
                            <label for="penyumbang">Penyumbang:</label>
                            <input type="text" id="penyumbang" name="penyumbang" class="form-control" placeholder="Penyumbang" value="{{ $memorabilia->penyumbang }}">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                    <div class="form-group col-md-6">
                            <label for="tgl_masuk">Tanggal Masuk:</label>
                            <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" value="{{ $memorabilia->tgl_masuk }}">
                        </div>
                        <div class="col-md-6">
                            <label for="Biografi">Biografi:</label>
                            <input type="text" id="Biografi" name="Biografi" class="form-control" placeholder="Biografi" value="{{ $memorabilia->Biografi }}">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                    <img src="{{ asset($memorabilia->foto) }}" class="img-thumbnail" style="width:200px" alt="Memorabilia Foto Sebelumnya"/>
                        <div class="col-md-6">
                            <label for="foto">Foto:</label>
                            <input type="file" id="foto" name="foto" class="form-control" placeholder="Foto" value="{{ $memorabilia->foto }}">
                        </div>
                        <div class="col-md-6">
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="{{ $memorabilia->nama }}">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="deskripsi">Deskripsi:</label>
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" value="{{ $memorabilia->deskripsi }}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
