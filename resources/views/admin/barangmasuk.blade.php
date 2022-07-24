@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<h1>Input Barang Masuk</h1>
<div class="mb-3 col-4 justify-center">
<form action="{{ action('barangmasukController@store') }}" method="POST"> @csrf 
<label for="exampleFormControlInput1" class="form-label row">Pilih Barang</label>
    <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="brg" id="brg">
    @foreach($barangmasuk as $brg)
    <option value="{{$brg->kd_brg}}">{{$brg->nm_brg}}</option>
               @endforeach
    </select>
<div class="row mt-2">
    <label for="exampleFormControlInput1" class="form-label">Stok</label>
    <input type="text" class="form-control" name="addstok" id="addstok"  placeholder="masukkan stok">
</div>
    <input type="submit" class="btn btn-primary btn-send mt-3"  value="Simpan"> 
</form>
</div>
@endsection
