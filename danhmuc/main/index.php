<?php
include("../pages/menu.php");

// Số sản phẩm trên mỗi trang
$products_per_page = 4;

// Lấy số trang hiện tại từ tham số truyền vào URL hoặc sử dụng trang 1 nếu không có
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Tính offset (bắt đầu từ vị trí nào trong database)
$offset = ($current_page - 1) * $products_per_page;

// Truy vấn SQL để lấy dữ liệu sản phẩm theo trang hiện tại
$sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc
     ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $offset, $products_per_page";
$query_pro = mysqli_query($conn, $sql_pro);

// Truy vấn SQL để lấy tổng số sản phẩm
$total_products_sql = "SELECT COUNT(*) as total FROM tbl_sanpham";
$total_products_query = mysqli_query($conn, $total_products_sql);
$total_products = mysqli_fetch_assoc($total_products_query)['total'];

// Tính tổng số trang
$total_pages = ceil($total_products / $products_per_page);

// Include menu và các phần còn lại của trang web
?>
<div class="container main">
    <div class="headline">
        <h3>Tất cả sản phẩm</h3>
    </div>
    <div class="pagination-container">
    <div class="pagination">
        <?php
        // Hiển thị nút 'Trang trước' nếu không phải trang đầu tiên
        if ($current_page > 1) {
            echo "<a href='/TDQMilk/danhmuc/index.php?page=" . ($current_page - 1) . "'>&laquo;</a>";
        }

        // Hiển thị các liên kết trang
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='/TDQMilk/danhmuc/index.php?page=$i'";

            // Đánh dấu trang hiện tại
            if ($i == $current_page) {
                echo " class='active'";
            }

            echo ">$i</a>";
        }

        // Hiển thị nút 'Trang tiếp theo' nếu không phải trang cuối cùng
        if ($current_page < $total_pages) {
            echo "<a href='/TDQMilk/danhmuc/index.php?page=" . ($current_page + 1) . "'>&raquo;</a>";
        }
        ?>
    </div>
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
                        <a href="/TDQMilk/danhmuc/index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="buy-now">Chi tiết sản phẩm</a>
                    </div>
                    <div class="product-info">
                        <a href="/TDQMilk/danhmuc/index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>" class="product-cat"><?php echo $row['ten_danhmuc'] ?></a>
                        <a href="/TDQMilk/danhmuc/index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product-name"><?php echo $row['ten_sanpham'] ?></a>
                        <div class="product-price"><?php echo number_format($row['gia_sanpham']) . 'VNĐ' ?></div>
                    </div>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
</div>
<style>
    /* Pagination links */
    .pagination {
        text-align: center;
    }

    .pagination a {
        justify-content: center;
        color: black;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        display: inline-block;
    }

    /* Style the active/current link */
    .pagination a.active {
        background-color: dodgerblue;
        color: white;
    }

    /* Add a grey background color on mouse-over */
    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }
    .pagination-container {
    display: flex;
    justify-content: center; /* Điều chỉnh khoảng cách phân trang với phần còn lại của trang */
}
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const pages = document.querySelectorAll('.pagination .page');

        pages.forEach(page => {
            page.addEventListener('click', function(event) {
                event.preventDefault();
                const currentPage = document.querySelector('.pagination .active');
                currentPage.classList.remove('active');
                page.classList.add('active');
            });
        });

        const prev = document.querySelector('.pagination .prev');
        const next = document.querySelector('.pagination .next');

        prev.addEventListener('click', function(event) {
            event.preventDefault();
            const currentPage = document.querySelector('.pagination .active');
            const prevPage = currentPage.previousElementSibling;
            if (prevPage && !prevPage.classList.contains('prev')) {
                currentPage.classList.remove('active');
                prevPage.classList.add('active');
            }
        });

        next.addEventListener('click', function(event) {
            event.preventDefault();
            const currentPage = document.querySelector('.pagination .active');
            const nextPage = currentPage.nextElementSibling;
            if (nextPage && !nextPage.classList.contains('next')) {
                currentPage.classList.remove('active');
                nextPage.classList.add('active');
            }
        });
    });
</script>