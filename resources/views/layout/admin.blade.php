<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    @yield('css')

    <title>@yield('title')</title>
</head>

<body>
    {{-- Section Sidebar --}}
    <div class="position-fixed shadow sidebar overflow-scroll">
        <div class="d-flex align-items-center ms-3 logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo" width="35">
            <h5 class="fw-bold ms-4 align-items-center my-auto">Gudang<span>Rokok</span></h5>
        </div>
        <div class="main-menu mt-5">
            {{-- <p class="mb-3 ms-3 fw-bold menu">Main Menu</p> --}}
            <ul class="sidebar-links list-unstyled d-flex flex-column gap-3">
                <li>
                    <a href="{{ route('dashbord') }}" class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill=""
                                    d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z" />
                            </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Dashboard
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pegawai') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30"  viewBox="0 0 36 36"><g id="clarityEmployeeGroupSolid0" fill="currentColor"><ellipse cx="18" cy="11.28" rx="4.76" ry="4.7"/><path d="M10.78 11.75h.48v-.43a6.7 6.7 0 0 1 3.75-6a4.62 4.62 0 1 0-4.21 6.46Zm13.98-.47v.43h.48A4.58 4.58 0 1 0 21 5.29a6.7 6.7 0 0 1 3.76 5.99Zm-2.47 5.17a21.45 21.45 0 0 1 5.71 2a2.71 2.71 0 0 1 .68.53H34v-3.42a.72.72 0 0 0-.38-.64a18 18 0 0 0-8.4-2.05h-.66a6.66 6.66 0 0 1-2.27 3.58ZM6.53 20.92A2.76 2.76 0 0 1 8 18.47a21.45 21.45 0 0 1 5.71-2a6.66 6.66 0 0 1-2.27-3.55h-.66a18 18 0 0 0-8.4 2.05a.72.72 0 0 0-.38.64V22h4.53Zm14.93 5.77h5.96v1.4h-5.96z"/><path d="M32.81 21.26h-6.87v-1a1 1 0 0 0-2 0v1H22v-2.83a20.17 20.17 0 0 0-4-.43a19.27 19.27 0 0 0-9.06 2.22a.76.76 0 0 0-.41.68v5.61h7.11v6.09a1 1 0 0 0 1 1h16.17a1 1 0 0 0 1-1V22.26a1 1 0 0 0-1-1Zm-1 10.36H17.64v-8.36h6.3v.91a1 1 0 0 0 2 0v-.91h5.87Z"/></g></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Pegawai
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('supplier') }}" class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 2048 2048"><path fill="currentColor" d="M1024 0q141 0 272 36t245 103t207 160t160 208t103 245t37 272q0 141-36 272t-103 245t-160 207t-208 160t-245 103t-272 37q-141 0-272-36t-245-103t-207-160t-160-208t-103-244t-37-273q0-141 36-272t103-245t160-207t208-160T751 37t273-37zm0 1920q123 0 237-32t214-90t182-141t140-181t91-214t32-238q0-123-32-237t-90-214t-141-182t-181-140t-214-91t-238-32q-123 0-237 32t-214 90t-182 141t-140 181t-91 214t-32 238q0 123 32 237t90 214t141 182t181 140t214 91t238 32zm531-1005l90 90l-620 622l-622-622l90-90l468 467l-1-998h128l1 997l466-466z"/></svg>
                                <path fill=""
                                    d="M4 20q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h5.175q.4 0 .763.15t.637.425L12 6h8q.825 0 1.413.588T22 8H6q-.825 0-1.413.588T4 10v8l1.975-6.575q.2-.65.738-1.038T7.9 10h12.9q1.025 0 1.613.813t.312 1.762l-1.8 6q-.2.65-.738 1.038T19 20H4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Supplier
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin') }}" class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24"><path fill="currentColor" d="M12 23C6.443 21.765 2 16.522 2 11V5l10-4l10 4v6c0 5.524-4.443 10.765-10 12ZM4 6v5a10.58 10.58 0 0 0 8 10a10.58 10.58 0 0 0 8-10V6l-8-3Z"/><circle cx="12" cy="8.5" r="2.5" fill="currentColor"/><path fill="currentColor" d="M7 15a5.782 5.782 0 0 0 5 3a5.782 5.782 0 0 0 5-3c-.025-1.896-3.342-3-5-3c-1.667 0-4.975 1.104-5 3Z"/></svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Admin
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kepalagudang') }}" class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 36 36"><g id="clarityEmployeeLine0" fill="currentColor"><path d="M16.43 16.69a7 7 0 1 1 7-7a7 7 0 0 1-7 7Zm0-11.92a5 5 0 1 0 5 5a5 5 0 0 0-5-5ZM22 17.9a25.41 25.41 0 0 0-16.12 1.67a4.06 4.06 0 0 0-2.31 3.68v5.95a1 1 0 1 0 2 0v-5.95a2 2 0 0 1 1.16-1.86a22.91 22.91 0 0 1 9.7-2.11a23.58 23.58 0 0 1 5.57.66Zm.14 9.51h6.14v1.4h-6.14z"/><path d="M33.17 21.47H28v2h4.17v8.37H18v-8.37h6.3v.42a1 1 0 0 0 2 0V20a1 1 0 0 0-2 0v1.47H17a1 1 0 0 0-1 1v10.37a1 1 0 0 0 1 1h16.17a1 1 0 0 0 1-1V22.47a1 1 0 0 0-1-1Z"/></g></svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Kepala Gudang
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pembelianbarang') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 32 32"><path fill="currentColor" d="M4 7a1 1 0 0 0 0 2h2.22l2.624 10.5c.223.89 1.02 1.5 1.937 1.5h12.47c.903 0 1.67-.6 1.907-1.47L27.75 10h-2.094l-2.406 9H10.78L8.157 8.5A1.984 1.984 0 0 0 6.22 7H4zm18 14c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3zm-9 0c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3zm3-14v5h-3l4 4l4-4h-3V7h-2zm-3 16c.564 0 1 .436 1 1c0 .564-.436 1-1 1c-.564 0-1-.436-1-1c0-.564.436-1 1-1zm9 0c.564 0 1 .436 1 1c0 .564-.436 1-1 1c-.564 0-1-.436-1-1c0-.564.436-1 1-1z"/></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Pembelian Barang
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('barangmasuk') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 1024 1024"><path fill="currentColor" d="M320 288v-22.336C320 154.688 405.504 64 512 64s192 90.688 192 201.664v22.4h131.072a32 32 0 0 1 31.808 28.8l57.6 576a32 32 0 0 1-31.808 35.2H131.328a32 32 0 0 1-31.808-35.2l57.6-576a32 32 0 0 1 31.808-28.8H320zm64 0h256v-22.336C640 189.248 582.272 128 512 128c-70.272 0-128 61.248-128 137.664v22.4zm-64 64H217.92l-51.2 512h690.56l-51.264-512H704v96a32 32 0 1 1-64 0v-96H384v96a32 32 0 0 1-64 0v-96z"/></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Barang Masuk
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('barang') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24"><path fill="currentColor" d="M7.5 10.75a.75.75 0 1 1 1.5 0a.75.75 0 0 1-1.5 0Zm.75 4.75a.75.75 0 1 0 0 1.5a.75.75 0 0 0 0-1.5ZM3 6.25A3.25 3.25 0 0 1 6.25 3h11.5A3.25 3.25 0 0 1 21 6.25v5.772a6.463 6.463 0 0 0-3.048-1.007A.749.749 0 0 0 17.25 10h-4.5a.75.75 0 0 0 0 1.5h2.246a6.502 6.502 0 0 0-2.974 9.5H6.25A3.25 3.25 0 0 1 3 17.75V6.25Zm3 4.5a2.25 2.25 0 1 0 4.5 0a2.25 2.25 0 0 0-4.5 0ZM8.25 14a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5ZM6 6.25c0 .414.336.75.75.75h10.5a.75.75 0 0 0 0-1.5H6.75a.75.75 0 0 0-.75.75ZM23 17.5a5.5 5.5 0 1 0-11 0a5.5 5.5 0 0 0 11 0Zm-5 .5l.001 2.503a.5.5 0 1 1-1 0V18h-2.505a.5.5 0 0 1 0-1H17v-2.5a.5.5 0 1 1 1 0V17h2.497a.5.5 0 0 1 0 1H18Z"/></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Barang
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('barangreturnpembelian') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 256 256"><path fill="currentColor" d="M71.51 144.49a12 12 0 0 1 0-17l24-24a12 12 0 0 1 17 17L109 124h55v-20a12 12 0 0 1 24 0v32a12 12 0 0 1-12 12h-67l3.52 3.51a12 12 0 0 1-17 17ZM236 56v144a20 20 0 0 1-20 20H40a20 20 0 0 1-20-20V56a20 20 0 0 1 20-20h176a20 20 0 0 1 20 20Zm-24 4H44v136h168Z"/></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Barang Return Pembelian
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kategori') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 32 32"><path fill="currentColor" d="M14 25h14v2H14zm-6.83 1l-2.58 2.58L6 30l4-4l-4-4l-1.42 1.41L7.17 26zM14 15h14v2H14zm-6.83 1l-2.58 2.58L6 20l4-4l-4-4l-1.42 1.41L7.17 16zM14 5h14v2H14zM7.17 6L4.59 8.58L6 10l4-4l-4-4l-1.42 1.41L7.17 6z"/></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data kategori
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('stokbarang') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 16 16"><path fill="currentColor" d="M12 6V0H4v6H0v7h16V6h-4zm-5 6H1V7h2v1h2V7h2v5zM5 6V1h2v1h2V1h2v5H5zm10 6H9V7h2v1h2V7h2v5zM0 16h3v-1h10v1h3v-2H0v2z"/></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Stok Barang
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('outlet') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24"><path fill="currentColor" d="M20 6H4V4h16v2m-7 9.5c0 1.14.43 2.36 1 3.5v1H4v-6H3v-2l1-5h16l.7 3.5c-.7-.32-1.42-.5-2.2-.5c-3 0-5.5 2.5-5.5 5.5M12 14H6v4h6v-4m10 1.5c0 2.6-3.5 6.5-3.5 6.5S15 18.1 15 15.5c0-1.9 1.6-3.5 3.5-3.5s3.5 1.6 3.5 3.5m-2.3.1c0-.6-.6-1.2-1.2-1.2s-1.2.5-1.2 1.2c0 .6.5 1.2 1.2 1.2s1.3-.6 1.2-1.2Z"/></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Outlet
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('penjualanbarang') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24"><path fill="currentColor" d="M12.825 22.825L2 12V2h10l10.8 10.85l-9.975 9.975ZM6.5 8q.625 0 1.063-.438T8 6.5q0-.625-.438-1.063T6.5 5q-.625 0-1.063.438T5 6.5q0 .625.438 1.063T6.5 8Z"/></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Penjualan Barang
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('barangkeluar') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 20 20"><path fill="currentColor" d="M12 2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-3Zm1.854 5.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 .708.708L13 8.707V14.5a.5.5 0 0 0 1 0V8.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2ZM5 11a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H5Zm-2 2.5a.5.5 0 0 0-1 0V15a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1.5a.5.5 0 0 0-1 0V15a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.5Z"/></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Barang Keluar
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pengiriman') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24"><path fill="currentColor" d="M.75 7.5h9.75l.75 1.5H1.5L.75 7.5m1 3h9.75l.75 1.5H2.5l-.75-1.5m16.25 8c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5s.67 1.5 1.5 1.5m1.5-9H17V12h4.46L19.5 9.5M8 18.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5s.67 1.5 1.5 1.5M20 8l3 4v5h-2c0 1.66-1.34 3-3 3s-3-1.34-3-3h-4c0 1.66-1.35 3-3 3c-1.66 0-3-1.34-3-3H3v-3.5h2V15h.76c.55-.61 1.35-1 2.24-1c.89 0 1.69.39 2.24 1H15V6H3c0-1.11.89-2 2-2h12v4h3Z"/></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Pengiriman
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('barangreturnpenjualan') }}"swxa class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24"><path fill="currentColor" d="M12 14h4v-4h-4V7l-5 5l5 5zm7-11h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04a2.008 2.008 0 0 0-1.44 1.19c-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55c.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75s-.75-.34-.75-.75s.34-.75.75-.75zM19 19H5V5h14v14z"/></svg>
                                <path fill=""
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Barang Return Penjualan
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Section Navbar --}}
    <div class="content position-relative">
        <nav class="navbar navbar-expand d-flex justify-content-between position-fixed">
            <div class="sidebar-btn">
                <i class="bx bx-menu sidebarBtn fs-1"></i>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center gap-2 text-decoration-none text-black fw-medium"
                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Halo, Admin
                    <img src="" width="40">

                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </nav>
        <div class="container position-relative home-content">
            @yield('content')

        </div>
    </div>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- sidebar -->
    <script>
        let sidebar = document.querySelector('.sidebar');
        let sidebarBtn = document.querySelector('.sidebarBtn');
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu")
        }
    </script>
    <!-- chart grafik -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        var xValues = ["Samporna Mild", "Camel", "Marlboro Merah", "Marlboro Filter Black", "Surya 12", ""];
        var yValues = [1000, 500, 950, 970, 1100, 0];
        var barColors = ["red", "magenta","orange","orange","brown"];

        new Chart("myChart", {
            type: "bar",
            data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
                }]
            },
            options: {
            legend: {display: false},
            title: {
            display: true,
            text: "Gudang Rokok"
                }
            }
        });
</script>
</body>

</html>