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

                    <form action="{{ route('memorabilia.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomor_regist">Nomor Regist:</label>
                                    <input type="text" id="nomor_regist" name="nomor_regist" class="form-control" placeholder="Nomor Regist">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="penyumbang">Penyumbang:</label>
                                    <input type="text" id="penyumbang" name="penyumbang" class="form-control" placeholder="Penyumbang">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                            <div class="form-group mb-3">
                            <label for="tgl_masuk">Tanggal Masuk:</label>
                            <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control">
                        </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="foto" class="form-label">Foto:</label>
                                    <input type="file" class="form-control" name="foto"  id="foto">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="biografi">Biografi:</label>
                            <input type="text" id="Biografi" name="Biografi" class="form-control" placeholder="Biografi">
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                        </div>

                        <div class="form-group mb-4">
                            <label for="deskripsi">Deskripsi:</label>
                            <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi">
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
