@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Supplier')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Supplier</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{  route('supplier-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-supplier" class="form-label">ID Supplier</label>
                <input type="text" class="form-control input" id="id-supplier" name="id_supplier" placeholder="Masukkan ID Supplier">
            </div>
            <div class="mb-4">
                <label for="nama-supplier" class="form-label">Nama Supplier</label>
                <input type="text" class="form-control input" id="nama-supplier" name="nama_supplier" placeholder="Masukkan Nama Supplier">
            </div>
            <div class="mb-4">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control input" id="alamat" rows="5" name="alt" placeholder="Masukkan Alamat Supplier"></textarea>
            </div>
            <div class="mb-4">
                <label for="no-telp" class="form-label">No.Telp</label>
                <input type="text" class="form-control input" id="no-telp" name="no_telp" placeholder="Masukkan No.Telp Supplier">
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection