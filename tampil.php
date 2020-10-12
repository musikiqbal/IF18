<?php

// Menangkap data
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$rtrw = $_POST['rtrw'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$agama = $_POST['agama'];
$kelamin = $_POST['kelamin'];
$status = $_POST['status'];
$pekerjaan = $_POST['pekerjaan'];

// Menampilkan data
echo "Nama : " . $nama;
echo "<br>";
echo "Tempat Tanggal Lahir : " . $ttl;
echo "<br>";
echo "Jenis Kelamin : " . $kelamin;
echo "<br>";
echo "Alamat : " . $alamat;
echo "<br>";
echo "RT/RW : " . $rtrw;
echo "<br>";
echo "Desa : " . $desa;
echo "<br>";
echo "Kecamatan : " . $kecamatan;
echo "<br>";
echo "Agama : " . $agama;
echo "<br>";
echo "Status Perkawinan : " . $status;
echo "<br>";
echo "Pekerjaan : " . $pekerjaan;
echo "<br>";
