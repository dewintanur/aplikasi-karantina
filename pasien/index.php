<?php
include '../koneksi.php';
$sql="SELECT * FROM pasien INNER JOIN suhu ON pasien.id_suhu=suhu.id_suhu";
$res=mysqli_query($kon,$sql);
$pasien=array();
while ($data = mysqli_fetch_assoc($res)) {
  $pasien[]=$data;
}
 ?>
<?php
include '../aset/header.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
     <link rel="stylesheet" href="css/index.css">
     <style media="screen">
      .w3-myfont{ font-family: "Allerta Stencil", Sans-serif;}

     </style>
   </head>
   <body class="w3-pale-red">
     <div class="img">
       <center>
       <img src="../img/image.jpg" alt=""style="width:800px; height:400px;">
     </div>
     <div class="container ">
       <div class="row mt-4">
         <div class="col-md">
           <div class="card" >
             <div class="card-header w3-pink">
             <h2 class="card-title"><i class="fas fa-user"></i>Data ODP
            <a href="tambah.php" role="button" name = "tambah" class="w3-myfont w3-right w3-light-grey w3-padding"> Tambah Data ODP</a></h2>
      </div>
      <div class="card-body w3-pale-red">
        <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Suhu</th>
          <th scope="col">Tanggal Pemeriksaan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <?php
      $no =1;
      foreach ($pasien as $p) {
        ?>
        <tr>
          <th scope="row"><?=$no?></th>
          <td><?=$p['nama_pasien']?></td>
          <td><?=$p['alamat']?></td>

          <td><?=$p['suhu']?></td>
          <td><?=$p['tgl_pemeriksaan']?></td>

          <td>
            <a href="detail.php?id_pasien=<?= $p['id_pasien']?>&nama_pasien=<?$p['nama_pasien']?>" class="badge badge-succes">Detail</a>
            <a href="edit.php?id_pasien=<?= $p['id_pasien']?>&nama_pasien=<?$p['nama_pasien']?>" class="badge badge-warning">Update</a>
            <a href="hapus.php?id_pasien=<?= $p['id_pasien']?>" class="badge badge-danger">Hapus</a>
          </td>
          </tr>
          <?php
          $no++;
    }
           ?>
           </table>
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
