@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Pengiriman')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Pengiriman</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{  route('pengiriman-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-pengiriman" class="form-label">ID Pengiriman</label>
                <input type="text" class="form-control input" id="id-pengiriman" name="id_pengiriman" placeholder="Masukkan ID Pengiriman">
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
                <label for="id-barangkeluar" class="form-label">ID Barang Keluar</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_barangkeluar">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($barangkeluar as $bk)
                        <option value="{{ $bk->Id_BarangKeluar }}">{{ $bk->Id_BarangKeluar}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id-outlet" class="form-label">ID Outlet</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_olt">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($outlet as $ot)
                        <option value="{{ $ot->Id_Outlet }}">{{ $ot->Id_Outlet }}</option>
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
                <label for="tgl-pengiriman" class="form-label">Tanggal Pengiriman</label>
                <input type="date" class="form-control input" id="tgl-pengiriman" name="tanggal_pengiriman" placeholder="Masukkan Tanggal Pengiriman">
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection