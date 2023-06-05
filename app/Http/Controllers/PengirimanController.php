<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengiriman;
use PDF;
use App\Models\admin;
use App\Models\penjualan;
use App\Models\barangkeluar;
use App\Models\outlet;

class PengirimanController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        $penjualan = penjualan::all();
        $barangkeluar= barangkeluar::all();
        $outlet= outlet::all();
        $pengiriman= pengiriman::all();
        return view('admin.pengiriman.pengiriman', compact('admin', 'penjualan', 'barangkeluar', 'outlet', 'pengiriman'));
    }

    public function create()
    {
        $admin = admin::all();
        $penjualan = penjualan::all();
        $barangkeluar= barangkeluar::all();
        $outlet= outlet::all();
        return view('admin.pengiriman.pengiriman-entry', compact('admin', 'penjualan', 'barangkeluar', 'outlet'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pengiriman' => 'required',
            'id_penjualan' => 'required',
            'id_barangkeluar'=> 'required',
            'id_olt'=> 'required',
            'id_admin'=> 'required',
            'tanggal_pengiriman'=> 'required',
        ]);

        pengiriman::create([
            'Id_Pengiriman' => $request->id_pengiriman,
            'Id_Penjualan' => $request->id_penjualan,
            'Id_BarangKeluar' => $request->id_barangkeluar,
            'Id_Outlet' => $request->id_olt,
            'Id_Admin' => $request->id_admin,
            'Tanggal_Pengiriman' => $request->tanggal_pengiriman,
        ]);

        return redirect()->route('pengiriman');
    }

    public function edit($id)
    {
        $data= pengiriman::find($id);
        return view('admin.pengiriman.pengiriman-update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'id_pengiriman' => 'required',
            'id_penjualan' => 'required',
            'id_barangkeluar'=> 'required',
            'id_olt'=> 'required',
            'id_admin'=> 'required',
            'tanggal_pengiriman'=> 'required',
        ]);

        $data= pengiriman::find($id);    
        $data->update([
            'Id_Pengiriman' => $request->id_pengiriman,
            'Id_Penjualan' => $request->id_penjualan,
            'Id_BarangKeluar' => $request->id_barangkeluar,
            'Id_Outlet' => $request->id_olt,
            'Id_Admin' => $request->id_admin,
            'Tanggal_Pengiriman' => $request->tanggal_pengiriman,
        ]);

        return redirect()->route('pengiriman');
       
        // return $request;
    }

    public function destroy(string $Id_Pengiriman)
    {
        //
        $data = pengiriman::find($Id_Pengiriman);
        $data->delete();
        return redirect('/pengiriman')->with('success', 'Pengiriman Has Been Deleted!');
    }

    public function exportpdf(){
        $data = pengiriman::all();
        $PDF = PDF::loadView('admin/pengiriman/pengiriman-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-pengiriman.pdf');
    }
}
