<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\AdminController;
USE App\Http\Controllers\BarangController;
USE App\Http\Controllers\BarangKeluarController;
USE App\Http\Controllers\BarangMasukController;
USE App\Http\Controllers\BarangReturnPembelianController;
USE App\Http\Controllers\BarangReturnPenjualanController;
USE App\Http\Controllers\KategoriController;
USE App\Http\Controllers\OutletController;
USE App\Http\Controllers\KepalaGudangController;
USE App\Http\Controllers\PegawaiController;
USE App\Http\Controllers\PembelianController;
USE App\Http\Controllers\PengirimanController;
USE App\Http\Controllers\PenjualanController;
USE App\Http\Controllers\StokBarangController;
USE App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout/admin');
});

Route::get('/dashbord', function () {
    return view('admin/dashbord/dashbord');
})->name('dashbord');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin-entry', [AdminController::class, 'create'])->name('admin-entry');
Route::post('/admin-entry', [AdminController::class, 'store'])->name('admin-entry');
Route::post('/admin-update/{id}', [AdminController::class, 'update'])->name('admin-update');
Route::get('/admin/{id}', [AdminController::class, 'destroy'])->name('admin-destroy');
Route::get('/pdf-admin', [AdminController::class, 'exportpdf'])->name('pdfadmin');

Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/barang-entry', [BarangController::class, 'create'])->name('barang-entry');
Route::post('/barang-entry', [BarangController::class, 'store'])->name('barang-entry');
Route::post('/barang-update/{id}', [BarangController::class, 'update'])->name('barang-update');
Route::get('/barang/{id}', [BarangController::class, 'destroy'])->name('barang-destroy');
Route::get('/pdf-barang', [BarangController::class, 'exportpdf'])->name('pdfbarang');

Route::get('/barangkeluar', [BarangKeluarController::class, 'index'])->name('barangkeluar');
Route::get('/barangkeluar-entry', [BarangKeluarController::class, 'create'])->name('barangkeluar-entry');
Route::post('/barangkeluar-entry', [BarangKeluarController::class, 'store'])->name('barangkeluar-entry');
Route::post('/barangkeluar-update/{id}', [BarangKeluarController::class, 'update'])->name('barangkeluar-update');
Route::get('/barangkeluar/{id}', [BarangKeluarController::class, 'destroy'])->name('barangkeluar-destroy');
Route::get('/pdf-barangkeluar', [BarangKeluarController::class, 'exportpdf'])->name('pdfbarangkeluar');

Route::get('/barangmasuk', [BarangMasukController::class, 'index'])->name('barangmasuk');
Route::get('/barangmasuk-entry', [BarangMasukController::class, 'create'])->name('barangmasuk-entry');
Route::post('/barangmasuk-entry', [BarangMasukController::class, 'store'])->name('barangmasuk-entry');
Route::post('/barangmasuk-update/{id}', [BarangMasukController::class, 'update'])->name('barangmasuk-update');
Route::get('/barangmasuk/{id}', [BarangMasukController::class, 'destroy'])->name('barangmasuk-destroy');
Route::get('/pdf-barangmasuk', [BarangMasukController::class, 'exportpdf'])->name('pdfbarangmasuk');

Route::get('/barangreturnpembelian', [BarangReturnPembelianController::class, 'index'])->name('barangreturnpembelian');
Route::get('/barangreturnpembelian-entry', [BarangReturnPembelianController::class, 'create'])->name('barangreturnpembelian-entry');
Route::post('/barangreturnpembelian-entry', [BarangReturnPembelianController::class, 'store'])->name('barangreturnpembelian-entry');
Route::post('/barangreturnpembelian-update/{id}', [BarangReturnPembelianController::class, 'update'])->name('barangreturnpembelian-update');
Route::get('/barangreturnpembelian/{id}', [BarangReturnPembelianController::class, 'destroy'])->name('barangreturnpembelian-destroy');
Route::get('/pdf-barangreturnpembelian', [BarangReturnPembelianController::class, 'exportpdf'])->name('pdfbarangreturnpembelian');

Route::get('/barangreturnpenjualan', [BarangReturnPenjualanController::class, 'index'])->name('barangreturnpenjualan');
Route::get('/barangreturnpenjualan-entry', [BarangReturnPenjualanController::class, 'create'])->name('barangreturnpenjualan-entry');
Route::post('/barangreturnpenjualan-entry', [BarangReturnPenjualanController::class, 'store'])->name('barangreturnpenjualan-entry');
Route::post('/barangreturnpenjualan-update/{id}', [BarangReturnPenjualanController::class, 'update'])->name('barangreturnpenjualan-update');
Route::get('/barangreturnpenjualan/{id}', [BarangReturnPenjualanController::class, 'destroy'])->name('barangreturnpenjualan-destroy');
Route::get('/pdf-barangreturnpenjualan', [BarangReturnPenjualanController::class, 'exportpdf'])->name('pdfbarangreturnpenjualan');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori-entry', [KategoriController::class, 'create'])->name('kategori-entry');
Route::post('/kategori-entry', [KategoriController::class, 'store'])->name('kategori-entry');
Route::post('/kategori-update/{id}', [KategoriController::class, 'update'])->name('kategori-update');
Route::get('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori-destroy');
Route::get('/pdf-kategori', [KategoriController::class, 'exportpdf'])->name('pdfkategori');

Route::get('/outlet', [OutletController::class, 'index'])->name('outlet');
Route::get('/outlet-entry', [OutletController::class, 'create'])->name('outlet-entry');
Route::post('/outlet-entry', [OutletController::class, 'store'])->name('outlet-entry');
Route::post('/outlet-update/{id}', [OutletController::class, 'update'])->name('outlet-update');
Route::get('/outlet/{id}', [OutletController::class, 'destroy'])->name('outlet-destroy');
Route::get('/pdf-outlet', [OutletController::class, 'exportpdf'])->name('pdfoutlet');

Route::get('/kepalagudang', [KepalaGudangController::class, 'index'])->name('kepalagudang');
Route::get('/kepalagudang-entry', [KepalaGudangController::class, 'create'])->name('kepalagudang-entry');
Route::post('/kepalagudang-entry', [KepalaGudangController::class, 'store'])->name('kepalagudang-entry');
Route::post('/kepalagudang-update/{id}', [KepalaGudangController::class, 'update'])->name('kepalagudang-update');
Route::get('/kepalagudang/{id}', [KepalaGudangController::class, 'destroy'])->name('kepalagudang-destroy');
Route::get('/pdf-kepalagudang', [KepalaGudangController::class, 'exportpdf'])->name('pdfkepalagudang');

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/pegawai-entry', [PegawaiController::class, 'create'])->name('pegawai-entry');
Route::post('/pegawai-entry', [PegawaiController::class, 'store'])->name('pegawai-entry');
Route::post('/pegawai-update/{id}', [PegawaiController::class, 'update'])->name('pegawai-update');
Route::get('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai-destroy');
Route::get('/pdf-pegawai', [PegawaiController::class, 'exportpdf'])->name('pdfpegawai');

Route::get('/pembelianbarang', [PembelianController::class, 'index'])->name('pembelianbarang');
Route::get('/pembelianbarang-entry', [PembelianController::class, 'create'])->name('pembelianbarang-entry');
Route::post('/pembelianbarang-entry', [PembelianController::class, 'store'])->name('pembelianbarang-entry');
Route::post('/pembelianbarang-update/{id}', [PembelianController::class, 'update'])->name('pembelianbarang-update');
Route::get('/pembelianbarang/{id}', [PembelianController::class, 'destroy'])->name('pembelianbarang-destroy');
Route::get('/pdf-pembelianbarang', [PembelianController::class, 'exportpdf'])->name('pdfpembelianbarang');

Route::get('/pengiriman', [PengirimanController::class, 'index'])->name('pengiriman');
Route::get('/pengiriman-entry', [PengirimanController::class, 'create'])->name('pengiriman-entry');
Route::post('/pengiriman-entry', [PengirimanController::class, 'store'])->name('pengiriman-entry');
Route::post('/pengiriman-update/{id}', [PengirimanController::class, 'update'])->name('pengiriman-update');
Route::get('/pengiriman/{id}', [PengirimanController::class, 'destroy'])->name('pengiriman-destroy');
Route::get('/pdf-pengiriman', [PengirimanController::class, 'exportpdf'])->name('pdfpengiriman');

Route::get('/penjualanbarang', [PenjualanController::class, 'index'])->name('penjualanbarang');
Route::get('/penjualanbarang-entry', [PenjualanController::class, 'create'])->name('penjualanbarang-entry');
Route::post('/penjualanbarang-entry', [PenjualanController::class, 'store'])->name('penjualanbarang-entry');
Route::post('/penjualanbarang-update/{id}', [PenjualanController::class, 'update'])->name('penjualanbarang-update');
Route::get('/penjualanbarang/{id}', [PenjualanController::class, 'destroy'])->name('penjualanbarang-destroy');
Route::get('/pdf-penjualanbarang', [PenjualanController::class, 'exportpdf'])->name('pdfpenjualanbarang');

Route::get('/stokbarang', [StokBarangController::class, 'index'])->name('stokbarang');
Route::get('/stokbarang-entry', [StokBarangController::class, 'create'])->name('stokbarang-entry');
Route::post('/stokbarang-entry', [StokBarangController::class, 'store'])->name('stokbarang-entry');
Route::post('/stokbarang-update/{id}', [StokBarangController::class, 'update'])->name('stokbarang-update');
Route::get('/stokbarang/{id}', [StokBarangController::class, 'destroy'])->name('stokbarang-destroy');
Route::get('/pdfstokbarang', [StokBarangController::class, 'exportpdf'])->name('pdfstokbarang');

Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
Route::get('/supplier-entry', [SupplierController::class, 'create'])->name('supplier-entry');
Route::post('/supplier-entry', [SupplierController::class, 'store'])->name('supplier-entry');
Route::post('/supplier-update/{id}', [SupplierController::class, 'update'])->name('supplier-update');
Route::get('/supplier/{id}', [SupplierController::class, 'destroy'])->name('supplier-destroy');
Route::get('/pdfsupplier', [SupplierController::class, 'exportpdf'])->name('pdfsupplier');
