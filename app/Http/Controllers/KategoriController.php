<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use PDF;
use App\Models\admin;
use App\Models\barang;

class KategoriController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        $barang = barang::all();
        $kategori= kategori::all();
        return view('admin.kategori.kategori', compact('admin', 'barang', 'kategori'));
    }

    public function create()
    {
        $admin = admin::all();
        $barang = barang::all();
        return view('admin.kategori.kategori-entry', compact('admin', 'barang'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_kategori' => 'required',
            'id_barang' => 'required',
            'id_admin'=> 'required',
            'kategori'=> 'required',
        ]);

        kategori::create([
            'Id_Kategori' => $request->id_kategori,
            'Id_Barang' => $request->id_barang,
            'Id_admin' => $request->id_admin,
            'Kategori' => $request->kategori,
        ]);

        return redirect()->route('kategori');
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
            'id_kategori' => 'required',
            'id_barang' => 'required',
            'id_admin'=> 'required',
            'kategori'=> 'required',
        ]);

        $data= kategori::find($id);    
        $data->update([
            'Id_Kategori' => $request->id_kategori,
            'Id_Barang' => $request->id_barang,
            'Id_admin' => $request->id_admin,
            'Kategori' => $request->kategori,
        ]);

        return redirect()->route('kategori');
       
        // return $request;
    }

    public function destroy(string $Id_Kategori)
    {
        //
        $data = kategori::find($Id_Kategori);
        $data->delete();
        return redirect('/kategori')->with('success', 'Kategori Has Been Deleted!');
    }

    public function exportpdf(){
        $data = kategori::all();
        $PDF = PDF::loadView('admin/kategori/kategori-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-kategori.pdf');
    }
}
