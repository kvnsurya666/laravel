<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Admin</h3>
        </div>
        <div class="card-body">
            <!-- <a href="{{ route('user.create') }}">Tambah Data User</a> -->
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Role</th>
                    <th>E-mail</th>
                    <th>AKSI</th>
                </tr>
                @foreach($user as $u)
                <tr>
                    <td>{{$u->name}}</td>
                    <td>{{$u->role}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route ('user.edit', $u->id)}}" class="btn btn-primary mr-2">Edit</a>
                            <form action="{{route ('user.destroy', $u->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning">Delete</button>
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>