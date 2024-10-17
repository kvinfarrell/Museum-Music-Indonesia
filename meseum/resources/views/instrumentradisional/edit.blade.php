@extends('main')
@section('container')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;"> <!-- Centering content horizontally and vertically -->
    <div class="col-lg-8 col-md-10 col-sm-12"> <!-- Adjust column width as needed -->
        <div class="card shadow-sm" style="border-radius: 15px;">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center mb-0">Edit Instrument</h2>
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

                <form action="{{ route('instrumentradisional.update', $instrumentradisional->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="nomor_regist">Nomor Registrasi:</label>
                            <input type="text" id="nomor_regist" name="nomor_regist" class="form-control" placeholder="Nomor Registrasi" value="{{ $instrumentradisional->nomor_regist }}">
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="nama_instrumen">Nama Instrumen:</label>
                            <input type="text" id="nama_instrumen" name="nama_instrumen" class="form-control" placeholder="Nama Instrumen" value="{{ $instrumentradisional->nama_instrumen }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="daerah">Daerah:</label>
                            <input type="text" id="daerah" name="daerah" class="form-control" placeholder="Daerah" value="{{ $instrumentradisional->daerah }}">
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="penyumbang">Penyumbang:</label>
                            <input type="text" id="penyumbang" name="penyumbang" class="form-control" placeholder="Penyumbang" value="{{ $instrumentradisional->penyumbang }}">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="quantity">Quantity:</label>
                        <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Quantity" value="{{ $instrumentradisional->quantity }}">
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
