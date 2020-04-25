<?php

include '../koneksi.php';
include '../aset/header.php';

$id_pasien = $_GET['id_pasien'];
// $sql = "SELECT * FROM anggota INNER JOIN level ON anggota.id_anggota = level.id_level WHERE  id_anggota = '$id_anggota'";
$sql = "SELECT * FROM pasien INNER JOIN suhu USING (id_suhu) WHERE id_pasien='$id_pasien'";
$res = mysqli_query($kon, $sql);
$edit = mysqli_fetch_assoc($res);
$c = explode(',',$edit['gejala']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../tambah.css">
    <style media="screen">
      .container{
        display:flex;
        justify-content: center;
      }
    </style>
  </head>
  <body class="w3-pale-red">
    <div class="img">
      <center>
      <img src="../img/edit.jpg" style="width:800px;height:400px;">

    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card" style="width:900px;">
                    <div class="card-header w3-pink">
                        <h3>Edit Pasien</h3>
                    </div>
                    <div class="card-body w3-light-grey">
                    <form method="post" action="proses-edit.php">
                      <div class="form-group">
                             <label for="anggota">Nama</label>
                            <input type="text" name="nama_pasien" value="<?= $edit['nama_pasien'] ?>" class="form-control" >
                            </div>

                            <div class="form-group">
                             <label for="buku">Alamat</label>
                             <input type="text" name="alamat" value="<?= $edit['alamat'] ?>" class="form-control" >
                            </div>
                            <div class="form-group">
                             <label for="buku">Tanggal Pemeriksaan</label>
                             <input type="date" name="tgl_pemeriksaan" value="<?= $edit['tgl_pemeriksaan'] ?>" class="form-control" >
                            </div>

                            <div class="form-group">
                              <label for="Gejala">Gejala</label><br>
                              <input type="checkbox" name="gejala[]" value="batuk" <?php in_array('batuk',$c) ? print 'checked' : ''?>>Batuk
                              <input type="checkbox" name="gejala[]" value="demam" <?php in_array('demam',$c) ? print 'checked' : ''?>>Demam
                              <input type="checkbox" name="gejala[]" value="Pilek" <?php in_array('Pilek',$c) ? print 'checked' : ''?>>Pilek
                              <input type="checkbox" name="gejala[]" value="sesak nafas" <?php in_array('sesak nafas',$c) ? print 'checked' : ''?>>Sesak Nafas
                              <input type="checkbox" name="gejala[]" value="sakit tenggorokan" <?php in_array('sakit tenggorokan',$c) ? print 'checked' : ''?>>Sakit Tenggorokan

                            </div>
                            <div class="form-group">
                             <label for="buku">Suhu</label>
                             <select style="width : 100%" name="id_suhu">

                               <?php $sl = mysqli_query($kon,"SELECT * FROM  suhu "); ?>
                               <?php while ($id_suhu =mysqli_fetch_assoc($sl)): ?>
                                     <option value="<?php echo $id_suhu["id_suhu"];?>"><?php echo $id_suhu["suhu"];?></option>
                               <?php endwhile; ?>
                             </select>
                            </div>
                            <div class="form-group">
                               <input type="hidden" name="id_pasien" value="<?= $id_pasien ?>">
                               <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Simpan</button>
                            </div>
                    </form>
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
