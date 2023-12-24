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
                    <ul class="dropdown-menu" style="text-align: center;">
                        <?php
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        ?>
                            <li class="nav-item">
                                <a class="dropdown-item" aria-current="page" href="/TDQMilk/danhmuc/index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc'] ?></a>
                                <li class="divider"></li>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="/TDQMilk/index.php#khuyenmai">Khuyến mãi</a></li>
                <li><a href="/TDQMilk/index.php#cuahang">Cửa hàng</a></li>
                <li><a href="/TDQMilk/index.php#tintuc">Tin tức</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['login'])) { ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle">
                            <span style="color:green; font-weight: 600;">Xin chào:</span> <span style="color:red; font-weight: 600;"><?php echo $_SESSION['login'] ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/TDQMilk/danhmuc/index.php?quanly=giohang">Giỏ hàng</a></li>
                            <li class="divider"></li>
                            <li><a href="/TDQMilk/pages/Update-information/userProfile.php"><span class="glyphicon glyphicon-edit"></span> Sửa thông tin</a></li>
                            <?php if ($_SESSION['login'] == 'admin') { ?>
                                <li class="divider"></li>
                                <li><a href="/TDQMilk/admincp">Chuyển đến trang admin</a></li>
                            <?php } ?>
                            <li class="divider"></li>
                            <li><a href="/TDQMilk/pages/Logout/logout.php"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
                        </ul>
                    </li>
                <?php
                } else {
                ?>
                    <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng kí</button> -->
                    <li><a href="/TDQMilk/pages/Signup/index.php"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
                    <li><a href="/TDQMilk/pages/Login/index.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                <?php
                }
                ?>
            </ul>
            <form class="navbar-form" action="/TDQMilk/danhmuc/index.php?quanly=timkiem" method="POST">
            <button type="submit" class="btn btn-default" name="timkiem">Tìm kiếm</button>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="tukhoa">
                </div>
            </form>
        </div>

    </nav>
</header>