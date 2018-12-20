<?php
     session_start();
     if(isset($_SESSION['username'])){
         unset($_SESSION['username']);//xóa session
         header('location:index.php');
     }else{
        header('location:index.php');
     }
     ?>