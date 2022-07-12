@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="mb-3 col-4 justify-center">
<form action="{{ action('barangmasukController@inputBarangMasuk') }}" method="POST"> @csrf 
<label for="exampleFormControlInput1" class="form-label row">Pilih Barang</label>
    <select class="form-select form-select-lg mb-3" aria-label="Default select example">
    @foreach($barangmasuk as $brg)
    <option value="{{$brg->id}}">{{$brg->nm_brg}}     </option>
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
