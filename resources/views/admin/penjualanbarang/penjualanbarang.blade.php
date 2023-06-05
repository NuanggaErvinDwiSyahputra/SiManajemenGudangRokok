@extends('layout.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
@endsection

@section('title','GudangRokok | Data Penjualan Barang')

@section('content')
{{-- Section Table --}}
<div class="d-flex align-items-center">
    <button class="btn-add mb-4 border-0 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2"
        onclick="location.href='{{route('penjualanbarang-entry')}}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M12 21c-1.654 0-3-1.346-3-3l.053-3.053L6.018 15C4.346 15 3 13.654 3 12s1.346-3 3-3l3.053-.054L9 6.018C9 4.346 10.346 3 12 3s3 1.346 3 3l.055 2.946L18.018 9C19.654 9 21 10.346 21 12s-1.346 3-3 3l-2.945-.053L15 18.018C15 19.654 13.654 21 12 21zm-1-8v5.018c0 .533.449.982 1 .982s1-.449 1-1v-5h5.018c.533 0 .982-.449.982-1s-.449-1-1-1h-5V6c0-.569-.449-1-1-1s-1 .449-1 1v5H6c-.569 0-1 .449-1 1s.449 1 1 1h5z"/></svg>
            <path fill="black" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z" />
            </svg>
        Add Data
    </button>
    <button class="btn-add mb-4 border-0 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2 ms-2"
        onclick="location.href='{{route('pdfpenjualanbarang')}}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M15 20h2v4h-2zm5-2h2v6h-2zm-10-4h2v10h-2z"/><path fill="currentColor" d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2ZM12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z"/></svg>
            <path fill="black" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z" />
            </svg>
        Generate Report
    </button>
</div>

<table class="table table-bordered text-center">
    <thead class="table-light">
        <tr>
            <th>ID Penjualan</th>
            <th>ID Outlet</th>
            <th>Id Admin</th>
            <th>ID Barang</th>
            <th>Jumlah</th>
            <th>Tanggal Penjualan</th>
            <th>Harga Penjualan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach($penjualan as $pjb)
        <tr>
            <td>{{$pjb->Id_Penjualan}}</td>
            <td>{{$pjb->Id_Outlet}}</td>
            <td>{{$pjb->Id_Admin}}</td>
            <td>{{$pjb->Id_Barang}}</td>
            <td>{{$pjb->Jumlah}}</td>
            <td>{{$pjb->Tanggal_Penjualan}}</td>
            <td>{{$pjb->Harga_Penjualan}}</td>
            <td>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#target{{ $pjb->Id_Penjualan }}">Edit</button>
                <button type="button" onclick="window.location='{{ route('penjualanbarang-destroy', $pjb->Id_Penjualan) }}'" class="btn btn-dark">Delete</button>
            </td>
        </tr>
        <div class="modal fade" id="target{{ $pjb->Id_Penjualan }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit Data Penjualan Barang</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('penjualanbarang-update', ['id' => $pjb->Id_Penjualan]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="id-penjualan" class="form-label">ID Penjualan</label>
                            <input type="text" class="form-control input" id="id-penjualan" name="id_penjualan" placeholder="Masukkan ID Penjualan" value="{{$pjb->Id_Penjualan}}">
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
                            <label for="id-admin" class="form-label">ID Admin</label>
                            <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_admin">
                                <option class="" value="">- Silahkan Pilih -</option>
                                @foreach ($admin as $id)
                                    <option value="{{ $id->Id_Admin }}">{{ $id->Id_Admin }}</option>
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
                            <label for="jml-penjualan" class="form-label">Jumlah Penjualan</label>
                            <input type="number" class="form-control input" id="jml-penjualan" name="jml_penjualan" placeholder="Masukkan Jumlah Penjualan" value="{{$pjb->Jumlah}}">
                        </div>
                        <div class="mb-4">
                            <label for="tgl-penjualan" class="form-label">Tanggal Penjualan</label>
                            <input type="date" class="form-control input" id="tgl-penjualan" name="tgl_penjualan" placeholder="Masukkan Tanggal Penjualan" value="{{$pjb->Tanggal_Penjualan}}">
                        </div>
                        <div class="mb-4">
                            <label for="hrg-penjualan" class="form-label">Harga Penjualan</label>
                            <input type="text" class="form-control input" id="hrg-penjualan" name="hrg_penjualan" placeholder="Masukkan Harga Penjualan" value="{{$pjb->Harga_Penjualan}}">
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