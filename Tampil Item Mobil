<?php
  include 'database.php';
  $query = mysqli_query($connect, "SELECT * FROM `mobil` GROUP BY nama_mobil");
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
    <h1 class="display-3 text-center py-5">Mobil</h1>
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
        <th colspan="2"> Actions </th>
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
            <td><a href=editmobil.php?id=$key[kode]>Edit</a></td>
            <td><a href=deletemobil.php?id=$key[kode]>Delete</a></td>
          </tr>
        ";

      }
    ?>

    </table>
  </div>

</body>
</html>
