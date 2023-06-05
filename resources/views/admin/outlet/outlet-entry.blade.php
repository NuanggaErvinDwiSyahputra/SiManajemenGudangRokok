@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Outlet')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Outlet</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{  route('outlet-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-outlet" class="form-label">ID Outlet</label>
                <input type="text" class="form-control input" id="id-outlet" name="id_outlet" placeholder="Masukkan ID Outlet">
            </div>
            <div class="mb-4">
                <label for="nama-outlet" class="form-label">Nama Outlet </label>
                <input type="text" class="form-control input" id="nama-outlet" name="nama_outlet" placeholder="Masukkan Nama Outlet">
            </div>
            <div class="mb-4">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control input" id="alamat" rows="5" name="alt" placeholder="Masukkan Alamat"></textarea>
            </div>
            <div class="mb-4">
                <label for="no-telp" class="form-label">No.Telp</label>
                <input type="text" class="form-control input" id="no-telp" name="no_telp" placeholder="Masukkan NO.Telp">
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection