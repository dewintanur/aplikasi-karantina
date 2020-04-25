<?php
include '../aset/header.php';

include '../koneksi.php';
$id_pasien = $_GET['id_pasien'];

$sql = "SELECT * FROM pasien INNER JOIN suhu USING (id_suhu) WHERE id_pasien= '$id_pasien' ";
$res = mysqli_query($kon, $sql,);
$detail = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="tambah.css">
    <style media="screen">
      .img{
        padding: 20px 30px;
      }
      .container{
        display:flex;
        justify-content: center;
        border-radius: 200px;
        border:5px;

      }
    </style>
  </head>

  <body class="w3-pale-red">
    <div class="img">
      <center>
      <img src="../img/bg1.jpg" style="width:800px; height:400px;">

    </div>
    <div class="container">
      <div class="row mt-4" >
        <div class="col-md-7">
          <div class="card w3-card-4" style="width: 500px;">
             <div class="card-header w3-pink">
               <h2 class="card-title">Detail Pasien</h2>
                 <hr class="bg-light">
                 <div class="card-body w3-pale-red">
                <table class="table table-striped">
                      <tr>
                          <td><strong>Nama</strong></td>
                          <td><?= $detail['nama_pasien'] ?></td>
                        </tr>
                      <tr>
                          <td><strong>Alamat</strong></td>
                          <td><?= $detail['alamat'] ?></td>
                        </tr>
                      <tr>
                          <td><strong>Gejala</strong></td>
                          <td> <?= $detail['gejala'] ?></td>

                        </tr>
                        <tr>
                            <td><strong>Tanggal Pemeriksaan</strong></td>
                            <td> <?= $detail['tgl_pemeriksaan'] ?></td>

                          </tr>
                      <tr>
                          <td><strong>Suhu</strong></td>
                          <td><?= $detail['suhu'] ?></td>
                        </tr>
                    <tr>
                        <td class="text-right" colspan="2">
                        <a href="index.php" class="btn w3-green"> <i class="fa fa-angle-double-left"></i> Kembali </a>
                        </td>
                    </tr>
                 </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>

<?php
include '../aset/footer.php';
?>
