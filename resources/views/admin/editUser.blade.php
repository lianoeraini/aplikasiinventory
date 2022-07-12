@extends('layouts.layout')
@section('content')
    <form action="{{route('user.update',[$user->id])}}" method="POST"> @csrf
        <input type="hidden" name="_method" value="PUT">
        <fieldset>
            <legend>Ubah Akses User</legend>
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="kode">Kode User</label>
                    <input class="form-control" type="text" name="kode" value="{{$user->id}}" readonly>
                </div>
                <div class="col-md-5">
                    <label for="user">Nama User</label>
                    <input id="name" type="text" name="name" value="{{$user->name}}" class="form-control" readonly>
                </div>
                <div class="col-md-5">
                    <label for="email">Email User</label>
                    <input id="email" type="text" name="email" value="{{$user->email}}" class="form-control" readonly>
                </div>
                <div class="col-md-2">
                    @foreach ($user ->roles as $role)
                        <label for="akses">Akses</label>
                        <input id="akses" type="text" name="akses" class="form-control" value="{{$role->id}}" readonly>
                    @endforeach
                </div>
                <div class="col-md-2">
                    <label for="akses">Ubah Akses User</label>
                    <select id="roles" type="text" name="role" class="form-control" required>
                        <option value="">- Pilih Akses -</option>
                        <option value="ADMIN">1. Admin</option>
                        <option value="USER">2. User</option>
                    </select>
                </div>
            </div>
        </fieldset>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Ubah Akses">
            <a href="{{route('user.index')}}"><input type="button" class="btn btn-primary btn-send" value="Kembali"></a>
        </div>
@endsection