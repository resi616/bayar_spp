<?php
if($_POST){
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama_siswa=$_POST['nama_siswa'];
    $id_kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
    if(empty($nis)){
        echo "<script>alert('nis tidak boleh kosong');location.href='tambah_siswa.php';</script>";
 
    } elseif(empty($nisn)){
        echo "<script>alert('nisn tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($nama_siswa)){
        echo "<script>alert('nama_siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($conn,"insert into siswa (nisn, nis, nama_siswa, id_kelas, alamat, no_telp) value ('".$nisn."','".$nis."','".$nama_siswa."','".$id_kelas."','".$alamat."','".$no_telp."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tambah_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }
    }
}
?>