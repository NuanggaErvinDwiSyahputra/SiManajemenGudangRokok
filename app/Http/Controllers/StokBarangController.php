<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stokbarang;
use PDF;
use App\Models\admin;
use App\Models\barang;
use App\Models\kategori;

class StokBarangController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        $barang = barang::all();
        $kategori = kategori::all();
        $stokbarang= stokbarang::all();
        return view('admin.stokbarang.stokbarang', compact('admin', 'barang', 'kategori', 'stokbarang'));
    }

    public function create()
    {
        $admin = admin::all();
        $barang = barang::all();
        $kategori = kategori::all();
        return view('admin.stokbarang.stokbarang-entry', compact('admin', 'barang', 'kategori'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_stokbarang' => 'required',
            'id_barang' => 'required',
            'id_kategori'=> 'required',
            'id_admin'=> 'required',
            'stok_barang'=> 'required',
        ]);

        stokbarang::create([
            'Id_StokBarang' => $request->id_stokbarang,
            'Id_Barang' => $request->id_barang,
            'Id_Kategori' => $request->id_kategori,
            'Id_Admin' => $request->id_admin,
            'Stok_Barang' => $request->stok_barang,
        ]);

        return redirect()->route('stokbarang');
    }

    public function edit($id)
    {
        $data= stokbarang::find($id);
        return view('admin.stokbarang.stokbarang-update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'id_stokbarang' => 'required',
            'id_barang' => 'required',
            'id_kategori'=> 'required',
            'id_admin'=> 'required',
            'stok_barang'=> 'required',
        ]);

        $data= stokbarang::find($id);    
        $data->update([
            'Id_StokBarang' => $request->id_stokbarang,
            'Id_Barang' => $request->id_barang,
            'Id_Kategori' => $request->id_kategori,
            'Id_Admin' => $request->id_admin,
            'Stok_Barang' => $request->stok_barang,
        ]);

        return redirect()->route('stokbarang');
       
        // return $request;
    }

    public function destroy(string $Id_StokBarang)
    {
        //
        $data = stokbarang::find($Id_StokBarang);
        $data->delete();
        return redirect('/stokbarang')->with('success', 'Stok Barang Has Been Deleted!');
    }

    public function exportpdf(){
        $data = stokbarang::all();
        $PDF = PDF::loadView('admin/stokbarang/stokbarang-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-stokbarang.pdf');
    }
}