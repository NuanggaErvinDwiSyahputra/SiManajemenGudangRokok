@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Barang Keluar')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Barang Keluar</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{route('barangkeluar-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-barangkeluar" class="form-label">ID Barang Keluar</label>
                <input type="text" class="form-control input" id="id-barangkeluar" name="id_barangkeluar" placeholder="Masukkan ID Barang Keluar">
            </div>
            <div class="mb-4">
                <label for="id-penjualan" class="form-label">ID Penjualan</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_penjualan">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($penjualan as $pj)
                        <option value="{{ $pj->Id_Penjualan }}">{{ $pj->Id_Penjualan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id-admin" class="form-label">ID Admin</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_admin">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($admin as $id)
                        <option value="{{ $id->Id_Admin }}">{{ $id->Id_Admin }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="tgl-barangkeluar" class="form-label">Tanggal Barang Keluar</label>
                <input type="date" class="form-control input" id="tgl-barangkeluar" name="tgl_barangkeluar" placeholder="Masukkan Tanggal Barang Keluar">
            </div>
            <div class="mb-4">
                <label for="jml-barangkeluar" class="form-label">Jumlah Barang Keluar</label>
                <input type="number" class="form-control input" id="jml-barangkeluar" name="jml_barangkeluar" placeholder="Masukkan Jumlah Barang Keluar">
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection