@extends('layout.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
@endsection

@section('title','GudangRokok | Data Barang Return Penjualan')

@section('content')
{{-- Section Table --}}
<div class="d-flex align-items-center">
    <button class="btn-add mb-4 border-0 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2"
        onclick="location.href='{{route('barangreturnpenjualan-entry')}}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M12 21c-1.654 0-3-1.346-3-3l.053-3.053L6.018 15C4.346 15 3 13.654 3 12s1.346-3 3-3l3.053-.054L9 6.018C9 4.346 10.346 3 12 3s3 1.346 3 3l.055 2.946L18.018 9C19.654 9 21 10.346 21 12s-1.346 3-3 3l-2.945-.053L15 18.018C15 19.654 13.654 21 12 21zm-1-8v5.018c0 .533.449.982 1 .982s1-.449 1-1v-5h5.018c.533 0 .982-.449.982-1s-.449-1-1-1h-5V6c0-.569-.449-1-1-1s-1 .449-1 1v5H6c-.569 0-1 .449-1 1s.449 1 1 1h5z"/></svg>
            <path fill="black" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z" />
            </svg>
        Add Data
    </button>
    <button class="btn-add mb-4 border-0 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2 ms-2"
        onclick="location.href='{{route('pdfbarangreturnpenjualan')}}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M15 20h2v4h-2zm5-2h2v6h-2zm-10-4h2v10h-2z"/><path fill="currentColor" d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2ZM12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z"/></svg>
            <path fill="black" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z" />
            </svg>
        Generate Report
    </button>
</div>

<table class="table table-bordered text-center">
    <thead class="table-light">
        <tr>
            <th>ID Barang Return Penjualan</th>
            <th>ID Outlet</th>
            <th>ID Barang</th>
            <th>ID Admin</th>
            <th>Tanggal Barang Return Penjualan</th>
            <th>Jumlah Barang Return Penjualan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($barangreturnpenjualan as $brj)
        <tr>
            <td>{{$brj->Id_BarangReturnPenjualan}}</td>
            <td>{{$brj->Id_Outlet}}</td>
            <td>{{$brj->Id_Barang}}</td>
            <td>{{$brj->Id_Admin}}</td>
            <td>{{$brj->Tanggal_Return}}</td>
            <td>{{$brj->Jumlah_Barangreturnpenjualan}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example"> 
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#target{{ $brj->Id_BarangReturnPenjualan }}">Edit</button>
                <button type="button" onclick="window.location='{{ route('barangreturnpenjualan-destroy', $brj->Id_BarangReturnPenjualan) }}'" class="btn btn-dark ms-2">Delete</button>
                </div>
            </td>
            <div class="modal fade" id="target{{ $brj->Id_BarangReturnPenjualan }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit Data Barang Return Penjualan</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('barangreturnpenjualan-update', ['id' => $brj->Id_BarangReturnPenjualan]) }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="id-barangreturnpenjualan" class="form-label">ID Barang Return Penjualan</label>
                                <input type="text" class="form-control input" id="id-barangreturnpenjualan" name="id_barangreturnpenjualan" placeholder="Masukkan ID Barang Return Penjualan" value="{{$brj->Id_BarangReturnPenjualan}}">
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
                                <label for="tgl-barangreturnpenjualan" class="form-label">Tanggal Barang Return Penjualan</label>
                                <input type="date" class="form-control input" id="tgl-barangreturnpenjualan" name="tgl_barangreturnpenjualan" placeholder="Masukkan Tanggal Barang Return Penjualan" value="{{$brj->Tanggal_Return}}">
                            </div>
                            <div class="mb-4">
                                <label for="brgreturnpenjualan" class="form-label">Jumlah Barang Return Penjualan</label>
                                <input type="number" class="form-control input" id="brgreturnpenjualan" name="brg_returnpenjualan" placeholder="Masukkan Jumlah Barang Return Penjualan" value="{{$brj->Jumlah_Barangreturnpenjualan}}">
                            </div>
                            <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Edit</button>
                        </form>
                    </div>            
                  </div>
                </div>
              </div>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection