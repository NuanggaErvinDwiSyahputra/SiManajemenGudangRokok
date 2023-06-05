@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Barang Return Pembelian')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Barang Return Pembelian</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{  route('barangreturnpembelian-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-barangreturnpembelian" class="form-label">ID Barang Return Pembelian</label>
                <input type="text" class="form-control input" id="id-barangreturnpembelian" name="id_barangreturnpembelian" placeholder="Masukkan ID Barang Return Pembelian">
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
                <label for="tgl-returnpembelian" class="form-label">Tanggal Return Pembelian</label>
                <input type="date" class="form-control input" id="tgl-returnpembelian" name="tgl_returnpembelian" placeholder="Masukkan Tanggal Return Pembelian">
            </div>
            <div class="mb-4">
                <label for="jml-returnpembelian" class="form-label">Jumlah Barang Return Pembelian</label>
                <input type="number" class="form-control input" id="jml-returnpembelian" name="jml_returnpembelian" placeholder="Masukkan Barang Return Pembelian">
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection