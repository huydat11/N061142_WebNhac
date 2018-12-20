<?php
    session_start();
    if(isset($_SESSION['username'])&&($_SESSION['quyen'])==1){//tồn tại session thì mới hiển thị trang này

 ?>
<!DOCT
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NGHE NHẠC ONLINE</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<?php
  require('connect.php');
  ?>
<nav class="navbar navbar-inverse  navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
      <a class="navbar-brand" href="index.php"><img src="../images/logomega.png" class="img-responsive" alt="mega"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="quanly.php">Quản Lý Thành Viên</a></li>
      <li><a href="#">Quản Lý Nhạc</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="quanly.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
      <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
        
    </div>
  </div>
</nav>
<?php
    $id=$_GET['id'];//lấy id trên url trang suauser
    //echo $id;
     $sql="select * from user where id='$id'";
     $query=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($query);
     
?>
<div class="container text-center">    
  <div class="row content">
    <h2 class="text-info">SỬA THÔNG TIN THÀNH VIÊN</h2>
    <div class="col-md-6 col-md-offset-3 text-center">
        <?php
            if(isset($_POST['submit'])){
                if(empty($_POST['username']) || empty($_POST['password'])){
                    echo '<p style="color:red">Vui lòng không để trống</p>';
                  }else{
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $quyen=$_POST['quyen'];
                    $sql="select * from user where username='$username'";
                    $query= mysqli_query($con,$sql);
                    $num =mysqli_num_rows($query);
                     
                    if(((strlen($username)<5 || strlen($password)<5)||($num==1))&&($row['username']!=$username)){
                     echo '<p style="color:red">Vui lòng nhập username và password nhiều hơn 5 kí tự hoặc username đã tồn tại</p>';
                    }else{ 
                           if(($_POST['quyen']==1)&&($username=$_POST['username'])){
                           $password1 = md5($password);
                           $sql2="update user set password='$password1',username='$username',quyen='$quyen' where id='$id'  ";
                           $query2=mysqli_query($con,$sql2);
                           if($query2){
                               header('location:quanly.php');
                           }}else{
                            $password1 = md5($password);
                            $sql3="update user set password='$password1',username='$username',quyen='0' where id='$id'  ";
                            $query3=mysqli_query($con,$sql3);
                            if($query3){
                                header('location:quanly.php');
                            }
                           }
                        }

                    }
                  }
            
        ?>
        
    </div>
    <div class="col-md-6 col-md-offset-3">
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Username:</label>

            <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập..." value="<?php echo $row['username']; ?>">
            <label for="">password:</label>
            <input type="password" class="form-control" name="password" placeholder="Mật khẩu..." value="<?php echo $row['password']; ?>">
            <label for="">quyen:</label>
            <input type="quyen" class="form-control" name="quyen" placeholder="quyền..." value="<?php echo $row['quyen']; ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-danger">Sửa</button> 
      </form>
  </div>
</div>
</div>
<footer class="container-fluid text-center">
  <img src="../images/thanghekhoc.jpg" class="img-responsive" style="width:15% " alt="Image">
  <p></p>
</footer>

</body>
</html>
<?php
    }else{
      header('location:index.php');
    }
?>
