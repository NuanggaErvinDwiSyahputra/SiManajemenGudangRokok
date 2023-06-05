<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barangreturnpenjualan;
use Illuminate\Support\Facades\Hash;
use PDF;
use App\Models\admin;
use App\Models\barang;
use App\Models\outlet;

class BarangReturnPenjualanController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        $barang = barang::all();
        $outlet= outlet::all();
        $barangreturnpenjualan= barangreturnpenjualan::all();
        return view('admin.barangreturnpenjualan.barangreturnpenjualan', compact('admin', 'barang', 'outlet', 'barangreturnpenjualan'));
    }

    public function create()
    {
        $admin = admin::all();
        $barang = barang::all();
        $outlet= outlet::all();
        return view('admin.barangreturnpenjualan.barangreturnpenjualan-entry', compact('admin', 'barang', 'outlet'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            // 'id_barangreturnpenjualan' => 'required',
            // 'id_outlet' => 'required',
            // 'id_barang'=> 'required',
            // 'id_admin'=> 'required',
            // 'tgl_barangreturnpenjualan'=> 'required',
            // 'brg_returnpenjualan'=> 'required',
        ]);

        barangreturnpenjualan::create([
            'Id_BarangReturnPenjualan' => $request->id_barangreturnpenjualan,
            'Id_Outlet' => $request->id_outlet,
            'Id_Barang' => $request->id_barang,
            'Id_admin' => $request->id_admin,
            'Tanggal_return' => $request->tgl_barangreturnpenjualan,
            'Jumlah_Barangreturnpenjualan' => $request->brg_returnpenjualan,
        ]);

        return redirect()->route('barangreturnpenjualan');
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
            'id_barangreturnpenjualan' => 'required',
            'id_outlet' => 'required',
            'id_barang'=> 'required',
            'id_admin'=> 'required',
            'tgl_barangreturnpenjualan'=> 'required',
            'brg_returnpenjualan'=> 'required',
        ]);

        $data= barangreturnpenjualan::find($id);    
        $data->update([
            'Id_BarangReturnPenjualan' => $request->id_barangreturnpenjualan,
            'Id_Outlet' => $request->id_outlet,
            'Id_Barang' => $request->id_barang,
            'Id_admin' => $request->id_admin,
            'Tanggal_return' => $request->tgl_barangreturnpenjualan,
            'Jumlah_Barangreturnpenjualan' => $request->brg_returnpenjualan,
        ]);

        return redirect()->route('barangreturnpenjualan');
       
        // return $request;
    }

    public function destroy(string $Id_BarangReturnPenjualan)
    {
        //
        $data = barangreturnpenjualan::find($Id_BarangReturnPenjualan);
        $data->delete();
        return redirect('/barangreturnpenjualan')->with('success', 'Barang Return Penjualan Has Been Deleted!');
    }

    public function exportpdf(){
        $data = barangreturnpenjualan::all();
        $PDF = PDF::loadView('admin/barangreturnpenjualan/barangreturnpenjualan-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-barangreturnpenjualan.pdf');
    }
}
