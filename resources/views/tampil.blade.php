<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_periksa" class="col-4 col-form-label">Tanggal Pemeriksaan</label>
    <div class="col-8">
      <input id="tanggal_periksa" name="tanggal_periksa" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="usia" class="col-4 col-form-label">Usia</label>
    <div class="col-8">
      <input id="usia" name="usia" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label>
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="laki-laki">
        <label for="jenis_kelamin_0" class="custom-control-label">L</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="perempuan">
        <label for="jenis_kelamin_1" class="custom-control-label">P</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<table class="table">
    <thead class="table-light">
          <tr>
              <th>Jenis Tes</th>
              <th>Hasil Pemeriksaan</th>
              <th>Normal</th>
          </tr>
          <tr>
              <td>Tekanan Darah</td>
              <td></td>
              <td>120/80 mmhg</td>
          </tr>
          <tr>
              <td>Asam Urat</td>
              <td></td>
              <td>7 mg</td>
          </tr>
          <tr>
              <td>Kolesterol Total</td>
              <td></td>
              <td>200 mg/dl</td>
          </tr>
          <tr>
              <td>Gula Darah</td>
              <td></td>
              <td>Puasa : 70-110 mg/dl</td>
          </tr>
    </thead>
</table>

