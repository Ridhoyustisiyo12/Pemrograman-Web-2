<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja</title>
</head>
<body>
    <h2 style="text-align: center;">Belanja Online</h2>
    <hr>
<div class="container" style="margin-top:2em;">
<form method="POST" action="">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Costumer</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Nama Costumer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah Barang" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button value="simpan" name="proses" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
<div class="col-sm-4" style="background-color:white; padding-top:1em;">
    <table class="table">
        <tr style="background-color: #337ab7; color: white;">
            <td>Daftar Harga</td>
        </tr>
        <tr>
            <td>TV: 4.200.000</td>
        </tr>
        <tr>
            <td>Kulkas: 3.100.000</td>
        </tr>
        <tr>
            <td>Mesin Cuci: 3.800.000</td>
        </tr>
        <tr style="background-color: #337ab7; color: white;">
            <td>Harga Dapat Berubah Setiap Saat!</td>
        </tr>
    </table>
</div>
</div>
<?php require_once "proses_belanja.php"; ?>
                <tr class="text-center">
                    <th>Customer <td>:  <?= $nama; ?></td></th>
                    <br>
                    <th>Produk <td>:  <?= $produk; ?></td></th>
                    <br>
                    <th>Jumlah<td>:  <?= $jumlah; ?></td></th>
                    <br>
                    <th>Total Harga<td>:  <?= number_format($jumlah_harga);?></td></th>
                 </tr>

</body>
</html>
