<?php
session_start();
include('../../../admincp/config/config.php');
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$idkh = $_SESSION['id'];

if (isset($_POST['dathang'])) {
    $sql_them = "INSERT INTO tbl_donhang(ten_kh, email_kh, diachi_kh, thanhpho_kh, sdt_kh, tongtien_sanpham, id) VALUE ('" . $firstname . "','" . $email . "','" . $address . "','" . $city . "','" . $phone . "', '" . $_SESSION['tongtien'] . "','" . $idkh . "')";
    mysqli_query($conn, $sql_them);
    $iddh = mysqli_insert_id($conn);
    $sql_donhang = "SELECT * FROM tbl_donhang WHERE tbl_donhang.id = '" . $idkh . "' AND tbl_donhang.id_donhang = '" . $iddh . "'";
    $query_donhang = mysqli_query($conn, $sql_donhang);
    $row_donhang = mysqli_fetch_array($query_donhang);
    // header('Location:../../index.php?action=quanlysanpham&query=them');
    $sql_lietke_giohang = "SELECT * FROM tbl_giohang WHERE tbl_giohang.id = '" . $idkh . "'";
    $query_lietke_giohang = mysqli_query($conn, $sql_lietke_giohang);

    // Kiểm tra xem có dữ liệu trả về không
    if (mysqli_num_rows($query_lietke_giohang) > 0) {
        // Dùng vòng lặp để lấy từng dòng dữ liệu và insert vào bảng mới
        while ($row = mysqli_fetch_array($query_lietke_giohang)) {
            $sql_dathang = "INSERT INTO tbl_giohang_dathanhtoan(id, id_sanpham, ten_sanpham, soluong_dat, ma_sanpham, gia_sanpham, hinhanh_sanpham, id_donhang) VALUE ('" . $idkh . "','" . $row['id_sanpham'] . "','" . $row['ten_sanpham'] . "','" . $row['soluong_dat'] . "','" . $row['ma_sanpham'] . "','" . $row['gia_sanpham'] . "', '" . $row['hinhanh_sanpham'] . "', '" . $row_donhang['id_donhang'] . "')";
            mysqli_query($conn, $sql_dathang);

            $id_sanpham = $row['id_sanpham'];
            $sql_xoa = "DELETE FROM tbl_giohang WHERE id = '" . $idkh . "' AND id_sanpham = '" . $id_sanpham . "'";
            mysqli_query($conn, $sql_xoa);
        }
    }
    echo '<script>
    alert("Bạn đã đặt hàng thành công, vui lòng quay về trang chủ");
    window.location.href="/TDQMilk/index.php";
</script>';
}
?>
