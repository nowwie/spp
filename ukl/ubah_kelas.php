<?php
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_kelas=mysqli_query($conn,"select * from kelas ");
    $dt_kelas=mysqli_fetch_array($qry_get_kelas);
    ?>
    <h3>Ubah Kelas</h3>
    <form action="proses_ubah_kelas.php" method="post">
    Nama kelas :
        <input type="text" name="nama_kelas" value="<?=$dt_kelas['nama_kelas']?> " class="form-control">
        Jurusan :
        <input type="text" name="jurusan" value="<?=$dt_kelas['jurusan']?>" class="form-control">
        Angkatan :
        <select name="angkatan" value="<?=$dt_kelas['angkatan']?>" class="form-control">
        <option></option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select> 
    
        <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
