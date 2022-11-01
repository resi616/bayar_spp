<?php
if($_POST){
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama_siswa=$_POST['nama_siswa'];
    $id_kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
    if(empty($nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($nisn)){
        echo "<script>alert('nisn tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($nis)){
        echo "<script>alert('nis tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }else {
        include "connect.php";
        if(empty($nisn)){
            $update=mysqli_query($conn,"update siswa set nisn='".$nisn."',nis='".$nis."', nama_siswa='".$nama_siswa."', alamat='".$alamat."', no_telp='".$no_telp."', id_kelas='".$id_kelas."' where id_kelas = '".$id_kelas."' ") or die(mysqli_error($conn));
            if($nis){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update siswa set nisn='".$nisn."',nis='".$nis."', nama_siswa='".$nama_siswa."', alamat='".$alamat."', no_telp='".$no_telp."', id_kelas='".$id_kelas."' where id_kelas = '".$id_kelas."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
            }
        }
        
    } 
}
?>