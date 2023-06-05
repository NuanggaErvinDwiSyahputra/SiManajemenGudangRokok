@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Kategori')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Kategori</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{  route('kategori-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-kategori" class="form-label">ID Kategori</label>
                <input type="text" class="form-control input" id="id-kategori" name="id_kategori" placeholder="Masukkan ID Kategori">
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
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-control input" id="kategori" name="kategori">
                    <option value="" disabled selected id="defautlSelect">Pilih Kategori</option>
                    <option value="Kretek Original">Kretek Original</option>
                    <option value="Kretek Flavour">Kretek Flavour</option>
                    <option value="Putihan">Putihan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection