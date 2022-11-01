<?php
if ($_POST){
    $nama_petugas=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $level=$_POST['level'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];



    if(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif (empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif (empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    }    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into petugas (nama_petugas, username, password, level, alamat) value ('".$nama_petugas."','".$username."','".md5($password)."','".$level."','".$alamat."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='tampil_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
        }
    }
}
?>
