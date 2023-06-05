@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Data Admin')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Admin</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{ route('admin-entry')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="id-admin" class="form-label">ID Admin</label>
                <input type="text" class="form-control input" id="id-admin" name="id_admin" placeholder="Masukkan ID Admin" >
            </div>
            <div class="mb-4">
                <label for="id-pegawai" class="form-label">ID Pegawai</label>
                <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_pegawai">
                    <option class="" value="">- Silahkan Pilih -</option>
                    @foreach ($pegawai as $id)
                        <option value="{{ $id->Id_Pegawai }}">{{ $id->Id_Pegawai }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control input" id="email" name="eml" placeholder="Masukkan Email">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control input" id="password" name="password" placeholder="Masukkan Password">
            </div>
            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection