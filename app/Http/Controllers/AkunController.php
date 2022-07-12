<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Akun;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facaded\DB;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun=\App\Akun::All(); 
        return view('admin.akun',['akun'=>$akun]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_akun=new \App\Akun; 
        $tambah_akun->no_akun = $request->addkdakn; 
        $tambah_akun->nm_akun = $request->addnmakn; 
        $tambah_akun->save(); 
        Alert::success('Pesan','Data berhasil disimpan'); 
        return redirect()->route('akun.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $akun_edit= \App\Akun::findOrFail($id);
        return view('admin.editAkun',['akun'=>$akun_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_akun = \App\Akun::findOrFail($id); 
        $update_akun->no_akun=$request->get('addkdakn'); 
        $update_akun->nm_akun=$request->get('addnmakn');
        $update_akun->save(); 
        Alert::success('Update', 'Data Berhasil di update');
        return redirect()->route('akun.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $akun=\App\Akun::findOrFail($kd_akn); 
        $akun->delete(); 
        Alert::success('Pesan','Data berhasil dihapus'); 
        return redirect()->route('akun.index');
    }
}