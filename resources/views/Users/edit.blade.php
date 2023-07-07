@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Data User</h3>

    <form action="{{ url('/Users/' . $row->user_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
    @csrf
            <div class="mb-3">
            <label for="">Id Golongan</label>
            <input type="text" name="user_id" class="form-control" value="{{ $row->user_id }}">
        </div>
        <div class="mb-3">
            <label for="">Email User</label>
            <input type="text" name="user_email" class="form-control" value="{{ $row->user_email }}">
        </div>
        <div class="mb-3">
            <label for="">Password User</label>
            <input type="text" name="user_password" class="form-control" value="{{ $row->user_password }}">
        </div>
        <div class="mb-3">
            <label for="">Nama User</label>
            <input type="text" name="user_nama" class="form-control" value="{{ $row->user_nama }}">
        </div>
        <div class="mb-3">
            <label for="">Alamat User</label>
            <input type="text" name="user_alamat" class="form-control" value="{{ $row->user_alamat }}">
        </div>
        <div class="mb-3">
            <label for="">No Hp User</label>
            <input type="text" name="user_hp" class="form-control" value="{{ $row->user_hp }}">
        </div>
        <div class="mb-3">
            <label for="">Pos User</label>
            <input type="text" name="user_pos" class="form-control" value="{{ $row->user_pos }}">
        </div>
        <div class="mb-3">
            <label for="">Role User</label>
            <input type="text" name="user_role" class="form-control" value="{{ $row->user_role }}">
        </div>
        <div class="mb-3">
            <label for="">Status User Aktif</label>
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