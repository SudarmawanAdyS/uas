<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $nip=$_POST['nip'];
 $nama=$_POST['nama'];
 $email=$_POST['email'];
 $telp=$_POST['telp'];
 $alamat=$_POST['alamat'];
 
 $q=mysqli_query($con,"UPDATE `dosen` SET `nip`='$nip',`nama`='$nama',`email`='$email',`telp`='$telp',`alamat`='$alamat' where `nip`='$nip'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
