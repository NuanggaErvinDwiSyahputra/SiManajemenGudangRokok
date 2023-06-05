<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;
use PDF;

class SupplierController extends Controller
{
    public function index()
    {
        return view('admin.supplier.supplier',
        [
            "supplier" => supplier::latest()->get()
        ]);
    }

    public function create()
    {
        return view('admin.supplier.supplier-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_supplier' => 'required',
            'nama_supplier' => 'required',
            'alt'=> 'required',
            'no_telp'=> 'required',
        ]);

        supplier::create([
            'Id_Supplier' => $request->id_supplier,
            'Nama_Supplier' => $request->nama_supplier,
            'Alamat' => $request->alt,
            'No_Telp' => $request->no_telp,
        ]);

        return redirect()->route('supplier');
    }

    public function edit($id)
    {
        $data= supplier::find($id);
        return view('admin.supplier.supplier-update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'id_supplier' => 'required',
            'nama_supplier' => 'required',
            'alt'=> 'required',
            'no_telp'=> 'required',
        ]);

        $data= supplier::find($id);    
        $data->update([
            'Id_Supplier' => $request->id_supplier,
            'Nama_Supplier' => $request->nama_supplier,
            'Alamat' => $request->alt,
            'No_Telp' => $request->no_telp,
        ]);

        return redirect()->route('supplier');
       
        // return $request;
    }

    public function destroy(string $Id_Admin)
    {
        //
        $data = supplier::find($Id_Admin);
        $data->delete();
        return redirect('/supplier')->with('success', 'Supplier Has Been Deleted!');
    }

    public function exportpdf(){
        $data = supplier::all();
        $PDF = PDF::loadView('admin/supplier/supplier-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-supplier.pdf');
    }
}
