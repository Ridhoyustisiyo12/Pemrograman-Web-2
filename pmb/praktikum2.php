<!-- panggil file navbar -->
<!-- panggil file sidebar -->
<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<!-- isi content -->
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ridho Yustisiyo</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="home.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="praktikum1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum2.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
                Logout
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2 style="text-align: center;">Form Nilai Mahasiswa</h2>
    <hr/>
    <div class="container">
<form method="POST" action="praktikum2.php">
    <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama Mahasisiwa</label> 
    <div class="col-8">
    <input id="name" name="name" placeholder="Masukkan Nama" type="text" class="form-control">
    </div>
    </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="WEB">Pemrograman Web</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button value="simpan" type="submit" name="proses" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
<!-- <?php
$proses = $_GET['proses']; 
$nama_siswa = $_GET['name'];
$mata_kuliah = $_GET['matkul'];
$uts = $_GET['nilai_uts'];
$uas = $_GET['nilai_uas'];
$tugas = $_GET['nilai_tugas'];

echo "Nama : $nama_siswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas : $tugas";
echo "<br/>Data telah di $proses";
?> -->
    </div>
</body>
</html>

<?php
require_once 'praktikum2.php';
$proses = $_POST['proses']; 
$nama_siswa = $_POST['name'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$_nilai = ($uts + $uas + $tugas )/ 3;
$hasil_ujian = kelulusan($_nilai);
$grade = grade($_nilai);

if(!empty($proses)) {
echo "Nama : $nama_siswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas : $tugas";
echo "<br/>Nilai Akhir : $_nilai";
echo "<br/>Grade : $grade";
echo "<br/>Keterangan : $hasil_ujian";
echo "<br/>Data telah di $proses";
}
?>

<?php
function kelulusan ($_nilai){
    if($_nilai > 55){
        return 'Anda Lulus';
    }else{
        return 'Anda Tidak Lulus';
    }
}

function grade($_nilai){
    if ($_nilai >=85) {
        return 'A';
    }elseif ($_nilai >=70) {
        return 'B';
    }elseif ($_nilai >=56) {
        return 'C';
    }elseif ($_nilai >=36) {
         return 'D';
    }elseif ($_nilai >=10) {
        return 'E';
    }else{
        return "Tidak ada nilai";
    }
}
?>
<!-- panggil file footer --> 
<?php
include_once('footer.php');
?>