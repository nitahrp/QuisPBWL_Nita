@extends('layouts.app')

@section('content')

<div class="container">

<h2>Input Users</h2>

<form action="{{ url('/Users') }}" method="post">
    @csrf
        <div class="mb-3">
            <label for="">Id Users</label>
            <input type="text" name="user_id" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Email Users</label>
            <input type="text" name="user_email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Password Users</label>
            <input type="text" name="user_password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Nama Users</label>
            <input type="text" name="user_nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Alamat Users</label>
            <input type="text" name="user_alamat" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No Hp Users</label>
            <input type="text" name="user_hp" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Pos Users</label>
            <input type="text" name="user_pos" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Role Users</label>
            <input type="text" name="user_role" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Status Users Aktif</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="user_aktif" id="inlineCheckbox1" value="Y">
            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
        </div>
        <div class="form-check form-check-inline mb-3">
            <input class="form-check-input" type="radio" id="inlineCheckbox2" name="user_aktif" value="N">
            <label class="form-check-label" for="inlineCheckbox2">No</label>
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
        </form>
    </div>

@endsection
    