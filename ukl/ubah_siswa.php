<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_siswa=mysqli_query($conn,"select * from siswa");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Siswa</h3>
    <form action="proses_ubah_siswa.php" method="post">
        <input type="hidden" name="nisn" value=  "<?=$dt_siswa['nisn']?>">
  Nama  :
        <input type="text" name="nama" value="<?=$dt_siswa['nama']?>" class="form-control">
        NIS: 
        <input type="number" name="nis" value="<?=$dt_siswa['nis']?>" class="form-control">
        Kelas :
        <select name="id_kelas" class="form-control">
            <option value="<?=$dt_siswa['id_kelas']?>">--Pilih Kelas--</option>
             <?php
             include "koneksi.php";
                        $qry_kelas= mysqli_query($conn, "select * from kelas");
                        while ($nama_kelas= mysqli_fetch_assoc($qry_kelas)){
                            ?>
                            <option value="<?php echo $nama_kelas['id_kelas'];?>">
                            <?php echo $nama_kelas['nama_kelas']; ?>
                        </option>
                        <?php
                        }
                        ?>
                      </select>
            
 
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4" ><?=$dt_siswa['alamat']?></textarea>
        No. Telp :
        <input type="number" name="no_tlp" value="<?=$dt_siswa['no_tlp']?>" class="form-control">
<input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
