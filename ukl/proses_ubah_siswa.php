<?php
if($_POST){
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $id_kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
    $no_tlp=$_POST['no_tlp'];
    if(empty($nisn)){
        echo "<script>alert('nisn tidak boleh kosong');location.href='tambah_siswa.php';</script>";
 
    } elseif(empty($nis)){
        echo "<script>alert('nis tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($nama)){
            $update=mysqli_query($conn,"update siswa set nama='".$nama."',nisn='".$nisn."', nis='".$nis."', alamat='".$alamat."', id_kelas='".$id_kelas."', no_tlp='".$no_tlp."' where nisn = '".$nisn."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update siswa set nama='".$nama."',nisn='".$nisn."', nis='".$nis."', alamat='".$alamat."', no_tlp='".$no_tlp."', id_kelas='".$id_kelas."' where nisn = '".$nisn."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
            }
        }
        
    } 
}
?>
