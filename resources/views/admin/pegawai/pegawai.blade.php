@extends('layout.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
@endsection

@section('title','GudangRokok | Data Pegawai')

@section('content')
{{-- Section Table --}}
<div class="d-flex align-items-center">
    <button class="btn-add mb-4 border-0 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2"
        onclick="location.href='{{route('pegawai-entry')}}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M12 21c-1.654 0-3-1.346-3-3l.053-3.053L6.018 15C4.346 15 3 13.654 3 12s1.346-3 3-3l3.053-.054L9 6.018C9 4.346 10.346 3 12 3s3 1.346 3 3l.055 2.946L18.018 9C19.654 9 21 10.346 21 12s-1.346 3-3 3l-2.945-.053L15 18.018C15 19.654 13.654 21 12 21zm-1-8v5.018c0 .533.449.982 1 .982s1-.449 1-1v-5h5.018c.533 0 .982-.449.982-1s-.449-1-1-1h-5V6c0-.569-.449-1-1-1s-1 .449-1 1v5H6c-.569 0-1 .449-1 1s.449 1 1 1h5z"/></svg>
            <path fill="black" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z" />
            </svg>
        Add Data
    </button>
    <button class="btn-add mb-4 border-0 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2 ms-2"
        onclick="location.href='{{route('pdfpegawai')}}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M15 20h2v4h-2zm5-2h2v6h-2zm-10-4h2v10h-2z"/><path fill="currentColor" d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2ZM12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z"/></svg>
            <path fill="black" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z" />
            </svg>
        Generate Report
    </button>
</div>

<table class="table table-bordered text-center">
    <thead class="table-light">
        <tr>
            <th>ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            <th>Jenis Kelamin</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pegawai as $pw)
        <tr>
            <td>{{$pw->Id_Pegawai}}</td>
            <td>{{$pw->Nama_Pegawai}}</td>
            <td>{{$pw->Alamat}}</td>
            <td>{{$pw->No_Telp}}</td>
            <td>{{$pw->Jenis_Kelamin}}</td>
            <td>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#target{{ $pw->Id_Pegawai }}">Edit</button>
                <button type="button" onclick="window.location='{{ route('pegawai-destroy', $pw->Id_Pegawai) }}'" class="btn btn-dark">Delete</button>
            </td>
        </tr>
        {{-- Modal Edit --}}
        <div class="modal fade" id="target{{ $pw->Id_Pegawai }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit Data Pegawai</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pegawai-update', ['id' => $pw->Id_Pegawai]) }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="id-pegawai" class="form-label">ID Pegawai</label>
                            <input type="text" class="form-control input" id="id-pegawai" name="id_pegawai" placeholder="Masukkan ID Pegawai" value="{{$pw->Id_Pegawai}}">
                        </div>
                        <div class="mb-4">
                            <label for="nama-pegawai" class="form-label">Nama Pegawai</label>
                            <input type="text" class="form-control input" id="nama-pegawai" name="nama_pegawai" placeholder="Masukkan Nama Pegawai" value="{{$pw->Nama_Pegawai}}">
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control input" id="alamat" rows="5" name="alt" placeholder="Masukkan Alamat Pegawai" value="{{$pw->Alamat}}">
                        </div>
                        <div class="mb-4">
                            <label for="no-telp" class="form-label">No.Telp</label>
                            <input type="text" class="form-control input" id="no-telp" name="no_telp" placeholder="Masukkan No. Telp" value="{{$pw->No_Telp}}">
                        </div>
                        <div class="mb-4">
                            <label for="kategori" class="form-label">Jenis Kelamin</label>
                            <select class="form-control input" id="jenis-kelamin" name="jenis_kelamin">
                                <option value="" disabled selected id="defautlSelect">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {{ $pw->Jenis_Kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                <option value="Perempuan" {{ $pw->Jenis_Kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </select>
                        </div>
                        <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Edit</button>
                    </form>
                </div>            
              </div>
            </div>
          </div>
    @endforeach
    </tbody>
</table>
@endsection