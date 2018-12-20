<?php
require('connect.php');
$id=$_GET['id'];
$sql="delete from user where id='$id' ";
$query=mysqli_query($con,$sql);
header('location:quanly.php');

?>