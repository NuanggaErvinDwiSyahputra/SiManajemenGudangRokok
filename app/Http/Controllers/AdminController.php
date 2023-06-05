<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use PDF;
use App\Models\pegawai;

class AdminController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::all();
        $data= admin::all();
        return view('admin.admin.admin', compact('pegawai','data'));
    }

    public function create()
    {
        $pegawai = pegawai::all();
        return view('admin.admin.admin-entry', compact('pegawai'));
    }

    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'id_admin' => 'required',
            'id_pegawai' => 'required',
            'eml'=> 'required',
            'password'=> 'required',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        admin::create([
            'Id_Admin' => $request->id_admin,
            'Id_Pegawai' => $request->id_pegawai,
            'Email_Pengguna' => $request->eml,
            'Password' => $validated['password'],
        ]);

        return redirect()->route('admin');
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
            'id_admin' => 'required',
            'id_pegawai' => 'required',
            'eml'=> 'required',
            'password'=> 'required',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $data= admin::find($id);    
        $data->update([
            'Id_Admin' => $request->id_admin,
            'Id_Pegawai' => $request->id_pegawai,
            'Email_Pengguna' => $request->eml,
            'Password' => $validated['password'],
        ]);

        return redirect()->route('admin');
       
        // return $request;
    }

    public function destroy(string $Id_Admin)
    {
        //
        $data = admin::find($Id_Admin);
        $data->delete();
        return redirect('/admin')->with('success', 'Admin Has Been Deleted!');
    }

    public function exportpdf(){
        $data = admin::all();
        $PDF = PDF::loadView('admin/admin/admin-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-admin.pdf');
    }
}
