@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Data Golongan</h3>

    <form action="{{ url('/Golongan/' . $row->gol_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label>Kode</label>
            <input type="text" name="gol_kode" class="form-control" value="{{ $row->gol_kode }}"></>
    </div>
    <div class="mb-3">
        <label>Nama</label>
            <input type="text" name="gol_nama" class="form-control" value="{{ $row->gol_nama }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE">
    </div>
</form>
</div>


@endsection