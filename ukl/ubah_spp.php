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
    $qry_get_spp=mysqli_query($conn,"select * from spp ");
    $dt_spp=mysqli_fetch_array($qry_get_spp);
    ?>
    <h3>Ubah SPP</h3>
    <form action="proses_ubah_spp.php" method="post">
        <input type="hidden" name="id_spp" value= "<?=$dt_spp['id_spp']?>">
        Angkatan : 
        <select name="angkatan" class="form-control">
            <option></option>
            <option value="30" <?php if($dt_spp['angkatan']=='30'){echo "selected";}?>>30</option>
            <option value="31"<?php if($dt_spp['angkatan']=='31'){echo "selected";}?>>31</option>
        </select>
        Tahun : 
  <input type="date" name="tahun" value="<?=$dt_spp['tahun']?>" class="form-control">
        Nominal : 
        <input type="text" name="nominal" value="<?=$dt_spp['nominal']?>" class="form-control">
       
        </select>
<input type="submit" name="simpan" value="Ubah SPP" class="btn btn-primary">
    </form>
 
ubah_spp.php    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>