<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penjualan;
use PDF;
use App\Models\admin;
use App\Models\barang;
use App\Models\outlet;

class PenjualanController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        $barang = barang::all();
        $outlet= outlet::all();
        $penjualan= penjualan::all();
        return view('admin.penjualanbarang.penjualanbarang', compact('admin', 'barang', 'outlet', 'penjualan'));
    }

    public function create()
    {
        $admin = admin::all();
        $barang = barang::all();
        $outlet= outlet::all();
        return view('admin.penjualanbarang.penjualanbarang-entry', compact('admin', 'barang', 'outlet'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_penjualan' => 'required',
            'id_outlet' => 'required',
            'id_admin'=> 'required',
            'id_barang'=> 'required',
            'jml_penjualan'=> 'required',
            'tgl_penjualan'=> 'required',
            'hrg_penjualan'=> 'required',
        ]);

        penjualan::create([
            'Id_Penjualan' => $request->id_penjualan,
            'Id_Outlet' => $request->id_outlet,
            'Id_Admin' => $request->id_admin,
            'Id_Barang' => $request->id_barang,
            'Jumlah' => $request->jml_penjualan,
            'Tanggal_Penjualan' => $request->tgl_penjualan,
            'Harga_Penjualan' => $request->hrg_penjualan,
        ]);

        return redirect()->route('penjualanbarang');
    }

    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'id_penjualan' => 'required',
            'id_outlet' => 'required',
            'id_admin'=> 'required',
            'id_barang'=> 'required',
            'jml_penjualan'=> 'required',
            'tgl_penjualan'=> 'required',
            'hrg_penjualan'=> 'required',
        ]);

        $data= penjualan::find($id);    
        $data->update([
            'Id_Penjualan' => $request->id_penjualan,
            'Id_Outlet' => $request->id_outlet,
            'Id_Admin' => $request->id_admin,
            'Id_Barang' => $request->id_barang,
            'Jumlah' => $request->jml_penjualan,
            'Tanggal_Penjualan' => $request->tgl_penjualan,
            'Harga_Penjualan' => $request->hrg_penjualan,
        ]);

        return redirect()->route('penjualanbarang');
       
        // return $request;
    }

    public function destroy(string $Id_Admin)
    {
        //
        $data = penjualan::find($Id_Admin);
        $data->delete();
        return redirect('/penjualanbarang')->with('success', 'Penjualan Has Been Deleted!');
    }

    public function exportpdf(){
        $data = penjualan::all();
        $PDF = PDF::loadView('admin/penjualanbarang/penjualanbarang-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-penjualan.pdf');
    }
}
