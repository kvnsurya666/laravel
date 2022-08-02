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
            <h3>Tambah Barang</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('produk.index') }}" class="btn btn-primary">Kembali</a>
            <form method="POST" action=" {{ route('produk.store') }} " enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" value="" class="form-control" required>
            </div>
            <div class="form-group for-shop">
                <label>Kategori</label>
                    <select class="selectpicker form-control" name="kategori" required>
                        <option disabled="disabled" selected="selected" value="">-- PILIH KATEGORI --</option>
                        <?php foreach ($kategori as $row) { ?>
                        <option value="<?= $row->kode_kategori ?>"><?= ucfirst($row->nama_kategori) ?></option>
                        <?php } ?>
                    </select>
            </div>
            <div class="form-group for-shop">
                <label>Model</label>
                    <select class="selectpicker form-control" name="model" required>
                        <option disabled="disabled" selected="selected" value="">-- PILIH MODEL --</option>
                        <?php foreach ($model as $row) { ?>
                        <option value="<?= $row->kode_model ?>"><?= strtoupper($row->nama_model) ?></option>
                        <?php } ?>
                    </select>
            </div>
            <div class="form-group for-shop">
                <label>Merk</label>
                    <select class="selectpicker form-control" name="merk" required>
                        <option disabled="disabled" selected="selected" value="">-- PILIH MERK --</option>
                        <?php foreach ($merk as $row) { ?>
                        <option value="<?= $row->kode_merk ?>"><?= strtoupper($row->nama_merk) ?></option>
                        <?php } ?>
                    </select>
            </div>
            <div class="form-group for-shop">
                <div class="justify">
                <label   label style="margin-top: 8px">Gambar</label>
                    <div class="col">
                        <div class="col-md-4" style="width: auto">
                            <input type="file" name="gambar" id="gambar" class="form-control" onchange="preview()">
                            <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail gambar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group for-shop">
                <label>Deskripsi</label>
                    <input type="textarea" name="deskripsi" value="" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-lg btn-default" style="margin-top: 10px">Publish</button>

            </form>          
        </div>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>