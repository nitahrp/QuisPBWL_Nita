@extends ('layouts.app')

@section('content')

<div class="container">

<h2>
    Data Pelanggan
    <a class="btn btn-primary btn-sm float-end" href="{{ url('Pelanggan/create') }}">Tambah Data</a>
</h2>

<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Id Golongan</th>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Nomor Hp</th>
        <th>KTP</th>
        <th>Nomor Seri</th>
        <th>Meteran</th>
        <th>Aktif</th>
        <th>Id User</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{$row->pel_id}}</td>
        <td>{{$row->pel_id_gol}}</td>
        <td>{{$row->pel_no}}</td>
        <td>{{$row->pel_nama}}</td>
        <td>{{$row->pel_alamat}}</td>
        <td>{{$row->pel_hp}}</td>
        <td>{{$row->pel_ktp}}</td>
        <td>{{$row->pel_seri}}</td>
        <td>{{$row->pel_meteran}}</td>
        <td>{{$row->pel_aktif}}</td>
        <td>{{$row->pel_id_user}}</td>
        <td><a href="{{ url('Pelanggan/' . $row->pel_id . '/edit') }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('Pelanggan/' . $row->pel_id) }}" method="post">
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