<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\outlet;
use Illuminate\Support\Facades\Hash;
use PDF;

class OutletController extends Controller
{
    public function index()
    {
        return view('admin.outlet.outlet',
        [
            "outlet" => outlet::latest()->get()
        ]);

    }

    public function create()
    {
        return view('admin.outlet.outlet-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_outlet' => 'required',
            'nama_outlet' => 'required',
            'alt'=> 'required',
            'no_telp'=> 'required',
        ]);

        outlet::create([
            'Id_Outlet' => $request->id_outlet,
            'Nama_Outlet' => $request->nama_outlet,
            'Alamat' => $request->alt,
            'No_Telp' => $request->no_telp,
        ]);  
        return redirect()->route('outlet');
    }

    public function edit($id)
    {
        $data= outlet::find($id);
        return view('admin.outlet.outlet-update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'id_outlet' => 'required',
            'nama_outlet' => 'required',
            'alt'=> 'required',
            'no_telp'=> 'required',
        ]);

        $data= outlet::find($id);    
        $data->update([
            'Id_Outlet' => $request->id_outlet,
            'Nama_Outlet' => $request->nama_outlet,
            'Alamat' => $request->alt,
            'No_Telp' => $request->no_telp,
        ]);

        return redirect()->route('outlet');
       
        // return $request;
    }

    public function destroy(string $Id_Outlet)
    {
        //
        $data = outlet::find($Id_Outlet);
        $data->delete();
        return redirect('/outlet')->with('success', 'Outlet Has Been Deleted!');
    }

    public function exportpdf(){
        $data = outlet::all();
        $PDF = PDF::loadView('admin/outlet/outlet-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-outlet.pdf');
    }
}
