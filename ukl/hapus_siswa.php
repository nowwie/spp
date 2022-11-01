<?php 
    if($_GET['nisn']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from siswa where nisn='".$_GET['nisn']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus spp');location.href='tampil_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus spp');location.href='tampil_siswa.php';</script>";
        }
    }
?>