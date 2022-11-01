<?php
if ($_POST){
    $id_kelas=$_GET['id_kelas'];

    $qry=mysqli_query($conn,"SELECT * FROM kelas WHERE id_kelas=$id_kelas") or die(mysqli_error($conn));    
    $data=mysqli_fetch_assoc($qry);
    $nama_kelas=$data['nama_kelas'];
    $jurusan=$data['jurusan'];
    $angkatan=$data['angkatan'];

    
    if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='ubah_spp.php';</script>";
        
    } elseif(empty($jurusan)){
        echo "<script>alert('jurusan tidak boleh kosong');location.href='ubah_spp.php';</script>";
        
    } elseif(empty($angkatan)){
        echo "<script>alert('angkatan tidak boleh kosong');location.href='ubah_spp.php';</script>";
        
    }else 
        include "koneksi.php";
        
        if(isset($angkatan)){
            
            $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."', jurusan='".$jurusan."', angkatan='".$angkatan."' WHERE id_kelas ='".$id_kelas."'") or die(mysqli_error($conn));
            
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
                
            } else {
                echo "<script>alert('Gagal update kelas');location.href='ubah_kelas.php?id_spp=".$id_kelas."';</script>";
                
            }
        }
    }
?>