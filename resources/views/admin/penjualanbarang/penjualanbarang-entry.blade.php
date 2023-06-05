@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Penjualan Barang')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Penjualan Barang</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{  route('penjualanbarang-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-penjualan" class="form-label">ID Penjualan</label>
                <input type="text" class="form-control input" id="id-penjualan" name="id_penjualan" placeholder="Masukkan ID Penjualan">
            </div>
            <div class="mb-4">
                <label for="id-outlet" class="form-label">ID Outlet</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_outlet">
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
                <label for="id-barang" class="form-label">ID Barang</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_barang">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($barang as $br)
                        <option value="{{ $br->Id_Barang }}">{{ $br->Id_Barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="jml-penjualan" class="form-label">Jumlah Penjualan</label>
                <input type="number" class="form-control input" id="jml-penjualan" name="jml_penjualan" placeholder="Masukkan Jumlah Penjualan">
            </div>
            <div class="mb-4">
                <label for="tgl-penjualan" class="form-label">Tanggal Penjualan</label>
                <input type="date" class="form-control input" id="tgl-penjualan" name="tgl_penjualan" placeholder="Masukkan Tanggal Penjualan">
            </div>
            <div class="mb-4">
                <label for="hrg-penjualan" class="form-label">Harga Penjualan</label>
                <input type="text" class="form-control input" id="hrg-penjualan" name="hrg_penjualan" placeholder="Masukkan Harga Penjualan">
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection