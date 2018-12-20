<?php
session_start();
if(isset($_SESSION['username'])){
  if($_SESSION['quyen']==0){
    header('location:trangchuuser.php');
  }
  if($_SESSION['quyen']==1){
    header('location:trangchuadmin.php');
  }}else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NGHE NHẠC ONLINE-ĐĂNG NHẬP</title>
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
    <div class="col-sm-8 text-left"><h2  class="text-primary">Đăng Nhập Tài Khoản</h2>
    <div>
    <?php
        if(isset($_POST['submit'])){
          if(empty($_POST['username']) || empty($_POST['password'])){
            echo '<p style="color:red">Vui lòng không để trống</p>';
          }else{
            
             $username=$_POST['username'];
             $password=$_POST['password'];
             $password = md5($password);
             $sql="select * from user where username='$username' and password='$password'";
             $query=mysqli_query($con,$sql);
             $num =mysqli_num_rows($query);
             if($num==0){
              
               echo '<p style="color:red">Username hoặc Password không đúng</p>';
              }else{
                $row=mysqli_fetch_array($query);
                $_SESSION['username']=$username;
                $_SESSION['quyen']= $row[quyen];
                if($_SESSION['quyen']==1){
                  header('location:trangchuadmin.php');
                }else{
                  header('location:trangchuuser.php');
                }
                  
                
              }
          }
        }
    ?>
    </div>
    <form action="" method="POST">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" id="tendangnhap" name="username" placeholder="Tên đăng nhập...">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" id="pwd" placeholder="Mật khẩu...">
          </div>
          <a href="dangky.php">Đăng Kí Tài Khoản</a><br>
          <button type="submit" name="submit" class="btn btn-danger">Đăng Nhập</button> 
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
}
?>