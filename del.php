<?php
include_once"dbh.inc.php";
$sql1="DELETE FROM `content`;";
mysqli_query($conn,$sql1);
header("location:bill1.php");
?>
