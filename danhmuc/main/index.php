<?php
$sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc
     ORDER BY tbl_sanpham.id_sanpham DESC";
$query_pro = mysqli_query($conn, $sql_pro);
include("../pages/menu.php");
?>
<div class="container main">
    <div class="headline">
        <h3>Tất cả sản phẩm</h3>
    </div>
    <ul class="products">
        <?php
        while ($row = mysqli_fetch_array($query_pro)) {
        ?>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product-thump">
                            <img src="../admincp/modules/quanlysanpham/Upload/<?php echo $row['hinhanh_sanpham'] ?>" alt="">
                        </a>
                        <a href="http://localhost:8080/TDQMilk/danhmuc/index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="buy-now">Chi tiết sản phẩm</a>
                    </div>
                    <div class="product-info">
                        <a href="http://localhost:8080/TDQMilk/danhmuc/index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>" class="product-cat"><?php echo $row['ten_danhmuc'] ?></a>
                        <a href="http://localhost:8080/TDQMilk/danhmuc/index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product-name"><?php echo $row['ten_sanpham'] ?></a>
                        <div class="product-price"><?php echo number_format($row['gia_sanpham']) . 'VNĐ' ?></div>
                    </div>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
</div>