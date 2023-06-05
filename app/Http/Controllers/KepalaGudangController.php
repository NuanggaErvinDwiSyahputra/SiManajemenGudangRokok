<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kepalagudang;
use Illuminate\Support\Facades\Hash;
use PDF;
use App\Models\pegawai;

class KepalaGudangController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::all();
        $data= kepalagudang::all();
        return view('admin.kepalagudang.kepalagudang', compact('pegawai','data'));
    }

    public function create()
    {
        $pegawai = pegawai::all();
        return view('admin.kepalagudang.kepalagudang-entry', compact('pegawai'));
    }

    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'id_kepalagudang' => 'required',
            'id_pegawai' => 'required',
            'eml'=> 'required',
            'password'=> 'required',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        kepalagudang::create([
            'Id_KepalaGudang' => $request->id_kepalagudang,
            'Id_Pegawai' => $request->id_pegawai,
            'Email' => $request->eml,
            'Password' => $validated['password'],
        ]);

        return redirect()->route('kepalagudang');
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
            'id_kepalagudang' => 'required',
            'id_pegawai' => 'required',
            'eml'=> 'required',
            'password'=> 'required',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $data= kepalagudang::find($id);    
        $data->update([
            'Id_KepalaGudang' => $request->id_kepalagudang,
            'Id_Pegawai' => $request->id_pegawai,
            'Email' => $request->eml,
            'Password' => $validated['password'],
        ]);

        return redirect()->route('kepalagudang');
       
        // return $request;
    }

    public function destroy(string $Id_KepalaGudang)
    {
        //
        $data = kepalagudang::find($Id_KepalaGudang);
        $data->delete();
        return redirect('/kepalagudang')->with('success', 'Kepala Gudang Has Been Deleted!');
    }

    public function exportpdf(){
        $data = kepalagudang::all();
        $PDF = PDF::loadView('admin/kepalagudang/kepalagudang-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-kepalagudang.pdf');
    }
}
