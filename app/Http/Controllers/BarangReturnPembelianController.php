<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barangreturnpembelian;
use Illuminate\Support\Facades\Hash;
use PDF;
use App\Models\admin;
use App\Models\barang;

class BarangReturnPembelianController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        $barang = barang::all();
        $barangreturnpembelian= barangreturnpembelian::all();
        return view('admin.barangreturnpembelian.barangreturnpembelian', compact('admin', 'barang', 'barangreturnpembelian'));
    }

    public function create()
    {
        $admin = admin::all();
        $barang = barang::all();
        return view('admin.barangreturnpembelian.barangreturnpembelian-entry', compact('admin', 'barang'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_barangreturnpembelian' => 'required',
            'id_barang' => 'required',
            'id_admin'=> 'required',
            'tgl_returnpembelian'=> 'required',
            'jml_returnpembelian'=> 'required',
        ]);

        barangreturnpembelian::create([
            'Id_BarangReturnPembelian' => $request->id_barangreturnpembelian,
            'Id_Barang' => $request->id_barang,
            'Id_Admin' => $request->id_admin,
            'Tanggal_return' => $request->tgl_returnpembelian,
            'Jumlah_BarangReturnPembelian' => $request->jml_returnpembelian,
        ]);

        return redirect()->route('barangreturnpembelian');
    }

    public function edit($id)
    {
        $data= barangreturnpembelian::find($id);
        return view('admin.barangreturnpembelian.barangreturnpembelian-update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $validated = $this->validate($request, [
            'id_barangreturnpembelian' => 'required',
            'id_barang' => 'required',
            'id_admin'=> 'required',
            'tgl_returnpembelian'=> 'required',
            'jml_returnpembelian'=> 'required',
        ]);

        $data= barangreturnpembelian::find($id);    
        $data->update([
            'Id_BarangReturnPembelian' => $request->id_barangreturnpembelian,
            'Id_Barang' => $request->id_barang,
            'Id_Admin' => $request->id_admin,
            'Tanggal_return' => $request->tgl_returnpembelian,
            'Jumlah_BarangReturnPembelian' => $request->jml_returnpembelian,
        ]);

        return redirect()->route('barangreturnpembelian');
       
        // return $request;
    }

    public function destroy(string $Id_Admin)
    {
        //
        $data = barangreturnpembelian::find($Id_Admin);
        $data->delete();
        return redirect('/barangreturnpembelian')->with('success', 'Admin Has Been Deleted!');
    }

    public function exportpdf(){
        $data = barangreturnpembelian::all();
        $PDF = PDF::loadView('admin/barangreturnpembelian/barangreturnpembelian-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-barangreturnpembelian.pdf');
    }
}
