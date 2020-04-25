<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
  $nama = $_POST['nama_pasien'];
  $alamat = $_POST['alamat'];
  $suhu = $_POST['id_suhu'];
  $gejala =implode(',',$_POST['gejala']);
  $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];


  $sl = "INSERT INTO pasien (nama_pasien,alamat, id_suhu,gejala, tgl_pemeriksaan)
          VALUES ('$nama', '$alamat', '$suhu', '$gejala', '$tgl_pemeriksaan')";
$res = mysqli_query($kon, $sl);

$count = mysqli_affected_rows($kon);

var_dump($count);

if($count == 1)
{
 header("Location: index.php");
}
else
{
 header("Location: tambah.php");
}

}
else
{
    header("Location: tambah.php");
}

?>
