<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembelian;
use PDF;
use App\Models\admin;
use App\Models\supplier;

class PembelianController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        $supplier = supplier::all();
        $pembelian= pembelian::all();
        return view('admin.pembelianbarang.pembelianbarang', compact('admin', 'supplier', 'pembelian'));
    }

    public function create()
    {
        $admin = admin::all();
        $supplier = supplier::all();
        return view('admin.pembelianbarang.pembelianbarang-entry', compact('admin', 'supplier'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pembelian' => 'required',
            'id_supllier' => 'required',
            'id_admin'=> 'required',
            'nama_barang'=> 'required',
            'jumlah_pembelian'=> 'required',
            'tanggal_pembelian'=> 'required',
            'harga_pembelian'=> 'required',
        ]);

        pembelian::create([
            'Id_Pembelian' => $request->id_pembelian,
            'Id_Supplier' => $request->id_supllier,
            'Id_Admin' => $request->id_admin,
            'Nama_Barang' => $request->nama_barang,
            'Jumlah' => $request->jumlah_pembelian,
            'Tanggal_Pembelian' => $request->tanggal_pembelian,
            'Harga_Pembelian' => $request->harga_pembelian,
        ]);

        return redirect()->route('pembelianbarang');
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
            'id_pembelian' => 'required',
            'id_supllier' => 'required',
            'id_admin'=> 'required',
            'nama_barang'=> 'required',
            'jumlah_pembelian'=> 'required',
            'tanggal_pembelian'=> 'required',
            'harga_pembelian'=> 'required',
        ]);

        $data= pembelian::find($id);    
        $data->update([
            'Id_Pembelian' => $request->id_pembelian,
            'Id_Supplier' => $request->id_supllier,
            'Id_Admin' => $request->id_admin,
            'Nama_Barang' => $request->nama_barang,
            'Jumlah' => $request->jumlah_pembelian,
            'Tanggal_Pembelian' => $request->tanggal_pembelian,
            'Harga_Pembelian' => $request->harga_pembelian,
        ]);

        return redirect()->route('pembelianbarang');
       
        // return $request;
    }

    public function destroy(string $Id_Pembelian)
    {
        //
        $data = pembelian::find($Id_Pembelian);
        $data->delete();
        return redirect('/pembelianbarang')->with('success', 'pembelianbarang Has Been Deleted!');
    }

    public function exportpdf(){
        $data = pembelian::all();
        $PDF = PDF::loadView('admin/pembelianbarang/pembelianbarang-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-pembelianbarang.pdf');
    }
}
