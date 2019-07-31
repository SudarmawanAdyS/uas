<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $email=$_POST['email'];
 $telp=$_POST['telp'];
 $alamat=$_POST['alamat'];
 
 $q=mysqli_query($con,"UPDATE `mahasiswa` SET `nim`='$nim',`nama`='$nama',`email`='$email',`telp`='$telp',`alamat`='$alamat' where `nim`='$nim'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
