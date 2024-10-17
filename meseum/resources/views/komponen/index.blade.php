@extends('main')
@section('container')
<style>
    .col-sm-8 h4 {
        padding: 1px;
        /* margin-left: 20px; */
        border-radius: 10px;
        /* background-color: #92ca93; */
        font-weight: 600;
        display: inline-block;
        align-items:center;
        justify-self:center ;
        justify-content:center ;
    }

    .alert-success {
        display: flex;
        align-items: center;
        /* justify-content: space-between; */
        /* padding: 10px; */
        margin-left: 20px;
        /* background-color: #d4edda; */
        color: #155724;
        border-radius: 5px;
    }

    .alert-success .alert-icon {
        margin-right: 3px;
        /* font-size: 20px; */
        padding: 1px 2px 1px 2px !important;
        
    }
    .alert {
        padding: 2px 3px 2px 3px !important;
    }
</style>
<div class="col-md-12 p-5 pt-2" style="padding-left: 25px; padding-right: 25px;">
    <h3 class="dashboard" style="margin-left: 1%; margin-top: 2%;">Komponen Audio</h3>
    <hr class="border border-dark border-1 opacity-30">
    <form action="{{ url('/komponen') }}" method="GET" class="mb-3">
<div class="input-group" style="width: 300px;">
    <input type="text" name="search" class="form-control" placeholder="Cari Nama Komponen" value="{{ request('search') }}">
    <button type="submit" class="btn btn-primary">Search</button>
</div>
</form>
    <div class="container-fluid">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row align-items-center">
                    <div class="col-sm-8" style="display:flex; align-items: center;">
                            <h2>Data Komponen Audio</h2>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    <span class="alert-icon">&#9989;</span>
                                    <h5>{{ session('success') }}</h5>
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-4 text-end">
                            <a href="/komponen/create">
                                <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped table-hover">
                    <thead >
                        <tr class="table-dark">
                            <th style="width: 5%;">No</th>
                            <th style="width: 18%;">Nama Komponen</th>
                            <th style="width: 25%;">Deskripsi</th>
                            <th style="width: 10%;">Kuantitas</th>
                            <th style="width: 8%;">Rak</th>
                            <th style="width: 10%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $number = 1;
                        @endphp
                        @foreach($komponens as $komponen)
                        <tr>
                            <td>{{ $number }}</td>
                            <td>{{ $komponen->nama_komponen }}</td>
                            <td>{{ $komponen->dekripsi }}</td>
                            <td>{{ $komponen->kuantitas }}</td>
                            <td>{{ $komponen->rak }}</td>
                            <td class="text-center">
                                <a href="/komponen/edit/{{$komponen->id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                                <form action="{{ route('komponen.destroy', $komponen->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete" title="Delete" style="border:none; background:none;">
                                        <i class="material-icons" style="color: red;">&#xE872;</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $number++;
                        @endphp
                        @endforeach
                    </tbody>
                   
                </table>
                <div class="d-flex justify-content-center">
        {{ $komponens->links() }}
    </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for adding new records -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('komponen.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id">No</label>
                        <input type="text" class="form-control" name="id" id="id">
                    </div>
                    <div class="form-group">
                        <label for="nama_komponen">Nama Komponen</label>
                        <input type="text" class="form-control" name="nama_komponen" id="nama_komponen">
                    </div>
                    <div class="form-group">
                        <label for="dekripsi">Deskripsi</label>
                        <input type="text" class="form-control" name="dekripsi" id="dekripsi">
                    </div>
                    <div class="form-group">
                        <label for="kuantitas">Kuantitas</label>
                        <input type="text" class="form-control" name="kuantitas" id="kuantitas">
                    </div>
                    <div class="form-group">
                        <label for="rak">Rak</label>
                        <input type="text" class="form-control" name="rak" id="rak">
                    </div>
                    <div class="form-group text-end mt-3">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
