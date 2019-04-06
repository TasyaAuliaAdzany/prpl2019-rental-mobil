<?php
include "database.php";
$key = $_POST['search'];
$query = mysqli_query($connect, "SELECT * FROM mobil WHERE kode LIKE '%$key%' OR nama_mobil LIKE '%$key%' OR jenis_mobil LIKE '%$key%' OR merk LIKE '%$key%' OR nopol LIKE '%$key%' OR no_bpkp LIKE '%$key%' OR no_rangka LIKE '%$key%' ");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>



		<div class="container">
		<h1 class="display-4 text-center py-5">Table Data Karyawan</h1>
		<table border="1" class="table">
			<tr class="p-3 mb-2 bg-dark text-white">
        <th> Kode Mobil </th>
        <th> Nama Mobil </th>
        <th> Jenis Mobil </th>
        <th> Merk </th>
        <th> Pabrikan </th>
        <th>Warna</th>
        <th>Tahun Mobil</th>
        <th>Nomor Polisi</th>
        <th>Nomor Rangka</th>
        <th>Nomor Mesin</th>
        <th>Nomor BPKB</th>
			</tr>

		<?php

			foreach ($query as $key)
			{
				echo "
					<tr>
          <td>$key[kode]</td>
          <td>$key[nama_mobil]</td>
          <td>$key[jenis_mobil]</td>
          <td>$key[merk]</td>
          <td>$key[pabrikan]</td>
          <td>$key[warna]</td>
          <td>$key[tahun_mobil]</td>
          <td>$key[nopol]</td>
          <td>$key[no_rangka]</td>
          <td>$key[no_mesin]</td>
          <td>$key[no_bpkp]</td>
					</tr>
				";

			}
		?>

		</table>
	</div>
</body>
