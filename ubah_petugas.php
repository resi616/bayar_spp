<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "connect.php";
    $qry_get_petugas=mysqli_query($conn,"select * from petugas where id_petugas= ".$_GET['id_petugas']."; ");
    $dt_petugas=mysqli_fetch_array($qry_get_petugas);
    ?>
    <h3>Ubah Petugas</h3>
    <form action="proses_ubah_petugas.php" method="post">
        <input type="hidden" name="id_petugas" value= "<?=$dt_petugas['id_petugas']?>">
        username :
  <input type="text" name="username" value=   "<?=$dt_petugas['username']?>" class="form-control">
        password : 
  <input type="text" name="password" value="<?=$dt_petugas['password']?>" class="form-control">
        nama_petugas : 
        <input type="text" name="nama_petugas" value="<?=$dt_petugas['nama_petugas']?>" class="form-control">
        kota : 
        <input type="text" name="kota" value="<?=$dt_petugas['kota']?>" class="form-control">
        alamat : 
        <input type="text" name="alamat" value="<?=$dt_petugas['alamat']?>" class="form-control">
        level : 
        <select name="level" class="form-control">
            <option></option>
            <option value="petugas" <?php if($dt_petugas['level']=='petugas'){echo "selected";}?>>Petugas</option>
            <option value="admin"<?php if($dt_petugas['level']=='admin'){echo "selected";}?>>Admin</option>
        </select>

        </select>
<input type="submit" name="simpan" value="Ubah Petugas" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
