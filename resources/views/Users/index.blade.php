@extends ('layouts.app')

@section('content')

<div class="container">

<h2>
    Data Users
    <a class="btn btn-primary btn-sm float-end" href="{{ url('Users/create') }}">Tambah Data</a>
</h2>

<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Nomor Hp</th>
        <th>Pos</th>
        <th>Role</th>
        <th>Aktif</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{$row->user_id}}</td>
        <td>{{$row->user_email}}</td>
        <td>{{$row->user_password}}</td>
        <td>{{$row->user_nama}}</td>
        <td>{{$row->user_alamat}}</td>
        <td>{{$row->user_hp}}</td>
        <td>{{$row->user_pos}}</td>
        <td>{{$row->user_role}}</td>
        <td>{{$row->user_aktif}}</td>
        <td><a href="{{ url('Users/' . $row->user_id . '/edit') }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('Users/' . $row->user_id) }}" method="post">
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