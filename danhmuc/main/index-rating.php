
<div class="container mt-4">
    <!-- List feedback -->
    <hr>
    <h3 class="text-warning">KHÁCH HÀNG ĐÁNH GIÁ : </h3>
    <?php if(isset($_SESSION['login'])): ?>
    <form method="post" class='form text-center' action="main/review.php">
        <textarea  class="text" cols="140" rows ="5" name="feedback" required></textarea>
        <br>
        <input type="submit" class="btn btn-primary" value="Gửi đánh giá" name="feedback_submit">
    </form>
    <?php else : ?>
    <div class="text-center">
    <small class="alert alert-danger" style="position:relative; top:15px">Vui lòng<a href="../pages/Login/index.php" style="color:dodgerblue"> đăng nhập </a>hoặc<a href="../pages/Signup/index.php"> đăng ký </a>thành viên để bình luận và đánh giá sản phẩm</small>  
    </div>
    <?php endif; ?>
    <br>
    <?php 
     $feedback_list = feedback_list($conn);   
    foreach($feedback_list as $feedback): 
        
    ?>
    <div>
        <div class="d-flex align-items-center">
            <span class="fs-4 mx-2"><?=$feedback['username']?></span>
            <span class="ms-auto">Ngày bình luận: <?=$feedback['datetime']?></span>
            
        </div>
        <div class="alert alert-info fs-5 ms-5" role="alert">
            <?=$feedback['user_review']?>
        </div>
        <br>
        <br>
    </div>
    <?php endforeach; ?>
</div>
<?php
    function feedback_list($conn){
        $sql = "SELECT * FROM tbl_sanpham, tbl_signup, tbl_review WHERE tbl_sanpham.id_sanpham = tbl_review.product_id AND tbl_signup.id = tbl_review.username_id and tbl_sanpham.id_sanpham = '$_GET[id]'";

        return  mysqli_query($conn, $sql);
    }
?>