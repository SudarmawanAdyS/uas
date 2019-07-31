<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $email=$_POST['email'];
 $telp=$_POST['telp'];
 $alamat=$_POST['alamat'];
 
 $q=mysqli_query($con,"INSERT INTO `mahasiswa` (`nim`,`nama`,`email`,`telp`,`alamat`) VALUES ('$nim','$nama','$email','$telp','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
