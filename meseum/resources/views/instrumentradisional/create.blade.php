@extends('main')

@section('container')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="card shadow-lg border-light" style="border-radius: 20px;">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h2 class="mb-0">Add New Instrument</h2>
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

                    <form action="{{ route('instrumentradisional.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="nomor_regist">Nomor Registrasi:</label>
                            <input type="text" id="nomor_regist" name="nomor_regist" class="form-control" placeholder="Enter Nomor Registrasi">
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama_instrumen">Nama Instrumen:</label>
                            <input type="text" id="nama_instrumen" name="nama_instrumen" class="form-control" placeholder="Enter Nama Instrumen">
                        </div>

                        <div class="form-group mb-3">
                            <label for="daerah">Daerah:</label>
                            <input type="text" id="daerah" name="daerah" class="form-control" placeholder="Enter Daerah">
                        </div>

                        <div class="form-group mb-3">
                            <label for="penyumbang">Penyumbang:</label>
                            <input type="text" id="penyumbang" name="penyumbang" class="form-control" placeholder="Enter Penyumbang">
                        </div>

                        <div class="form-group mb-4">
                            <label for="quantity">Quantity:</label>
                            <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Enter Quantity">
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
