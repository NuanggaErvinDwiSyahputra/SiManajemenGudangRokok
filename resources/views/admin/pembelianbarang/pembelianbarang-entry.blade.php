@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Pembelian Barang')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Pembelian Barang</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{  route('pembelianbarang-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-pembelian" class="form-label">ID Pembelian </label>
                <input type="text" class="form-control input" id="id-pembelian" name="id_pembelian" placeholder="Masukkan ID Pembelian">
            </div>
            <div class="mb-4">
                <label for="id-supplier" class="form-label">ID Supplier</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_supllier">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($supplier as $sp)
                        <option value="{{ $sp->Id_Supplier }}">{{ $sp->Id_Supplier }}</option>
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
                <label for="nama-barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control input" id="nama-barang" name="nama_barang" placeholder="Masukkan Nama Barang">
            </div>
            <div class="mb-4">
                <label for="jumlah-pembelian" class="form-label">Jumlah Pembelian</label>
                <input type="number" class="form-control input" id="jumlah-pembelian" name="jumlah_pembelian" placeholder="Masukkan Jumlah Pembelian">
            </div>
            <div class="mb-4">
                <label for="tanggal-pembelian" class="form-label">Tanggal Pembelian</label>
                <input type="date" class="form-control input" id="tanggal-pembelian" name="tanggal_pembelian" placeholder="Masukkan Tanggal Pembelian">
            </div>
             <div class="mb-4">
                <label for="harga-pembelian" class="form-label">Harga Pembelian</label>
                <input type="text" class="form-control input" id="harga-pembelian" name="harga_pembelian" placeholder="Masukkan Harga Pembelian">
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection