<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nip=$_POST['nip'];
 $nama=$_POST['nama'];
 $email=$_POST['email'];
 $telp=$_POST['telp'];
 $alamat=$_POST['alamat'];
 
 $q=mysqli_query($con,"INSERT INTO `dosen` (`nip`,`nama`,`email`,`telp`,`alamat`) VALUES ('$nip','$nama','$email','$telp','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
