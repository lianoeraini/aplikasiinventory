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
            'reports' => $reports        
              ];
          
          $pdf = PDF::loadView('generate_pdf', $data);
    
          return $pdf->download('Laporan Stok Gudang.pdf');
    }
}
