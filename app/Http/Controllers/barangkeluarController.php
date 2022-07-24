<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Barangkeluar;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facaded\DB;

class barangkeluarController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangkeluar=\App\barang::All(); 
        return view('admin.barangkeluar',['barangkeluar'=>$barangkeluar]);
    }
    
    public function store(Request $request)
    {
        $update_barang = \App\Barang::findOrFail($request->get('brg')); 
        
        $update_barang->stok = $update_barang->stok - $request->get('addstok');
        // $update_barang->stok=$request->get('addstok'); 
        // dd($update_barang->stok);
        if($update_barang->stok < 0){
            Alert::warning('Gagal', 'Stok yang ingin dikurangi melebihi stok gudang');
        } else if ($update_barang->stok == 0) {
            $update_barang->delete(); 
            Alert::success('Berhasil','Stok di gudang sama dengan stok yang ingin dikurangi, otomatis barang terhapus'); 
        } else {
            $update_barang->save(); 
            $tambah_report=new \App\Report; 
            $tambah_report->date = date('Y-m-d H:i:s');
            $tambah_report->kd_brg = $request->get('brg'); 
            $tambah_report->nm_brg = $update_barang->nm_brg;
            $tambah_report->brngkeluar = $request->get('addstok');
            $tambah_report->brngmasuk = 0;
            $tambah_report->stok = $update_barang->stok; 
            $tambah_report->save(); 
            Alert::success('Berhasil', 'Stok '.$update_barang->nm_brg.' berhasil dikurangi');

        }
        // $update_barang->save(); 
        // Alert::success('Sukses', 'Stok berhasil di tambah!');
        return redirect()->route('barangkeluar.index');
    } 
}
