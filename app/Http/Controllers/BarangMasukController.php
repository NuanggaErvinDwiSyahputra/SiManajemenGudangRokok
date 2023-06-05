<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barangmasuk;
use Illuminate\Support\Facades\Hash;
use PDF;
use App\Models\admin;
use App\Models\pembelian;

class BarangMasukController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        $pembelian = pembelian::all();
        $barangmasuk= barangmasuk::all();
        return view('admin.barangmasuk.barangmasuk', compact('admin', 'pembelian', 'barangmasuk'));
    }

    public function create()
    {
        $admin = admin::all();
        $pembelian = pembelian::all();
        return view('admin.barangmasuk.barangmasuk-entry', compact('admin', 'pembelian'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_barangmasuk' => 'required',
            'id_pembelian' => 'required',
            'id_admin'=> 'required',
            'tgl_barangmasuk'=> 'required',
            'jml_barangmasuk'=> 'required',
        ]);

        barangmasuk::create([
            'Id_BarangMasuk' => $request->id_barangmasuk,
            'Id_Pembelian' => $request->id_pembelian,
            'Id_admin' => $request->id_admin,
            'Tanggal_Masuk' => $request->tgl_barangmasuk,
            'Jumlah' => $request->jml_barangmasuk,
        ]);

        return redirect()->route('barangmasuk');
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
            'id_barangmasuk' => 'required',
            'id_pembelian' => 'required',
            'id_admin'=> 'required',
            'tgl_barangmasuk'=> 'required',
            'jml_barangmasuk'=> 'required',
        ]);

        $barangmasuk= barangmasuk::find($id);    
        $barangmasuk->update([
            'Id_BarangMasuk' => $request->id_barangmasuk,
            'Id_Pembelian' => $request->id_pembelian,
            'Id_admin' => $request->id_admin,
            'Tanggal_Masuk' => $request->tgl_barangmasuk,
            'Jumlah' => $request->jml_barangmasuk,
        ]);

        return redirect()->route('barangmasuk');
       
        // return $request;
    }

    public function destroy(string $Id_BarangMasuk)
    {
        //
        $data = barangmasuk::find($Id_BarangMasuk);
        $data->delete();
        return redirect('/barangmasuk')->with('success', 'Barang Masuk Has Been Deleted!');
    }

    public function exportpdf(){
        $data = barangmasuk::all();
        $PDF = PDF::loadView('admin/barangmasuk/barangmasuk-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-barangmasuk.pdf');
    }
}
