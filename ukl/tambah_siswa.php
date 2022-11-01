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
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="post">
    
        Nama  :
        <input type="text" name="nama" value="" class="form-control">
        NIS: 
        <input type="number" name="nis" value="" class="form-control">
        Kelas :
        <select name="id_kelas" class="form-control">
            <option value="">--Pilih Kelas--</option>
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
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        No. Telp :
        <input type="number" name="no_tlp"  class="form-control">
       
        <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
