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
<nav class="navbar navbar-expand bg-dark">
  <ul class="nav">
    <li>
      <a class="nav-link" href="{{ url('/beranda') }}">Home</a>
    </li>
    <li>
      <a class="nav-link" href="{{ url('/info_kegiatan') }}">Info Kegiatan</a>
    </li>
    <li>
      <a class="nav-link" href="{{ url('/data_siswa') }}">Data Siswa</a>
    </li>
  </ul>
</nav>
@yield('content')

<footer class="fixed-bottom bg-primary">
    <div class="text-center">
        (c) 2021 Copyright : SMA 404
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>