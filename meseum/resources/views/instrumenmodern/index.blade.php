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
<div class="container-fluid p-5 pt-2">
    <h3 class="dashboard" style="margin-left: 1%; margin-top: 2%;">Instrumen Modern</h3>
    <hr class="border border-dark border-1 opacity-30">
    <form action="{{ url('/instrumenmodern') }}" method="GET" class="mb-3">
<div class="input-group" style="width: 300px;">
    <input type="text" name="search" class="form-control" placeholder="Cari Nomor Regist, Instrumen " value="{{ request('search') }}">
    <button type="submit" class="btn btn-primary">Search</button>
</div>
</form>
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row align-items-center">
                <div class="col-sm-8" style="display:flex; align-items: center;">
                        <h2>Data Instrumen Modern</h2>
                        @if(session('success'))
                                <div class="alert alert-success">
                                    <span class="alert-icon">&#9989;</span>
                                    <h5>{{ session('success') }}</h5>
                                </div>
                            @endif
                    </div>
                    <div class="col-sm-4 text-end">
                        <a href="/instrumenmodern/create">
                            <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-hover w-100">
                <thead>
                    <tr class="table-dark">
                        <th style="width: 5%;">No</th>
                        <th style="width: 15%;">Nomor Regist</th>
                        <th style="width: 25%;">Nama Instrumen</th>
                        <th style="width: 20%;">Penyumbang</th>
                        <th style="width: 15%;">Quantity</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $number = 1;
                    @endphp
                    @foreach($instrumenmoderns as $instrumenmodern)
                    <tr>
                        <td>{{ $number }}</td>
                        <td>{{ $instrumenmodern->nomor_regist }}</td>
                        <td>{{ $instrumenmodern->nama_instrumen }}</td>
                        <td>{{ $instrumenmodern->penyumbang }}</td>
                        <td>{{ $instrumenmodern->quantity }}</td>
                        <td class="text-center">
                            <a href="/instrumenmodern/edit/{{$instrumenmodern->id}}" class="edit" title="Edit" data-toggle="tooltip">
                                <i class="material-icons">&#xE254;</i>
                            </a>
                            <form action="{{ route('instrumenmodern.destroy', $instrumenmodern->id) }}" method="POST" style="display:inline;">
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
        {{ $instrumenmoderns->links() }}
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
                <form>
                    <div class="form-group">
                        <label for="id">No</label>
                        <input type="text" class="form-control" name="id" id="id">
                    </div>
                    <div class="form-group">
                        <label for="nomor_regist">Nomor Regist</label>
                        <input type="text" class="form-control" name="nomor_regist" id="nomor_regist">
                    </div>
                    <div class="form-group">
                        <label for="penyumbang">Penyumbang</label>
                        <input type="text" class="form-control" name="penyumbang" id="penyumbang">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="text" class="form-control" name="tanggal_masuk" id="tanggal_masuk">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" class="form-control" name="quantity" id="quantity">
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
