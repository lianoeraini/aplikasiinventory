<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Barangmasuk;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facaded\DB;

class barangmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangmasuk=\App\barang::All(); 
        return view('admin.barangmasuk',['barangmasuk'=>$barangmasuk]);
    }  

    public function inputBarangMasuk(Request $request, $id)
    {
        $update_barang = \App\Barang::findOrFail($id); 
        dd('$update_barang', $update_barang);
        $update_barang->stok=$request->get('addstok'); 
        $update_barang->save(); 
        Alert::success('Update', 'Data Berhasil di update');
        return redirect()->route('barang.index');
    } 
}