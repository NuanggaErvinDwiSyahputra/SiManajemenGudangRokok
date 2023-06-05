@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','GudangRokok | Dashbord')

@section('content')
<<div class="group-card d-flex gap-3">
    {{-- Card Pegawai --}}
    <div class="card card-info w-25 border-0 px-3 py-2 rounded-3 shadow">
        <div class="header-icon d-flex justify-content-between align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 36 36">
                <g id="clarityEmployeeGroupSolid0" fill="currentColor">
                    <ellipse cx="18" cy="11.28" rx="4.76" ry="4.7" />
                    <path
                        d="M10.78 11.75h.48v-.43a6.7 6.7 0 0 1 3.75-6a4.62 4.62 0 1 0-4.21 6.46Zm13.98-.47v.43h.48A4.58 4.58 0 1 0 21 5.29a6.7 6.7 0 0 1 3.76 5.99Zm-2.47 5.17a21.45 21.45 0 0 1 5.71 2a2.71 2.71 0 0 1 .68.53H34v-3.42a.72.72 0 0 0-.38-.64a18 18 0 0 0-8.4-2.05h-.66a6.66 6.66 0 0 1-2.27 3.58ZM6.53 20.92A2.76 2.76 0 0 1 8 18.47a21.45 21.45 0 0 1 5.71-2a6.66 6.66 0 0 1-2.27-3.55h-.66a18 18 0 0 0-8.4 2.05a.72.72 0 0 0-.38.64V22h4.53Zm14.93 5.77h5.96v1.4h-5.96z" />
                    <path
                        d="M32.81 21.26h-6.87v-1a1 1 0 0 0-2 0v1H22v-2.83a20.17 20.17 0 0 0-4-.43a19.27 19.27 0 0 0-9.06 2.22a.76.76 0 0 0-.41.68v5.61h7.11v6.09a1 1 0 0 0 1 1h16.17a1 1 0 0 0 1-1V22.26a1 1 0 0 0-1-1Zm-1 10.36H17.64v-8.36h6.3v.91a1 1 0 0 0 2 0v-.91h5.87Z" />
                </g>
            </svg>
            <path fill=""
                d="m16 7.78l-.313.095l-12.5 4.188L.345 13L2 13.53v8.75c-.597.347-1 .98-1 1.72a2 2 0 1 0 4 0c0-.74-.403-1.373-1-1.72v-8.06l2 .655V20c0 .82.5 1.5 1.094 1.97c.594.467 1.332.797 2.218 1.093c1.774.59 4.112.937 6.688.937c2.576 0 4.914-.346 6.688-.938c.886-.295 1.624-.625 2.218-1.093C25.5 21.5 26 20.82 26 20v-5.125l2.813-.938L31.655 13l-2.843-.938l-12.5-4.187L16 7.78zm0 2.095L25.375 13L16 16.125L6.625 13L16 9.875zm-8 5.688l7.688 2.562l.312.094l.313-.095L24 15.562V20c0 .01.004.126-.313.375c-.316.25-.883.565-1.625.813C20.58 21.681 18.395 22 16 22c-2.395 0-4.58-.318-6.063-.813c-.74-.247-1.308-.563-1.624-.812C7.995 20.125 8 20.01 8 20v-4.438z" />
            </svg>
            <div class="menu-detail">
                <a href="#" class="text-decoration-none text-white   dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="" stroke="currentColor" stroke-linejoin="round" stroke-width="3.75"
                            d="M12 12h.01v.01H12zm0-7h.01v.01H12zm0 14h.01v.01H12z" /></svg></a>
                <ul class="dropdown-menu w-100">
                    <li>
                        <a class="dropdown-item" href="{{route('pegawai')}}">
                            <div class="detail-menu gap-3 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                                    <path fill=""
                                        d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z" />
                                    <path fill="currentColor"
                                        d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
                                </svg>
                                View Detail Pegawai
                            </div>
                        </a>
                    </li>
            </div>
        </div>
        <div class="content-card mt-2">
            <div class="total-students">
                <span class="fw-bold fs-2">2</span>
            </div>
            <p>Total Pegawai yang Bekerja</p>
        </div>
    </div>
    {{-- Card Data Supplier --}}
    <div class="card card-info w-25 border-0 px-3 py-2 rounded-3 shadow">
        <div class="header-icon d-flex justify-content-between align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 2048 2048">
                <path fill="currentColor"
                    d="M1024 0q141 0 272 36t245 103t207 160t160 208t103 245t37 272q0 141-36 272t-103 245t-160 207t-208 160t-245 103t-272 37q-141 0-272-36t-245-103t-207-160t-160-208t-103-244t-37-273q0-141 36-272t103-245t160-207t208-160T751 37t273-37zm0 1920q123 0 237-32t214-90t182-141t140-181t91-214t32-238q0-123-32-237t-90-214t-141-182t-181-140t-214-91t-238-32q-123 0-237 32t-214 90t-182 141t-140 181t-91 214t-32 238q0 123 32 237t90 214t141 182t181 140t214 91t238 32zm531-1005l90 90l-620 622l-622-622l90-90l468 467l-1-998h128l1 997l466-466z" />
            </svg>
            <path fill=""
                d="M12 5.5A3.5 3.5 0 0 1 15.5 9a3.5 3.5 0 0 1-3.5 3.5A3.5 3.5 0 0 1 8.5 9A3.5 3.5 0 0 1 12 5.5M5 8c.56 0 1.08.15 1.53.42c-.15 1.43.27 2.85 1.13 3.96C7.16 13.34 6.16 14 5 14a3 3 0 0 1-3-3a3 3 0 0 1 3-3m14 0a3 3 0 0 1 3 3a3 3 0 0 1-3 3c-1.16 0-2.16-.66-2.66-1.62a5.536 5.536 0 0 0 1.13-3.96c.45-.27.97-.42 1.53-.42M5.5 18.25c0-2.07 2.91-3.75 6.5-3.75s6.5 1.68 6.5 3.75V20h-13v-1.75M0 20v-1.5c0-1.39 1.89-2.56 4.45-2.9c-.59.68-.95 1.62-.95 2.65V20H0m24 0h-3.5v-1.75c0-1.03-.36-1.97-.95-2.65c2.56.34 4.45 1.51 4.45 2.9V20Z" />
            </svg>
            <div class="menu-detail">
                <a href="#" class="text-decoration-none text-white dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="" stroke="currentColor" stroke-linejoin="round" stroke-width="3.75"
                            d="M12 12h.01v.01H12zm0-7h.01v.01H12zm0 14h.01v.01H12z" /></svg></a>
                <ul class="dropdown-menu w-100">
                    <li>
                        <a class="dropdown-item" href="{{route('supplier')}}">
                            <div class="detail-menu gap-3 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                                    <path fill=""
                                        d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z" />
                                    <path fill="currentColor"
                                        d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
                                </svg>
                                View Detail Supplier
                            </div>
                        </a>
                    </li>
            </div>
        </div>
        <div class="content-card mt-2">
            <div class="total-students">
                <span class="fw-bold fs-2">1</span>
            </div>
            <p>Total Supplier yang Bekerja</p>
        </div>
    </div>
    {{-- Card Data Admin --}}
    <div class="card card-info w-25 border-0 px-3 py-2 rounded-3 shadow">
        <div class="header-icon d-flex justify-content-between align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 23C6.443 21.765 2 16.522 2 11V5l10-4l10 4v6c0 5.524-4.443 10.765-10 12ZM4 6v5a10.58 10.58 0 0 0 8 10a10.58 10.58 0 0 0 8-10V6l-8-3Z" />
                <circle cx="12" cy="8.5" r="2.5" fill="currentColor" />
                <path fill="currentColor"
                    d="M7 15a5.782 5.782 0 0 0 5 3a5.782 5.782 0 0 0 5-3c-.025-1.896-3.342-3-5-3c-1.667 0-4.975 1.104-5 3Z" />
                </svg>
            <path fill=""
                d="M12 17q.425 0 .713-.288T13 16v-3.2l.9.9q.15.15.325.213t.375.062q.2 0 .375-.062t.325-.213q.275-.275.275-.7t-.275-.7l-2.6-2.6q-.3-.3-.7-.3t-.7.3l-2.6 2.6q-.275.275-.275.7t.275.7q.275.275.7.275t.7-.275l.9-.9V16q0 .425.288.713T12 17Zm-8 3q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h5.175q.4 0 .763.15t.637.425L12 6h8q.825 0 1.413.588T22 8v10q0 .825-.588 1.413T20 20H4ZM4 6v12h16V8h-8.825l-2-2H4Zm0 0v12V6Z" />
            </svg>
            <div class="menu-detail">
                <a href="#" class="text-decoration-none text-white dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="" stroke="currentColor" stroke-linejoin="round" stroke-width="3.75"
                            d="M12 12h.01v.01H12zm0-7h.01v.01H12zm0 14h.01v.01H12z" /></svg></a>
                <ul class="dropdown-menu w-100">
                    <li>
                        <a class="dropdown-item" href="{{route('admin')}}">
                            <div class="detail-menu gap-3 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                                    <path fill=""
                                        d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z" />
                                    <path fill="currentColor"
                                        d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
                                </svg>
                                View Detail Admin
                            </div>
                        </a>
                    </li>
            </div>
        </div>
        <div class="content-card mt-2">
            <div class="total-students">
                <span class="fw-bold fs-2">1</span>
            </div>
            <p>Total Admin yang Bekerja</p>
        </div>
    </div>
    {{-- Card Kepala Gudang --}}
    <div class="card card-info w-25 border-0 px-3 py-2 rounded-3 shadow">
        <div class="header-icon d-flex justify-content-between align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 36 36">
                <g id="clarityEmployeeLine0" fill="currentColor">
                    <path
                        d="M16.43 16.69a7 7 0 1 1 7-7a7 7 0 0 1-7 7Zm0-11.92a5 5 0 1 0 5 5a5 5 0 0 0-5-5ZM22 17.9a25.41 25.41 0 0 0-16.12 1.67a4.06 4.06 0 0 0-2.31 3.68v5.95a1 1 0 1 0 2 0v-5.95a2 2 0 0 1 1.16-1.86a22.91 22.91 0 0 1 9.7-2.11a23.58 23.58 0 0 1 5.57.66Zm.14 9.51h6.14v1.4h-6.14z" />
                    <path
                        d="M33.17 21.47H28v2h4.17v8.37H18v-8.37h6.3v.42a1 1 0 0 0 2 0V20a1 1 0 0 0-2 0v1.47H17a1 1 0 0 0-1 1v10.37a1 1 0 0 0 1 1h16.17a1 1 0 0 0 1-1V22.47a1 1 0 0 0-1-1Z" />
                </g>
            </svg>
            <path fill=""
                d="M6 13h9v-2H6v2Zm0-3h9V8H6v2ZM4 20q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.588 1.413T20 20H4Zm0-2h16V6H4v12Zm0 0V6v12Z" />
            </svg>
            <div class="menu-detail">
                <a href="#" class="text-decoration-none text-white dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="" stroke="currentColor" stroke-linejoin="round" stroke-width="3.75"
                            d="M12 12h.01v.01H12zm0-7h.01v.01H12zm0 14h.01v.01H12z" /></svg></a>
                <ul class="dropdown-menu w-100">
                    <li>
                        <a class="dropdown-item" href="{{route('kepalagudang')}}">
                            <div class="detail-menu gap-3 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                                    <path fill=""
                                        d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z" />
                                    <path fill="currentColor"
                                        d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
                                </svg>
                                View Detail Kepala Gudang
                            </div>
                        </a>
                    </li>
            </div>
        </div>
        <div class="content-card mt-2">
            <div class="total-students">
                <span class="fw-bold fs-2">1</span>
            </div>
            <p>Total Kepala Gudang yang Bekerja</p>
        </div>

    </div>
    </div>
    {{-- Grafik Penjualan --}}
    <div class="col-xl-8 col-lg-7 pt-3 ">
        <div class="card shadow mb-4 ">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
           <h6>Grafik Penjualan</h6>
        
            <div class="menu-detail">
                <a href="#" class="text-decoration-none text-white dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="black" stroke="black" stroke-linejoin="round" stroke-width="3.75"
                            d="M12 12h.01v.01H12zm0-7h.01v.01H12zm0 14h.01v.01H12z" /></svg></a>
                <ul class="dropdown-menu w-50">
                    <li>
                        <a class="dropdown-item" href="{{route('penjualanbarang')}}">
                            <div class="detail-menu gap-3 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                                    <path fill=""
                                        d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z" />
                                    <path fill="currentColor"
                                        d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
                                </svg>
                                View Detail Penjualan
                            </div>
                        </a>
                    </li>
            </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>
        </div>
    </div>
    @endsection
