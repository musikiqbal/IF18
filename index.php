<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
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

  <table style="width:30%;text-align:left;border:none groove;">
    <form action="tampil.php" method="post">
      <tr>
        <th>Nama
          <br>
        <th> : <input type="text" name="nama"></th>
        </th>
      </tr>
      <tr>
        <th>TTL</th>
        <th> : <input type="text" name="ttl"></th>
      </tr>
      <th>Jenis Kelamin</th>
      <th> : <select name="kelamin" size="1" single>
          <option value="perempuan" selected="selected">Perempuan</option>
          <option value="laki-laki" selected="selected">Laki-laki</option>
        </select>
      </th>
      <tr>
        <th>Alamat
        <th> : <input type="text" name="alamat"></th>
        </th>
      </tr>
      <tr>
        <th>RT/RW
        <th> : <input type="text" name="rt/rw"></th>
        </th>
      </tr>
      <tr>
        <th>Desa/Kelurahan
        <th> : <input type="text" name="desa/kelurahan"></th>
        </th>
      </tr>
      <tr>
        <th>Kecamatan
        <th> : <input type="text" name="kecamatan"></th>
        </th>
      </tr>
      <tr>
        <th>Kabupaten
        <th> : <input type="text" name="kabupaten"></th>
        </th>
      </tr>
      <th>Agama</th>
      <th> : <select name="agama" size="1" single>
          <option value="kristen" selected="selected">Kristen</option>
          <option value="katolik" selected="selected">Katolik</option>
          <option value="budha" selected="selected">Budha</option>
          <option value="konghucu" selected="selected">Konghucu</option>
          <option value="islam" selected="selected">Islam</option>
        </select>
      </th>
      <tr>
        <th>Status Perkawinan
        <th> : <input name="status" type="radio" value="kawin" checked> Kawin
          <input type="radio" name="status" value="belum kawin" checked> Belum Kawin</th>
        </th>
      </tr>
      <tr>
        <th>Pekerjaan
        <th> : <input type="text" name="kerjaan"></th>
        </th>
      </tr>
      <tr>
        <th>
        <th><input type="submit" value="Submit"></th>
        </th>
      </tr>
    </form>
  </table>
  <hr>
  <p>&copy;Pemrograman Web 2020</p>
</body>

</html>