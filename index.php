<!DOCTYPE html>
<html lang="en">

<head>
    <title>TDQMILK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" onclick="myFunction(this)">
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">TDQMILK</a>
                    </div>
                    <div class="navbar-collapse collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-center">
                            <li><a href="#">Tin tức</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản phẩm<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Page 1-1</a></li>
                                    <li><a href="#">Page 1-2</a></li>
                                    <li><a href="#">Page 1-3</a></li>
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
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                        </ul>
                        <form class="navbar-form navbar-right" action="/action_page.php">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <div class="banner">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:50px">
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
                        <img src="Images/banner.jpg" alt="Los Angeles" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="Images/banner1.jpg" alt="Chicago" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="Images/banner2.jpg" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="Images/banner3.jpg" alt="New york" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="Images/banner4.jpg" alt="New york" style="width:100%;">
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
            </div>
        </div>
        <div class="container menu">
            <div class="headline">
                <h3>Danh mục sản phẩm</h3>
            </div>
            <ul id="main-menu">
                <li><a href="">Sữa tươi</a></li>
                <li><a href="">Sữa thanh trùng</a></li>
                <li><a href="">Kem</a></li>
            </ul>
        </div>
        <div class="container main">
            <div class="headline">
                <h3>Sản phẩm khuyến mãi</h3>
            </div>
            <ul class="products">
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thump">
                                <img src="Images/sua1.png" alt="">
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">Túi</a>
                            <a href="" class="product-name">Trung</a>
                            <div class="product-price">30.000VNĐ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thump">
                                <img src="Images/sua2.png" alt="">
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">Túi</a>
                            <a href="" class="product-name">Trung</a>
                            <div class="product-price">30.000VNĐ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thump">
                                <img src="Images/sua3.jpg" alt="">
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">Túi</a>
                            <a href="" class="product-name">Trung</a>
                            <div class="product-price">30.000VNĐ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thump">
                                <img src="Images/sua4.jpg" alt="">
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">Túi</a>
                            <a href="" class="product-name">Trung</a>
                            <div class="product-price">30.000VNĐ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thump">
                                <img src="Images/sua5.png" alt="">
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">Túi</a>
                            <a href="" class="product-name">Trung</a>
                            <div class="product-price">30.000VNĐ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thump">
                                <img src="Images/sua6.jpg" alt="">
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">Túi</a>
                            <a href="" class="product-name">Trung</a>
                            <div class="product-price">30.000VNĐ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thump">
                                <img src="Images/sua7.jpg" alt="">
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">Túi</a>
                            <a href="" class="product-name">Trung</a>
                            <div class="product-price">30.000VNĐ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thump">
                                <img src="Images/sua8.jpg" alt="">
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat">Túi</a>
                            <a href="" class="product-name">Trung</a>
                            <div class="product-price">30.000VNĐ</div>
                        </div>
                    </div>
                </li>
            </ul>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top rightIn this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop()) {
                    $('header').addClass('sticky');
                } else {
                    $('header').removeClass('sticky');
                }
            });
        });
    </script>
    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>
</body>

</html>