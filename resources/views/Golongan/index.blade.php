@extends ('layouts.app')

@section('content')

<div class="container">

<h2>
    Data Golongan
    <a class="btn btn-primary btn-sm float-end" href="{{ url('Golongan/create') }}">Tambah Data</a>
</h2>

<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{$row->gol_id}}</td>
        <td>{{$row->gol_kode}}</td>
        <td>{{$row->gol_nama}}</td>
        <td><a href="{{ url('Golongan/' . $row->gol_id . '/edit') }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('Golongan/' . $row->gol_id) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            @csrf
            <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>

@endsection