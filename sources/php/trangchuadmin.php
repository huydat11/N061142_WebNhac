<?php
    session_start();
    if(isset($_SESSION['username'])&&($_SESSION['quyen'])==1){//tồn tại session thì mới hiển thị trang này

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
      <div class="well"><div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <a href="#"><img src="../images/yeuvoivang.jpg" alt="yêu vội vàng"></a>
            <div class="carousel-caption">
              <h3>Lê Bảo Bình</h3>
              <p>Nếu như ngày xưa chúng ta không vội vàng...</p>
            </div>
          </div>
      
          <div class="item">
            <a href="#"><img src="../images/yeusainguoi.jpg" alt="yêu sai người"></a>
            <div class="carousel-caption">
              <h3 >Khắc Việt</h3>
              <p>Thông minh đến mấy yêu vào cũng ngu...</p>
            </div>
          </div>
      
          <div class="item">
            <a href="#"><img src="../images/suytnuathi.jpg" alt="suýt nữa thì"></a>
            <div class="carousel-caption">
              <h3>Huy Đạt</h3>
              <p>Suýt nữa thì anh có thể nói muôn vài lời muốn nói...</p>
            </div>
          </div>
          <div class="item">
            <a href="#"><img src="../images/lalung.jpg" alt="lạ lùng"></a>
            <div class="carousel-caption">
              <h3>Vũ</h3>
              <p>Kìa màn đêm hiu hắt mang tên Em quay về trong ký ức của Anh qua thời gian ...</p>
            </div>
          </div>
          <div class="item">
            <a href="#"><img src="../images/vaigiaynuathoi.jpg" alt="vài giây nữa thôi"></a>
            <div class="carousel-caption">
              <h3>Reddy</h3>
              <p>Vài giây nữa thôi người về lại được không? 
                    Vài giây nữa thôi cho vơi bao chờ mong...</p>
            </div>
          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div></div>
      <h1 class="text-danger">BÀI HÁT MỚI</h1><br>
      <div class="well"><div class="bg-info"> <div class="container-fluid bg-4 text-center">   
            
            <div class="row">
              <div class="col-sm-4">
                <a href="#"><img src="../images/thanghekhoc.jpg" class="img-responsive" style="width:100%" alt="Image"><p>Thằng hề khóc-Dương 565</p></a>
              </div>
              <div class="col-sm-4"> 
                <a href="#"><img src="../images/thuong.jpg" class="img-responsive" style="width:100%"  alt="Image"><p>Thương-Quốc Thiên</p></a>
              </div>
              <div class="col-sm-4"> 
                <a href="#"><img src="../images/chiconmotdemcuoi.jpg" class="img-responsive" style="width:100%" alt="Image"><p>Nếu chỉ còn một đêm cuối-Tuấn Hưng</p></a>
              </div>
              <div class="col-sm-4">
                    <a href="#"><img src="../images/sainguoisaithoidiem.jpg" class="img-responsive" style="width:100%" alt="Image"><p>Sai người sai thời điểm</p></a>
              </div>
              <div class="col-sm-4"> 
                    <a href="#"><img src="../images/giupanhtraloinhungcauhoi.jpg" class="img-responsive" style="width:100%"  alt="Image"><p>Giúp anh trả lời những câu hỏi</p></a>
              </div>
              <div class="col-sm-4"> 
                    <a href="#"><img src="../images/chiacachbinhyen.jpg" class="img-responsive" style="width:100%" alt="Image"><p>Chia cách bình yên-Quốc Thiên</p></a>
              </div>
              <div class="col-sm-4">
                    <a href="#"><img src="../images/buoncuaanh.jpg" class="img-responsive" style="width:100%" alt="Image"><p>Buồn của anh-Huy Đạt</p></a>
              </div>
              <div class="col-sm-4"> 
                    <a href="#"><img src="../images/buonkhongem.jpg" class="img-responsive" style="width:100%"  alt="Image"><p>Buồn không em-Đạt G</p></a>
              </div>
              <div class="col-sm-4"> 
                    <a href="#"><img src="../images/anhyeuem.jpg" class="img-responsive" style="width:100%" alt="Image"><p>Anh yêu em-Khắc Việt</p></a>
              </div>
            </div>
          </div><br></div></div>
       <h1 class="text-danger">MV HOT</h1><br>
       <div class="well"><div class="bg-warning"> <div class="container-fluid bg-4 text-center">    
            
            <div class="row">
               <div class="col-sm-4">
                    <a href="#"><img src="../images/chieuhomay.jpg" class="img-thumbnail" style="width:100%" alt="Image"><p>Chiều hôm ấy-Jayki</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/doithay.jpg" class="img-thumbnail" style="width:100%"  alt="Image"><p>Đổi thay-Hồ Quang Hiếu</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/dungnhuthoiquen.jpg" class="img-thumbnail" style="width:100%" alt="Image"><p>Đừng như thòi quen-Jayki</p></a>
                </div>
                <div class="col-sm-4">
                    <a href="#"><img src="../images/emthatlangoc.jpg" class="img-thumbnail" style="width:100%" alt="Image"><p>Em thật là ngốc-Vũ Duy Khánh</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/anhsairoi.jpg" class="img-thumbnail" style="width:100%"  alt="Image"><p>Anh sai rồi-Sơn Tùng MTP</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/chayngaydi.jpg" class="img-thumbnail" style="width:100%" alt="Image"><p>Chạy ngay đi-Sơn Tùng MTP</p></a>
                </div>
                <div class="col-sm-4">
                    <a href="#"><img src="../images/emsehoihan.jpg" class="img-thumbnail" style="width:100%" alt="Image"><p>Em sẽ hối hận-Vũ Duy Khánh</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/guongmatlalam.jpg" class="img-thumbnail" style="width:100%"  alt="Image"><p>Gương mặt lạ lẫm -MR SIRO</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/ngaymaisekhac.jpg" class="img-thumbnail" style="width:100%" alt="Image"><p>Ngày mai sẽ khác-Khắc Hiếu</p></a>
                </div>
                </div>
              </div><br></div></div> 
        <h1 class="text-danger">CA SĨ NỔI BẬT</h1><br>
        <div class="well"><div class="bg-success"> <div class="container-fluid bg-4 text-center">    
            
            <div class="row">
               <div class="col-sm-6">
                    <a href="#"><img src="../images/sontung.jpg" class="img-circle" style="width :60%" alt="Image"><p>SƠN TÙNG MTP</p></a>
                </div>
                <div class="col-sm-6"> 
                    <a href="#"><img src="../images/vuduykhanh.jpg" class="img-circle" style="width:60%"  alt="Image"><p>VŨ DUY KHÁNH</p></a>
                </div>
                <div class="col-sm-6"> 
                    <a href="#"><img src="../images/jayki.jpg" class="img-circle" style="width:60%" alt="Image"><p>JAYKI</p></a>
                </div>
                <div class="col-sm-6">
                    <a href="#"><img src="../images/quocthien.jpg" class="img-circle" style="width:60%" alt="Image"><p>QUỐC THIÊN</p></a>
                </div>
                <div class="col-sm-6">
                    <a href="#"><img src="../images/hoquanghieu.jpg" class="img-circle" style="width :60%" alt="Image"><p>HỒ QUANG HIẾU</p></a>
                </div>
                <div class="col-sm-6"> 
                    <a href="#"><img src="../images/mrsiro.jpg" class="img-circle" style="width:60%"  alt="Image"><p>MR.SIRO</p></a>
                </div>
                </div>
              </div><br></div></div>
    </div>
   
    <div class="col-sm-4 sidenav">
      <h1 class="text-danger">CHỦ ĐỀ HOT</h1><br>
      <a href="#"><img src="../images/chude1.jpg" class="img-responsive" style="width:100%" alt="image">EDM</a>
      <a href="#"><img src="../images/chude2.jpg" class="img-responsive" style="width:100%" alt="image">CHRISTMAS</a>
      <a href="#"><img src="../images/chude7.jpg" class="img-responsive" style="width:100%" alt="image">WINTER</a>
      <a href="#"><img src="../images/chude4.jpg" class="img-responsive" style="width:100%" alt="image">MUSIC FOR LOVE</a>
      <a href="#"><img src="../images/chude5.jpg" class="img-responsive" style="width:100%" alt="image">RADIO MP3</a>
      <a href="#"><img src="../images/chude6.png" class="img-responsive" style="width:100%" alt="image">NHỮNG BÀI HIT</a>
      <h1 class="text-danger">BXH VIỆT NAM</h1><br>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"n>Bài Hát</th>
              <th scope="col">Ca sĩ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><a href="#"> Anh đang ở đâu đấy anh</a></td>
              <td><a href="#">Hương Giang Idol</a></td>
              
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><a href="#"> Con trai cưng</a></td>
              <td><a href="#">Bray</a></td>
              
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><a href="#">Em không thể</a></td>
              <td><a href="#">Tiên Tiên</a></td>
             
            </tr>
            <tr>
              <th scope="row">4</th>
              <td><a href="#">Vô tình</a></td>
              <td><a href="#">Xesi</a></td>
              
            </tr>
            <tr>
              <th scope="row">5</th>
              <td><a href="#">Hongkong1</a></td>
              <td><a href="#">Trọng Tài</a></td>
             
            </tr>
            <tr>
              <th scope="row">6</th>
              <td><a href="#"> Suýt Nữa Thì</a></td>
              <td><a href="#">Hương Giang Idol</a></td>
              
            </tr>
            <tr>
              <th scope="row">7</th>
              <td><a href="#"> Một Phút</a></td>
              <td><a href="#">Bray</a></td>
              
            </tr>
            <tr>
              <th scope="row">8</th>
              <td><a href="#">Vài Giây Nữa Thôi</a></td>
              <td><a href="#">Tiên Tiên</a></td>
             
            </tr>
            <tr>
              <th scope="row">9</th>
              <td><a href="#">Chạy Ngay Đi</a></td>
              <td><a href="#">Xesi</a></td>
              
            </tr>
            <tr>
              <th scope="row">10</th>
              <td><a href="#">Người Phản Bội</a></td>
              <td><a href="#">Trọng Tài</a></td>
             
            </tr>
          </tbody>
        </table>
        <br>
        <h1 class="text-danger">BXH HÀN QUỐC</h1><br>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Bài Hát</th>
              <th scope="col">Ca sĩ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><a href="#">Really Bad Boy</a></td>
              <td><a href="#">Red Velvet</a></td>
             
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><a href="#">Yes or Yes</a></td>
              <td><a href="#">Twice</a></td>
             
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><a href="#"> DDU DU DDu</a></td>
              <td><a href="#">Black Pink</a></td>
             
            </tr>
            <tr>
              <th scope="row">4</th>
              <td><a href="#"> Idol</a></td>
              <td><a href="#"> BTS</a></td>
              
            </tr>
            <tr>
              <th scope="row">5</th>
              <td><a href="#">fake Love</a></td>
              <td><a href="#">BTS</a></td>
              
            </tr><tr>
              <th scope="row">6</th>
              <td><a href="#">The End</a></td>
              <td><a href="#">Red Velvet</a></td>
             
            </tr>
            <tr>
              <th scope="row">7</th>
              <td><a href="#">NO NO NO</a></td>
              <td><a href="#">Twice</a></td>
             
            </tr>
            <tr>
              <th scope="row">8</th>
              <td><a href="#"> Pink</a></td>
              <td><a href="#">Black Pink</a></td>
             
            </tr>
            <tr>
              <th scope="row">9</th>
              <td><a href="#"> The Blue</a></td>
              <td><a href="#"> BTS</a></td>
              
            </tr>
            <tr>
              <th scope="row">10</th>
              <td><a href="#">Hello</a></td>
              <td><a href="#">BTS</a></td>
              
            </tr>
          </tbody>
        </table>
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
