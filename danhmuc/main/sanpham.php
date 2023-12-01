
<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc
    AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($conn, $sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>


<div class="container">
    <h3>Chi tiết sản phẩm</h3>
    <div class="row">
        <div class="col">
            <div class="hinhanh_sanpham">
                <img src="../admincp/modules/quanlysanpham/Upload/<?php
                echo $row_chitiet['hinhanh_sanpham']?>" alt="" width = 50% height = 50%>
            </div>
        </div>
        <div class="col">
            <form method = "POST" action="#">
                <div class="chitiet_sanpham">
                    <h3>Tên sản phẩm: <?php echo $row_chitiet['ten_sanpham']?></h3>
                    <p>Số lượng sản phẩm: <?php echo $row_chitiet['soluong_sanpham']?></p>
                    <p>Giá sản phẩm: <?php echo number_format($row_chitiet['gia_sanpham']).'VNĐ'?></p>
                    <p>Mã sản phẩm: <?php echo $row_chitiet['ma_sanpham']?></p>
                    <p>Danh mục sản phẩm: <?php echo $row_chitiet['ten_danhmuc']?></p>
                    <p>Tóm tắt: <?php echo $row_chitiet['tomtat_sanpham']?></p>
                    <button type="button" class="btn btn-danger">Thêm giỏ hàng</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    }
?>