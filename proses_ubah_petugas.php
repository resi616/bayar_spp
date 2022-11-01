<?php
if($_POST){
    $id_petugas=$_POST['id_petugas'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    $nama_petugas=$_POST['nama_petugas'];
    $kota=$_POST['kota'];
    $alamat=$_POST['alamat'];
    $level=$_POST['level'];
    if(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='ubah_petugas.php';</script>";
 
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='ubah_petugas.php';</script>";
    } elseif(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='ubah_petugas.php';</script>";
    } elseif(empty($level)){
        echo "<script>alert('level tidak boleh kosong');location.href='ubah_petugas.php';</script>";
    }else {
        include "connect.php";
        if(empty($username)){
            $update=mysqli_query($conn,"update petugas set id_petugas='".$id_petugas."',username='".$username."', password='".$password."', nama_petugas='".$nama_petugas."',kota='".$kota."', alamat='".$alamat."', level='".$level."'") or die(mysqli_error($conn));
            if($password){
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update petugas set username='".$username."', password='".$password."', nama_petugas='".$nama_petugas."',kota='".$kota."', alamat='".$alamat."', level='".$level."' where id_petugas='".$id_petugas."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";
            }
        }
        
    } 
}
?>
