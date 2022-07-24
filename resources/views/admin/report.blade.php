@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Stok Gudang</h1> 
</div> 
<hr>
<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <div class="card-body"> 
        <div class="table-responsive"> 
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0"> 
                <thead class="thead-dark"> 
                    <tr> 
                        <th align="center">No</th> 
                        <th align="center">Tanggal</th> 
                        <th align="center">Nama Barang</th> 
                        <th align="center">Barang Masuk</th> 
                        <th align="center">Barang Keluar</th> 
                        <th align="center">Stok</th>
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach($reports as $index => $report) 
                    <tr> 
                        <td>{{$index+1}}</td> 
                        <td>{{ $report->date}}</td> 
                        <td>{{ $report->nm_brg}}</td> 
                        <td>{{ $report->brngmasuk}}</td>
                        <td>{{ $report->brngkeluar}}</td> 
                        <td>{{ number_format($report->stok)}}</td>
                    </tr> 
                    @endforeach 
                </tbody> 
            </table> 
        </div> 
    </div> 
</div>
<div class="row ml-3 mb-2">
            <a href="{{ route('print')}}" class="btn btn-sm btn-danger"> Cetak</a>
</div>
<!-- <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-scrollable" role="document"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data Barang</h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button> 
            </div> 
            <form action="{{ action('barangController@store') }}" method="POST"> @csrf 
                <div class="modal-body"> 
                    <div class="form-group"> 
                        <label for="exampleFormControlInput1">Kode Barang</label> 
                        <input type="text" name="addkdbrg" id="addkdbrg" class="form-control" maxlegth="5" id="exampleFormControlInput1" > 
                    </div> 
                    <div class="form-group"> 
                        <label for="exampleFormControlInput1">Nama Barang</label> 
                        <input type="text" name="addnmbrg" id="addnmbrg" class="form-control" id="exampleFormControlInput1" > 
                    </div> 
                    <div class="form-group"> 
                        <label for="exampleFormControlInput1">Harga Barang</label> 
                        <input type="number" name="addharga" id="addharga" class="form-control" id="exampleFormControlInput1" > 
                    </div> 
                    <div class="form-group"> 
                        <label for="exampleFormControlInput1">Stok Barang</label> 
                        <input type="number" name="addstok" id="addstok" class="form-control" id="exampleFormControlInput1" > 
                    </div> 
                </div> 
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button> 
                    <input type="submit" class="btn btn-primary btn-send" value="Simpan"> 
                </div> 
                </div> 
            </form>
        </div> 
    </div>  -->
@endsection