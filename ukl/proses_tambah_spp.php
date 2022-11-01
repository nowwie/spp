<?php
if ($_POST){
    $id_spp=$_POST['id_spp'];
    $angkatan=$_POST['angkatan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

    if(empty($angkatan)){
        echo "<script>alert('angkatan tidak boleh kosong');location.href='tambah_spp.php';</script>";
    }elseif (empty($tahun)){
        echo "<script>alert('tahun tidak boleh kosong');location.href='tambah_spp.php';</script>";
    }  elseif (empty($nominal)){
        echo "<script>alert('nominal tidak boleh kosong');location.href='tambah_spp.php';</script>";
    }    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into spp (id_spp, angkatan, tahun, nominal) value ('".$id_petugas."','".$angkatan."','".$tahun."','".$nominal."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan spp');location.href='tampil_spp.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan spp');location.href='tambah_spp.php';</script>";
        }
    }
}
?>