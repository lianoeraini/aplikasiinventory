<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function print()
    {
        
        $reports=\App\Report::All();
        $data = [
            'title' => 'Laporan Stok Gudang',
            'heading' => 'Laporan Stok Gudang',
            'address1' => 'Jl Tongkol Raya Blok BA No 1',
            'address2' => 'Komplek Kopassus Kedayu',
            'address3' => 'Kel. Sukatani, Kec. Tapos, Depok',
            'reports' => $reports        
              ];
          
          $pdf = PDF::loadView('generate_pdf', $data);
    
          return $pdf->download('Laporan Stok Gudang.pdf');
    }
}

