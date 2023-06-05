@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Pegawai')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Pegawai</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{  route('pegawai-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-pegawai" class="form-label">ID Pegawai</label>
                <input type="text" class="form-control input" id="id-pegawai" name="id_pegawai" placeholder="Masukkan ID Pegawai">
            </div>
            <div class="mb-4">
                <label for="nama-pegawai" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control input" id="nama-pegawai" name="nama_pegawai" placeholder="Masukkan Nama Pegawai">
            </div>
            <div class="mb-4">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control input" id="alamat" rows="5" name="alt" placeholder="Masukkan Alamat Pegawai"></textarea>
            </div>
            <div class="mb-4">
                <label for="no-telp" class="form-label">No.Telp</label>
                <input type="text" class="form-control input" id="no-telp" name="no_telp" placeholder="Masukkan No. Telp">
            </div>
            <div class="mb-4">
                <label for="kategori" class="form-label">Jenis Kelamin</label>
                <select class="form-control input" id="jenis-kelamin" name="jenis_kelamin">
                    <option value="" disabled selected id="defautlSelect">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection