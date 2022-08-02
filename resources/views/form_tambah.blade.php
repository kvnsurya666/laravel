<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin Cipta Jaya LESTARI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
@extends('layouts.app')

@section('content')
 <div class="card w-50">
        <div class="card-header">
            <h3>Tambah Sales</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('sales.index') }}" class="btn btn-primary">Kembali</a>
            <form action="{{ route('sales.store') }}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="nama" required>
                    Alamat <input type="textarea" name="alamat" required>
                    Tanggal Lahir <input type="date" name="tgl_lahir" required>
                </ul>
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>          
        </div>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>