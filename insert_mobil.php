<?php  
	include 'database.php';
	if($_POST ) {
		$kode = $_POST['kode'];
		$nama_mobil = $_POST['nama_mobil'];
		$jenis_mobil = $_POST['jenis_mobil'];
		$merk = $_POST['merk'];
		$pabrikan = $_POST['pabrikan'];
		$warna = $_POST['warna'];
		$tahun_mobil = $_POST['tahun_mobil'];
		$nopol = $_POST['nopol'];
		$no_rangka = $_POST['no_rangka'];
		$no_mesin = $_POST['no_mesin'];
		$no_bpkp = $_POST['no_bpkp'];

		echo $kode;
		echo $nama_mobil;
		echo $jenis_mobil;
		echo $merk;
		echo $pabrikan;
		echo $warna;
		echo $tahun_mobil;
		echo $nopol;
		echo $no_rangka;
		echo $no_mesin;
		echo $no_bpkp;

		$query = mysqli_query($connect,"INSERT INTO mobil VALUES($kode,'$nama_mobil','$jenis_mobil','$merk','$pabrikan','$warna','$tahun_mobil','$nopol','$no_rangka','$no_mesin','$no_bpkp')");
		//$sql = mysqli_query($connect, $query);

		if($query) {
			//echo "Data tersimpan";
			// die("berhasil");
			header("location:tampil_mobil.php");
		} else {
			echo "Gagal tersimpan";
			
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Rental Mobil</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <form class="navbar-form navbar-right" form method="post" action="searching_mobil.php">
          <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-succses my-2 my-sm-0"  type="submit" name ="send" >Search</button>
        </form>
      </div>
    </div>
 	</nav>
  	<div class="container">
    <h1 class="display-3 text-center py-5">Input Mobil</h1>
			<div class="col-1"></div>		
			<div class="col-6">
				<form action="insert_mobil.php" method="post">
				  <div class="form-group">
				    <label for="kode">Kode</label>
				    <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode">
				  </div>
				  <div class="form-group">
				    <label for="nama_mobil">Nama Mobil</label>
				    <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" placeholder="Nama mobil">
				  </div>
				  <div class="form-group">
				    <label for="jenis_mobil">Jenis Mobil</label>
				    <input type="text" class="form-control" id="jenis_mobil" name="jenis_mobil" placeholder="Jenis Mobil">
				  </div>
				  <div class="form-group">
				    <label for="merk">Merk</label>
				    <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk Mobil">
				  </div>
				  <div class="form-group">
				    <label for="pabrikan">Pabrikan</label>
				    <input type="text" class="form-control" id="pabrikan" name="pabrikan" placeholder="Pabrikan">
				  </div>
				  <div class="form-group">
				    <label for="warna">Warna</label>
				    <input type="text" class="form-control" id="warna" name="warna" placeholder="Warna Mobil">
				  </div>
				  <div class="form-group">
				    <label for="tahun_mobil">Tahun Mobil</label>
				    <input type="text" class="form-control" id="tahun_mobil" name="tahun_mobil" placeholder="Tahun Mobil">
				  </div>
				  <div class="form-group">
				    <label for="nopol">Nomor Polisi</label>
				    <input type="text" class="form-control" id="nopol" name="nopol" placeholder="Nomor Polisi">
				  </div>
				  <div class="form-group">
				    <label for="no_rangka">Nomor Rangka</label>
				    <input type="text" class="form-control" id="no_rangka" name="no_rangka" placeholder="Nomor Rangka">
				  </div>
				  <div class="form-group">
				    <label for="no_mesin">Nomor Mesin</label>
				    <input type="text" class="form-control" id="no_mesin" name="no_mesin" placeholder="Nomor Mesin">
				  </div>
				  <div class="form-group">
				    <label for="no_bpkp">Nomor BPKB</label>
				    <input type="text" class="form-control" id="no_bpkp" name="no_bpkp" placeholder="Nomor BPKP">
				  </div>
				  <button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>			
			<div class="col-2"></div>		
		</div>
	</div>
</body>
</html>
