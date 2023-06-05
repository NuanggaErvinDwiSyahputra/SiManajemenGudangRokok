@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Barang Masuk')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Barang Masuk</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{  route('barangmasuk-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-barangmasuk" class="form-label">ID Barang Masuk</label>
                <input type="text" class="form-control input" id="id-barangmasuk" name="id_barangmasuk" placeholder="Masukkan ID Barang Masuk">
            </div>
            <div class="mb-4">
                <label for="id-pembelianbarang" class="form-label">ID Pembelian Barang</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_pembelian">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($pembelian as $pb)
                        <option value="{{ $pb->Id_Pembelian }}">{{ $pb->Id_Pembelian }}</option>
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
                <label for="tgl-barangmasuk" class="form-label">Tanggal Barang Masuk</label>
                <input type="date" class="form-control input" id="tgl-barangmasuk" name="tgl_barangmasuk" placeholder="Tanggal Barang Masuk">
            </div>
            <div class="mb-4">
                <label for="jml-barangmasuk" class="form-label">Jumlah Barang Masuk</label>
                <input type="number" class="form-control input" id="jml-barangmasuk" name="jml_barangmasuk" placeholder="Jumlah Barang Masuk">
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection