<?php
 include "db.php";
 if(isset($_GET['id']))
 {
 $nip=$_GET['id'];
 $q=mysqli_query($con,"delete from `pkl` where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
