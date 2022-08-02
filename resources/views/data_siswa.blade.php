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
<h3>Data Siswa</h3>
<table class="table-bordered table-striped">
  <tr>
    <th>Nama</th>
    <th>NIS</th>
    <th>Tanggal Lahir</th>
  </tr>
  <tr>
    <td>Andi Saputra</td>
    <td>101</td>
    <td>2003-12-22</td>
  </tr>
  <tr>
    <td>Budi Cahya</td>
    <td>102</td>
    <td>2004-01-30</td>
  </tr>
</table>
@endsection 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>