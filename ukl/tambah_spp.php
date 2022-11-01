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
    <h3>Tambah SPP</h3>
    <form action="proses_tambah_spp.php" method="post">
        Angkatan :
        <select name="angkatan" value="" class="form-control">
        <option></option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>  
        Tahun : 
        <input type="date" name="tahun" value="" class="form-control">
        Nominal : 
        <input type="number" name="nominal" value="600000" class="form-control">
        <input type="submit" name="simpan" value="Tambah" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>