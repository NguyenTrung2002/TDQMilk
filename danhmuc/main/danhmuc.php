<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc = '$_GET[id]'
     ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($conn, $sql_pro);

$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]'
     LIMIT 1";
$query_cate = mysqli_query($conn, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>
<div class="headline">
    <h3><?php echo $row_title['ten_danhmuc'] ?></h3>
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
                                <a href="http://localhost:8080/TDQMilk/danhmuc/index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>" class="product-cat"><?php echo $row_title['ten_danhmuc'] ?></a>
                                <a href="http://localhost:8080/TDQMilk/danhmuc/index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product-name"><?php echo $row['ten_sanpham'] ?></a>
                                <div class="product-price"><?php echo number_format($row['gia_sanpham']) . 'VNĐ' ?></div>
                            </div>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>