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

    public function store(Request $request)
    {
        $update_barang = \App\Barang::findOrFail($request->get('brg')); 
        
        $update_barang->stok = $update_barang->stok + $request->get('addstok');
        // $update_barang->stok=$request->get('addstok'); 
        // $update_barang->save(); 
        $update_barang->save();
 
        $tambah_report=new \App\Report; 
        $tambah_report->date = date('Y-m-d H:i:s');
        $tambah_report->kd_brg = $request->get('brg'); 
        $tambah_report->nm_brg = $update_barang->nm_brg;
        $tambah_report->brngkeluar = 0;
        $tambah_report->brngmasuk = $request->get('addstok');
        $tambah_report->stok = $update_barang->stok; 
        $tambah_report->save(); 

        Alert::success('Barang Masuk', 'Stok '.$update_barang->nm_brg.' berhasil ditambahkan');
        // Alert::success('Sukses', 'Stok berhasil di tambah!');
        return redirect()->route('barangmasuk.index');
    } 
}