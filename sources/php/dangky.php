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
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thể Loại<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Trữ Tình</a></li>
              <li><a href="#">Pop</a></li>
              <li><a href="#">Vinahouse</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nghệ Sĩ<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Việt Nam</a></li>
              <li><a href="#">Âu Mỹ</a></li>
              <li><a href="#">Hàn Quốc</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bảng Xếp Hạng<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Việt Nam</a></li>
              <li><a href="#">Âu Mỹ</a></li>
              <li><a href="#">Hàn Quốc</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="dangnhap.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      <form class="navbar-form navbar-center" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Tìm Kiếm...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
       </form>
    </div>
  </div>
</nav>
<div class="container text-center">    
  <div class="row content">
    <div class="col-sm-8 text-left"><h2  class="text-primary">Đăng Kí Tài Khoản</h2>
       <div>
          <?php
              if(isset($_POST['submit'])){
              if(empty($_POST['username']) || empty($_POST['password'])){
                echo '<p style="color:red">Vui lòng không để trống</p>';
              }else{
                 $username=$_POST['username'];
                 $password=$_POST['password'];
                 $password2=$_POST['password2'];
                 if(strlen($username)<5 || strlen($password)<5){
                  echo '<p style="color:red">Vui lòng nhập username và password nhiều hơn 5 kí tự</p>';
                 }else{
                   if($password != $password2){
                    echo '<p style="color:red">Password không trùng nhau</p>';
                   }else{
                     $sql="select * from user where username='$username'";
                     $query= mysqli_query($con,$sql);
                     $num =mysqli_num_rows($query);
                     $password1 = md5($password);
                     if($num==0){
                       $sql2="INSERT INTO user(username,password) VALUES ('$username','$password1')";
                       $them= mysqli_query($con,$sql2);
                       if($them){
                        echo '<p style="color:blue">Đăng kí thành công!</p>';
                        header('location:dangnhap.php');
                       }else{
                        echo '<p style="color:red">Đăng kí không thành công!</p>';
                       
                       }
                       
                     }else{
                      echo '<p style="color:red">Username đã tồn tại!</p>';
                     }
                   }
                 }

              }
            }
          ?>
        </div>
        
        <form action="" method="POST">
          <div class="form-group">
            <label for="">Username:</label>
            <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập...">
          </div>
          <div class="form-group">
            <label for="">password:</label>
            <input type="password" class="form-control" name="password" placeholder="Mật khẩu...">
          </div>
          <div class="form-group">
            <label for="">Nhập Lại password:</label>
            <input type="password" class="form-control" name="password2" placeholder="Mật khẩu...">
          </div>
          <button type="submit" class="btn btn-danger" name="submit">Đăng Kí</button> 
        </form></div>
      
   
    
  </div>
</div>

<footer class="container-fluid text-center">
  <img src="../images/thanghekhoc.jpg" class="img-responsive" style="width:15% " alt="Image">
  <p></p>
</footer>

</body>
</html>
