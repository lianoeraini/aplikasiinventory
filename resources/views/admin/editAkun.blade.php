@extends('layouts.layout') 
@section('content')
@include('sweetalert::alert') 
<form action="{{route('akun.update', [$akun->no_akun])}}" method="POST"> @csrf 
    <input type="hidden" name="_method" value="PUT"> 
    <fieldset> 
        <legend>Ubah Data Akun</legend> 
        <div class="form-group row"> 
            <div class="col-md-5"> 
                <label for="addkdakn">Kode Akun</label> 
                <input class="form-control" type="text" name="addkdakn" value="{{$akun->no_akun}}" readonly> 
            </div> 
            <div class="col-md-5"> 
                <label for="addnmakn">Nama Akun</label> 
                <input id="addnmakn" type="text" name="addnmakn" class="form-control" value="{{$akun->nm_akun}}"> 
            </div>
        </div>
    </fieldset> 
    <div class="col-md-10"> 
        <input type="submit" class="btn btn-success btn-send" value="Update"> 
        <a href="{{ route('akun.index') }}">
            <input type="Button" class="btn btn-primary btn-send" value="Kembali">
        </a> 
    </div> 
    <hr> 
</form> 
@endsection