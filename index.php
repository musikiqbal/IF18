<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 4</title>
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

  <h2>FORM PEMBUATAN KARTU TANDA PENDUDUK (KTP)</h2>

  <form action="tampil.php" method="POST">
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" autofocus></td>
      </tr>
      <tr>
        <td>TTL</td>
        <td>:</td>
        <td><input type="text" name="ttl"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type=text list=kelamin>
          <datalist id=kelamin>
            <option value="Laki-Laki">
            <option value="Perempuan">
          </datalist>
        </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat"></td>
      </tr>
      <tr>
        <td>Rt/Rw</td>
        <td>:</td>
        <td><input type="text" name="rtrw"></td>
      </tr>
      <tr>
        <td>Desa/Kel</td>
        <td>:</td>
        <td><input type="text" name="desa"></td>
      </tr>
      <tr>
        <td>Kec</td>
        <td>:</td>
        <td><input type="text" name="kecamatan"></td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>:</td>
        <td><input type=text list=agama>
          <datalist id=agama>
            <option value="ISLAM">
            <option value="KHATOLIK">
            <option value="PROTESTAN">
            <option value="HINDU">
            <option value="BUDHA">
            <option value="KONGHUTCHU">
          </datalist>
        </td>
      </tr>
      <tr>
        <td>Status Perkawinan</td>
        <td>:</td>
        <td>
          <input type='radio' name='kawin' value='kawin' checked='UNchecked' />Kawin
          <input type='radio' name='belum kawin' value='belum kawin' />Belum Kawin <br>
        </td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><input type="text" name="pekerjaan"> <br>
          <input type="submit" name="submit"></td>
      </tr>
    </table>
  </form>
  <hr>
  <p>&copy;Pemrograman Web 2020</p>
</body>

</html>