<?php

include '../koneksi.php';


 if(isset($_POST['simpan']))
{
  $id_pasien = $_POST['id_pasien'];
  $nama = $_POST['nama_pasien'];
  $alamat = $_POST['alamat'];
  $gejala = implode(',', $_POST['gejala']);
  $suhu = $_POST['id_suhu'];
  $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];

  $sl = "UPDATE pasien SET nama_pasien='$nama', alamat='$alamat',gejala='$gejala', id_suhu='$suhu', tgl_pemeriksaan='$tgl_pemeriksaan' where id_pasien=$id_pasien";
  $res = mysqli_query($kon,$sl);
  $count=mysqli_affected_rows($kon);
  // var_dump($sl);
 if($count==1){
  echo "
  <script>
    alert('data berhasil diedit');
    document.location.href='index.php';
   </script>
  ";
}
;
}

?>
