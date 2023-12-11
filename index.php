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
    <link rel="stylesheet" href="css/tintuc.css">
</head>

<body>
    <div class="wrapper">
        <?php
            session_start();
            include("admincp/config/config.php");
            if(isset($_SESSION['signup'])){
                include("pages/navbar2.php");
            } else{
                include("pages/navbar.php");
            }
            session_destroy();
            include("pages/banner.php");
            include("pages/sanpham.php");
            include("pages/khuyenmai.php");
            include("pages/cuahang.php");
            include("pages/tintuc.php");

        ?>

        
        
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