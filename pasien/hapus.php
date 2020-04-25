<?php
include '../aset/header.php';
include '../koneksi.php';
$id_pasien = $_GET["id_pasien"];
$query = mysqli_query($kon, "DELETE FROM pasien WHERE id_pasien=$id_pasien");


if($query>0)
{
    echo
    "
    <script>
        alert('data berhasil dihapus yeayy!');
        document.location.href='index.php';
    </script>
    ";
}
?>
