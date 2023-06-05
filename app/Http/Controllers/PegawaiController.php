<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use PDF;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::all();
        return view('admin.pegawai.pegawai', compact('pegawai'));
    }

    public function create()
    {
        return view('admin.pegawai.pegawai-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'alt'=> 'required',
            'no_telp'=> 'required',
            'jenis_kelamin'=> 'required',
        ]);

        pegawai::create([
            'Id_Pegawai' => $request->id_pegawai,
            'Nama_Pegawai' => $request->nama_pegawai,
            'Alamat' => $request->alt,
            'No_Telp' => $request->no_telp,
            'Jenis_Kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('pegawai');
    }

    public function edit($id)
    {
        $data= admin::find($id);
        return view('admin.admin.admin-update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'alt'=> 'required',
            'no_telp'=> 'required',
            'jenis_kelamin'=> 'required',
        ]);

        $data= pegawai::find($id);    
        $data->update([
            'Id_Pegawai' => $request->id_pegawai,
            'Nama_Pegawai' => $request->nama_pegawai,
            'Alamat' => $request->alt,
            'No_Telp' => $request->no_telp,
            'Jenis_Kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('pegawai');
       
        // return $request;
    }

    public function destroy(string $Id_Pegawai)
    {
        //
        $data = pegawai::find($Id_Pegawai);
        $data->delete();
        return redirect('/pegawai')->with('success', 'Pegawai Has Been Deleted!');
    }

    public function exportpdf(){
        $data = pegawai::all();
        $PDF = PDF::loadView('admin/pegawai/pegawai-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-pegawai.pdf');
    }
}
