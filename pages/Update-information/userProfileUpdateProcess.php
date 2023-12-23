<?php
session_start();
include("../../admincp/config/config.php");

if (isset($_POST['update'])) {
    $userNewName = $_POST['username'];
    $userNewBirthday = $_POST['birthday'];
    $userNewEmail = $_POST['email'];

    if (!empty($userNewName) && !empty($userNewEmail)) {
        $loggedInUser = $_SESSION['login'];

        // Kiểm tra xem email hoặc tên tài khoản có bị trùng trong cơ sở dữ liệu không
        $check_duplicate_query = "SELECT * FROM tbl_signup WHERE (username = '$userNewName' OR email = '$userNewEmail') AND username != '$loggedInUser'";
        $duplicate_result = mysqli_query($conn, $check_duplicate_query);

        if (mysqli_num_rows($duplicate_result) > 0) {
            // Nếu tên tài khoản hoặc email bị trùng, hiển thị thông báo và chuyển hướng trở lại trang userProfile.php
            echo '<script>
                    alert("Tên tài khoản hoặc email đã trùng, vui lòng sửa lại");
                    window.location.href="userProfile.php";
                </script>';
            exit;
        } else {
            // Nếu không có tên tài khoản hoặc email nào bị trùng, tiến hành cập nhật thông tin
            $sql = "UPDATE tbl_signup SET username = '$userNewName', birthday = '$userNewBirthday', email = '$userNewEmail' WHERE username = '$loggedInUser'";
            $results = mysqli_query($conn, $sql);

            if ($results) {
                $_SESSION['login'] = $userNewName;
                echo '<script>
                        alert("Cập nhật thông tin thành công!!!");
                        window.location.href="../../index.php";
                    </script>';
                exit;
            } else {
                // Xử lý lỗi nếu cập nhật không thành công
                header('Location: userProfile.php?error=updateFailed');
                exit;
            }
        }
    } else {
        // Xử lý nếu tên tài khoản hoặc email bị rỗng
        header('Location: userProfile.php?error=emptyNameOrEmail');
        exit;
    }
}
