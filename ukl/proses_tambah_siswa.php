<?php

if($_POST){
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $id_kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
    $no_tlp=$_POST['no_tlp'];
    

    if(empty($id_kelas)){
        echo "<script>alert('id_kelas tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($nis)){
        echo "<script>alert('nis tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($nama)){
        echo "<script>alert('nama siswa  tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nisn,nis,nama,id_kelas,alamat,no_tlp) value 
        ('".$nisn."','".$nis."','".$nama."','".$id_kelas."','".$alamat."','".$no_tlp."')")
         or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tampil_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";

        }
    }
}

?>