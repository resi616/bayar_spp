<?php
if($_POST){
    $id_petugas=$_POST['id_petugas'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    $nama_petugas=$_POST['nama_petugas'];
    $level=$_POST['level'];
    if(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";
 
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($conn,"insert into petugas (id_petugas, username, password, nama_petugas, level) value ('".$id_petugas."','".$username."','".md5($password)."','".$nama_petugas."','".$level."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='tambah_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
        }
    }
}
?>

