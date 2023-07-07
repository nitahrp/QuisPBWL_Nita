@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Data Golongan</h3>

    <form action="{{ url('/Pelanggan/' . $row->pel_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
    @csrf
            <div class="mb-3">
            <label for="">Id Golongan</label>
            <input type="text" name="pel_id_gol" class="form-control" value="{{ $row->pel_id_gol }}">
        </div>
        <div class="mb-3">
            <label for="">Nomor Pelanggan</label>
            <input type="text" name="pel_no" class="form-control" value="{{ $row->pel_no }}">
        </div>
        <div class="mb-3">
            <label for="">Nama Pelanggan</label>
            <input type="text" name="pel_nama" class="form-control" value="{{ $row->pel_nama }}">
        </div>
        <div class="mb-3">
            <label for="">Alamat Pelanggan</label>
            <input type="text" name="pel_alamat" class="form-control" value="{{ $row->pel_alamat }}">
        </div>
        <div class="mb-3">
            <label for="">No Hp Pelanggan</label>
            <input type="text" name="pel_hp" class="form-control" value="{{ $row->pel_hp }}">
        </div>
        <div class="mb-3">
            <label for="">Ktp Pelanggan</label>
            <input type="text" name="pel_ktp" class="form-control" value="{{ $row->pel_ktp }}">
        </div>
        <div class="mb-3">
            <label for="">No Seri Pelanggan</label>
            <input type="text" name="pel_seri" class="form-control" value="{{ $row->pel_seri }}">
        </div>
        <div class="mb-3">
            <label for="">No Meteran Pelanggan</label>
            <input type="text" name="pel_meteran" class="form-control" value="{{ $row->pel_meteran }}">
        </div>
        <div class="mb-3">
            <label for="">Status Pelanggan Aktif</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pel_aktif" id="inlineCheckbox1" value="Y">
            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
        </div>
        <div class="form-check form-check-inline mb-3">
            <input class="form-check-input" type="radio" id="inlineCheckbox2" name="pel_aktif" value="N">
            <label class="form-check-label" for="inlineCheckbox2">No</label>
        </div>
        <div class="mb-3">
            <label for="">Id User</label>
            <input type="text" name="pel_id_user" class="form-control" value="{{ $row->pel_id_user }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
        </form>
    </div>
@endsection