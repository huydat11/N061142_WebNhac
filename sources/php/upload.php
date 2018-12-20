<?php
    session_start();
    if(isset($_SESSION['username'])){//tồn tại session thì mới hiển thị trang này

 ?>
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
        <li><a href="quanly.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
        <li><a href="upload.php"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
        <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
    <div class="col-sm-8 text-left">
    <div class="well ">
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
        </form>
      </div>
    </div>
   
    <div class="col-sm-4 sidenav" text-left>
        
            <h3 class="text-danger">Nội dung cấm upload:</h3><br>
            <p>- Nội dung liên quan đến chính trị, trái thuần phong mỹ tục</p>
            <p>- Nội dung đã thuộc sở hữu của bên thứ ba, được quy định rõ ở đây.</p>
            <p text-left>- Nội dung đã được phát hành trên Zing MP3.</p>
    
   <h3 class="text-danger">Quy định upload:</h3><br>
            <p>- Kích thước file nhạc tối đa là 60MB.                </p>
            
            <p>- Mỗi tài khoản thường được phép upload tối đa 200 bài hát (không giới hạn đối với tài khoản VIP).</p>
            <p>- Tính năng upload sẽ bị khóa (tạm thời) nếu bạn cố tình vi phạm nhiều lần các quy định về nội dung cấm (đã nêu ở trên)</p>
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
      header('location:haha.php');
    }
?>
