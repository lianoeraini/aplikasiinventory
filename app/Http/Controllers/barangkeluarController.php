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
        $barangkeluar=\App\barangkeluar::All(); 
        return view('admin.barangkeluar',['barangkeluar'=>$barangkeluar]);
    }   
}
