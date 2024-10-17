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

                    <form action="{{ route('komponen.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="nama_komponen">Nama Komponen:</label>
                            <input type="text" id="nama_komponen" name="nama_komponen" class="form-control" placeholder="Enter Nama Komponen">
                        </div>

                        <div class="form-group mb-3">
                            <label for="dekripsi">Deskripsi:</label>
                            <input type="text" id="dekripsi" name="dekripsi" class="form-control" placeholder="Enter Deskripsi">
                        </div>

                        <div class="form-group mb-3">
                            <label for="kuantitas">Kuantitas:</label>
                            <input type="text" id="kuantitas" name="kuantitas" class="form-control" placeholder="Enter Kuantitas">
                        </div>

                        <div class="form-group mb-4">
                            <label for="rak">Rak:</label>
                            <input type="text" id="rak" name="rak" class="form-control" placeholder="Enter Rak">
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
