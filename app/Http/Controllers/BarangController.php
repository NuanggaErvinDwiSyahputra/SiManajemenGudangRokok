<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use Illuminate\Support\Facades\Hash;
use PDF;
use App\Models\admin;
use App\Models\barangmasuk;
use App\Models\pembelian;

class BarangController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        $barangmasuk = barangmasuk::all();
        $pembelian = pembelian::all();
        $barang= barang::all();
        return view('admin.barang.barang', compact('admin', 'barangmasuk', 'pembelian','barang'));
    }

    public function create()
    {
        $admin = admin::all();
        $barangmasuk = barangmasuk::all();
        $pembelian = pembelian::all();
        return view('admin.barang.barang-entry', compact('admin', 'barangmasuk', 'pembelian'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_barang' => 'required',
            'id_barangmasuk' => 'required',
            'id_admin'=> 'required',
            'kode_barang'=> 'required',
            'nama_barang'=> 'required',
        ]);

        barang::create([
            'Id_Barang' => $request->id_barang,
            'Id_BarangMasuk' => $request->id_barangmasuk,
            'Id_Admin' => $request->id_admin,
            'Kode_Barang' => $request->kode_barang,
            'Nama_Barang' => $request->nama_barang,
        ]);

        return redirect()->route('barang');
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
            'id_barang' => 'required',
            'id_barangmasuk' => 'required',
            'id_admin'=> 'required',
            'kode_barang'=> 'required',
            'nama_barang'=> 'required',
        ]);

        $data= barang::find($id);
        $data->update([
            'Id_Barang' => $request->id_barang,
            'Id_BarangMasuk' => $request->id_barangmasuk,
            'Id_Admin' => $request->id_admin,
            'Kode_Barang' => $request->kode_barang,
            'Nama_Barang' => $request->nama_barang,
        ]);

        return redirect()->route('barang');
       
        // return $request;
    }

    public function destroy(string $Id_Barang)
    {
        //
        $data = barang::find($Id_Barang);
        $data->delete();
        return redirect('/barang')->with('success', 'barang Has Been Deleted!');
    }

    public function exportpdf(){
        $data = barang::all();
        $PDF = PDF::loadView('admin/barang/barang-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-barang.pdf');
    }
}
