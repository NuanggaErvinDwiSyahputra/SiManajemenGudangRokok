@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Barang')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Barang</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{route('barang-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-barang" class="form-label">ID Barang</label>
                <input type="text" class="form-control input" id="id-barang" name="id_barang" placeholder="Masukkan ID Barang">
            </div>
            <div class="mb-4">
                <label for="id-barangmasuk" class="form-label">ID Barang Masuk</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_barangmasuk">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($barangmasuk as $brm)
                        <option value="{{ $brm->Id_BarangMasuk }}">{{ $brm->Id_BarangMasuk }}</option>
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
                <label for="kode-barang" class="form-label">Kode Barang</label>
                <input type="text" class="form-control input" id="kode-barang" name="kode_barang" placeholder="Masukkan Kode Barang">
            </div>
            <div class="mb-4">
                <label for="namabarang" class="form-label">Nama Barang</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="nama_barang">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($pembelian as $pb)
                        <option value="{{ $pb->Nama_Barang }}">{{ $pb->Nama_Barang }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection