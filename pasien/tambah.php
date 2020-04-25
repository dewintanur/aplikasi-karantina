<?php
include '../koneksi.php';
include '../aset/header.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../tambah.css">
    <style media="screen">
    .img{
      padding: 20px 30px;
    }
    .b{
      padding: 50px;
      padding-left: 50px
    ;
    padding-right: 50px;
    margin: 0;
    }
    .container{
      display: flex;
      justify-content: center;
    }
    </style>
  </head>
  <body class="w3-pale-red">
    <div class="img">
      <center>
      <img src="../img/bg4.jpg" style="width: 800px; height: 400px">
    </div>
  <div class="b w3-justify-center">

    <div class="container  w3-padding">
        <div class="row mt-4">
         <div class="col-md-9">
          <div class="card" style="width:900px;">
            <div class="card-header w3-pink ">
              <h2>Tambah Data ODP</h2>
                    </div>
                    <div class="card-body w3-light-grey">
                      <form  action="proses-tambah.php" method="post">
                        <div class="form-group">
                          <label for="anggota">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama_pasien" placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="form-group">
                          <label for="kelas">Alamat</label>
                          <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat">
                        </div>

                        <div class="form-group">
                          <label for="tgl_pemeriksaan">Tanggal Pemeriksaan</label>
                          <input type="date" class="form-control" name="tgl_pemeriksaan" >
                        </div>

                        <div class="form-group">
                          <label class="check" for="Gejala">Gejala<br>
                          <input type="checkbox" name="gejala[]" value="batuk">Batuk
                          <input type="checkbox" name="gejala[]" value="demam">Demam
                          <input type="checkbox" name="gejala[]" value="Pilek">Pilek
                          <input type="checkbox" name="gejala[]" value="sesak nafas">Sesak Nafas
                          <input type="checkbox" name="gejala[]" value="sakit tenggorokan">Sakit Tenggorokan
                        </label>
                        </div>

                        <div class="form-group">
                            <label for="id_suhu">Suhu</label>
                              <select style="width : 100%" name="id_suhu">
                                <option value="">Pilih Suhu</option>
                                <?php $sl = mysqli_query($kon,"SELECT * FROM  suhu "); ?>
                                <?php while ($id_suhu =mysqli_fetch_assoc($sl)): ?>
                                      <option value="<?php echo $id_suhu["id_suhu"];?>"><?php echo $id_suhu["suhu"];?></option>
                                <?php endwhile; ?>
                              </select>
                        </div>

                        <button type="submit" class="btn btn-primary"
                              name="simpan">Simpan</button>
                      </form>
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
