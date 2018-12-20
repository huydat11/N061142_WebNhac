<?php
 
$servername = "localhost";
 
$username = "root";
 
$password = "";
 
$dbname = "nhac";
 
$con = mysqli_connect($servername,$username,$password,$dbname);
 
if(!$con){
 
   die('Ket noi that bai:'.mysqli_connect_error());
 
}else{
 
    echo"Ket noi thanh cong";
 
}
 
?>