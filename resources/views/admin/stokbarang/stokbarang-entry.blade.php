@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Stok Barang')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Stok Barang</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{  route('stokbarang-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-stokbarang" class="form-label">ID Stok Barang</label>
                <input type="text" class="form-control input" id="id-stokbarang" name="id_stokbarang" placeholder="Masukkan ID Stok Barang">
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
                <label for="id-kategori" class="form-label">ID Kategori</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_kategori">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($kategori as $kg)
                        <option value="{{ $kg->Id_Kategori }}">{{ $kg->Id_Kategori }}</option>
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
                <label for="stokbarang" class="form-label">Stok Barang</label>
                <input type="number" class="form-control input" id="stokbarang" name="stok_barang" placeholder="Masukkan Stok Barang">
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection