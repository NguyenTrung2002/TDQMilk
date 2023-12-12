<?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($conn, $sql_danhmuc);
?>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" onclick="myFunction(this)">
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="/TDQMilk/index.php">TDQMILK</a>
        </div>
        <div class="navbar-collapse collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="/TDQMilk/danhmuc/index.php">Danh mục sản phẩm<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        ?>
                            <li class="nav-item">
                                <a class="dropdown-item" aria-current="page" href="/TDQMilk/danhmuc/index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc'] ?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="#">Khuyến mãi</a></li>
                <li><a href="#">Cửa hàng</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Truyền thông<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">Tuyển dụng</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/TDQMilk/danhmuc/index.php?quanly=giohang">Giỏ hàng</a></li>
                <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng kí</button> -->
                <li><a href="/TDQMilk/pages/Signup/index.php"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
                <li><a href="/TDQMilk/pages/Login/index.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="/TDQMilk/danhmuc/index.php?quanly=timkiem" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="tukhoa">
                </div>
                <button type="submit" class="btn btn-default" name="timkiem">Submit</button>
            </form>
        </div>

    </nav>
</header>