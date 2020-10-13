<html>

<head>
  <meta charset="utf-8">
  <title>Data Output</title>
  <style type="text/css">
    body {
      background-color: aqua;
    }

    a {
      font-size: 20px;
      text-decoration: none;
    }

    form {
      font-size: 17px;
      text-align: left;
    }

    input {
      text-transform: uppercase;
      font-weight: bold;
    }

    p {
      text-align: center;
    }
  </style>
</head>

<body>
  <h1 style="color: blue; text-align: center;">CURRICULUM VITAE (CV)</h1>
  <hr>
  <a href="http://www.ubpkarawang.ac.id/index.php/id/" target="_blank">UBP Karawang |</a>
  <a href="http://ftik.ubpkarawang.ac.id/" target="_blank">FTIK |</a>
  <a href="http://informatika.ubpkarawang.ac.id/" target="_blank">Informatika |</a>
  <hr>

  <h2 style="text-align: center; text-decoration: underline;;">FORM PEMBUATAN KARTU TANDA PENDUDUK (KTP)</h2>

  <?php

  $nama = $_POST['nama'];
  echo "Nama : <b>$nama</b> 
  <br>";

  $ttl = $_POST['ttl'];
  echo "TTL : <b>$ttl</b> 
  <br>";

  $kelamin = $_REQUEST['kelamin'];
  echo "Jenis Kelamin : <b>$kelamin</b> 
  <br>";

  $alamat = $_POST['alamat'];
  echo "Alamat : <b>$alamat</b> 
  <br>";


  $rtrw = $_POST['rt/rw'];
  echo "RT/RW : <b>$rtrw</b> 
  <br>";


  $desa = $_POST['desa/kelurahan'];
  echo "Desa/Kelurahan : <b>$desa</b> 
  <br>";


  $kecamatan = $_POST['kecamatan'];
  echo "Kecamatan : <b>$kecamatan</b> 
  <br>";


  $kabupaten = $_POST['kabupaten'];
  echo "Kabupaten : <b>$kabupaten</b> 
  <br>";

  $agama = $_REQUEST['agama'];
  echo "Agama : <b>$agama</b> 
  <br>";

  $status = $_REQUEST['status'];
  echo "Status Perkawinan : <b>$status</b> 
  <br>";

  $kerjaan = $_POST['kerjaan'];
  echo "Pekerjaan : <b>$kerjaan</b> 
  <br>";
  ?>

  </form>
  <hr>
  <p>&copy;Pemrograman Web 2020</p>
</body>

</html>