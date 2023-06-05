<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use Illuminate\Support\Facades\Hash;
use PDF;
use App\Models\admin;
use App\Models\penjualan;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        $penjualan = penjualan::all();
        $barangkeluar= barangkeluar::all();
        return view('admin.barangkeluar.barangkeluar', compact('admin', 'penjualan', 'barangkeluar'));
    }

    public function create()
    {
        $admin = admin::all();
        $penjualan = penjualan::all();
        return view('admin.barangkeluar.barangkeluar-entry', compact('admin', 'penjualan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_barangkeluar' => 'required',
            'id_penjualan' => 'required',
            'id_admin'=> 'required',
            'tgl_barangkeluar'=> 'required',
            'jml_barangkeluar'=> 'required',
        ]);

        barangkeluar::create([
            'Id_BarangKeluar' => $request->id_barangkeluar,
            'Id_Penjualan' => $request->id_penjualan,
            'Id_admin' => $request->id_admin,
            'Tanggal_Keluar' => $request->tgl_barangkeluar,
            'Jumlah' => $request->jml_barangkeluar,
        ]);

        return redirect()->route('barangkeluar');
    }

    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $validated = $this->validate($request, [
            'id_barangkeluar' => 'required',
            'id_penjualan' => 'required',
            'id_admin'=> 'required',
            'tgl_barangkeluar'=> 'required',
            'jml_barangkeluar'=> 'required',
        ]);

        $data= barangkeluar::find($id);       
        $data->update([
            'Id_BarangKeluar' => $request->id_barangkeluar,
            'Id_Penjualan' => $request->id_penjualan,
            'Id_admin' => $request->id_admin,
            'Tanggal_Keluar' => $request->tgl_barangkeluar,
            'Jumlah' => $request->jml_barangkeluar,
        ]);

        return redirect()->route('barangkeluar');
       
        // return $request;
    }

    public function destroy(string $Id_BarangKeluar)
    {
        //
        $data = barangkeluar::find($Id_BarangKeluar);
        $data->delete();
        return redirect('/barangkeluar')->with('success', 'Barang Keluar Has Been Deleted!');
    }

    public function exportpdf(){
        $data = barangkeluar::all();
        $PDF = PDF::loadView('admin/barangkeluar/barangkeluar-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-barangkeluar.pdf');
    }
}
