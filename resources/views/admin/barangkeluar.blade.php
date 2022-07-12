@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="mb-3 col-4">
<form action="{{ action('barangController@store') }}" method="POST"> @csrf 
  <label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
  <input type="text" class="form-control" name="addkdbrg" id="addkdbrg" placeholder="masukkan kode barang">
  <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
  <input type="text" class="form-control" name="addnmbrg" id="addnmbrg" placeholder="masukkan nama barang">
  <label for="exampleFormControlInput1" class="form-label">Harga</label>
  <input type="text" class="form-control"  name="addharga" id="addharga" placeholder="masukkan harga">
  <label for="exampleFormControlInput1" class="form-label">Stok</label>
  <input type="text" class="form-control" name="addstok" id="addstok"  placeholder="masukkan stok">
  <input type="submit" class="btn btn-primary btn-send mt-3"  value="Simpan"> 
</form>
</div>
@endsection
