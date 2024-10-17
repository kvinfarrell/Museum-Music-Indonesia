@extends('main')
@section('container')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;"> <!-- Centering content horizontally and vertically -->
    <div class="col-lg-8 col-md-10 col-sm-12"> <!-- Adjust column width as needed -->
        <div class="card shadow-sm" style="border-radius: 15px;">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center mb-0">Edit Komponen</h2>
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

                <form action="{{ route('komponen.update', $komponen->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="nama_komponen">Nama Komponen:</label>
                        <input type="text" id="nama_komponen" name="nama_komponen" class="form-control" placeholder="Nama Komponen" value="{{ $komponen->nama_komponen }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="dekripsi">Deskripsi:</label>
                        <input type="text" id="dekripsi" name="dekripsi" class="form-control" placeholder="Deskripsi" value="{{ $komponen->dekripsi }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="kuantitas">Kuantitas:</label>
                        <input type="text" id="kuantitas" name="kuantitas" class="form-control" placeholder="Kuantitas" value="{{ $komponen->kuantitas }}">
                    </div>

                    <div class="form-group mb-4">
                        <label for="rak">Rak:</label>
                        <input type="text" id="rak" name="rak" class="form-control" placeholder="Rak" value="{{ $komponen->rak }}">
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
