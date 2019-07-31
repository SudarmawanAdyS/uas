<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nim=$_POST['nim'];
 $judul=$_POST['judul'];
 $tempat=$_POST['tempat'];
 $alamat_tempat=$_POST['alamat_tempat'];
 
 $q=mysqli_query($con,"UPDATE `pkl` SET `id`='$id',`nim`='$nim',`judul`='$judul',`tempat`='$tempat',`alamat_tempat`='$alamat_tempat' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
