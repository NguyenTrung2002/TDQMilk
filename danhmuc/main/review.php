<?php
    session_start();
    include("../../admincp/config/config.php");
    if(isset($_POST['feedback_submit'])){
        $user_review = mysqli_real_escape_string($conn,$_POST['feedback']);
       // $sql = "SELECT * FROM tbl_signup INNER JOIN tbl_review ON tbl_signup.id = tbl_review.username_id";
       // $result_username = mysqli_query($conn, $sql);
        //$sql = "SELECT * FROM tbl_sanpham,tbl_review WHERE tbl_sanpham.id_sanpham = tbl_review.product_id";
       // $result_product = mysqli_query($conn, $sql);
       // $row_username = mysqli_fetch_assoc($result_username);
        $product_id = $_SESSION['product_id'];
        $username_id = $_SESSION['id'];
        $date = getdate();
        $datetime = $date['year'].$date['mon'].$date['mday'].$date['hours'].$date['minutes'].$date['seconds'];
        
        $sql = "INSERT INTO tbl_review(user_review, username_id, product_id, datetime) VALUES ('$user_review','$username_id','$product_id','$datetime')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<script>
                alert("Bình luận sản phẩm thành công");
                window.location.href="../index.php";
            </script>';
        }
    }
    
?>