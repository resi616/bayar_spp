<?php 
    if($_POST){
        $nisn=$_POST['nisn'];
        $nis=$_POST['nis'];
        if(empty($nisn)){
            echo "<script>alert('nisn tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($nis)){
            echo "<script>alert('nie tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "connect.php";
            $qry_login=mysqli_query($conn,"select * from siswa where nisn = '".$nisn."' and nis = '".$nis."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['nisn']=$dt_login['nisn'];
                $_SESSION['nama_siswa']=$dt_login['nama_siswa'];
                $_SESSION['status_login']=true;
                header("location: header.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>
