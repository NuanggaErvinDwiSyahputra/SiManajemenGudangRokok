@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Barang Return Penjualan')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Barang Return Penjualan</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{  route('barangreturnpenjualan-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-barangreturnpenjualan" class="form-label">ID Barang Return Penjualan</label>
                <input type="text" class="form-control input" id="id-barangreturnpenjualan" name="id_barangreturnpenjualan" placeholder="Masukkan ID Barang Return Penjualan">
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
                <label for="id-barang" class="form-label">ID Barang</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_barang">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($barang as $br)
                        <option value="{{ $br->Id_Barang }}">{{ $br->Id_Barang }}</option>
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
                <label for="tgl-barangreturnpenjualan" class="form-label">Tanggal Barang Return Penjualan</label>
                <input type="date" class="form-control input" id="tgl-barangreturnpenjualan" name="tgl_barangreturnpenjualan" placeholder="Masukkan Tanggal Barang Return Penjualan">
            </div>
            <div class="mb-4">
                <label for="brgreturnpenjualan" class="form-label">Jumlah Barang Return Penjualan</label>
                <input type="number" class="form-control input" id="brgreturnpenjualan" name="brg_returnpenjualan" placeholder="Masukkan Jumlah Barang Return Penjualan">
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection