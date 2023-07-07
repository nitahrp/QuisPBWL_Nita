@extends('layouts.app')

@section('content')

<h2>Input Golongan</h2>

<form action="{{ url('/Golongan') }}" method="post">
    @csrf
    <div class="mb-3">
        <label>Kode</label>
            <input type="text" name="gol_kode" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nama</label>
            <input type="text" name="gol_nama" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection