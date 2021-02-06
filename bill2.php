 <?php
 include_once'dbh.inc.php';
 $des=$_POST['des'];
 $quan=$_POST['quan'];
 $price=$_POST['price'];
 $tot=$quan*$price;
 $sql="INSERT INTO `content`(`des`, `quan`, `price`, `tot`) VALUES ('$des','$quan','$price','$tot');";
 mysqli_query($conn,$sql);
 header("location:bill1.php");
 
 ?>