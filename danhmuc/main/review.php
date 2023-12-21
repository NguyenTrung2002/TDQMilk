<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include("../../admincp/config/config.php");
if (isset($_POST['feedback_submit'])) {
    $user_review = mysqli_real_escape_string($conn, $_POST['feedback']);
    // $sql = "SELECT * FROM tbl_signup INNER JOIN tbl_review ON tbl_signup.id = tbl_review.username_id";
    // $result_username = mysqli_query($conn, $sql);
    //$sql = "SELECT * FROM tbl_sanpham,tbl_review WHERE tbl_sanpham.id_sanpham = tbl_review.product_id";
    // $result_product = mysqli_query($conn, $sql);
    // $row_username = mysqli_fetch_assoc($result_username);
    $product_id = $_SESSION['product_id'];
    $username_id = $_SESSION['id'];
    $date = getdate();
    $datetime = $date['year'] . '-' . sprintf('%02d', $date['mon']) . '-' . sprintf('%02d', $date['mday']) . ' '
        . sprintf('%02d', $date['hours']) . ':' . sprintf('%02d', $date['minutes']) . ':' . sprintf('%02d', $date['seconds']);

    $sql = "INSERT INTO tbl_review(user_review, username_id, product_id, datetime) VALUES ('$user_review','$username_id','$product_id','$datetime')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>
                window.location.href="/TDQMilk/danhmuc/index.php?quanly=sanpham&id=' . $_SESSION['product_id'] . '";
            </script>';
    }
}
