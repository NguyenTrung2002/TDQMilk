<?php
session_start();
include("../../admincp/config/config.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'vendor/autoload.php';
function send_verification_code($email, $verification_code) {
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'trunggokuty123@gmail.com';
    $mail->Password = 'bktlultopukfupiy';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->setFrom('trunggokuty123@gmail.com', 'Your Name');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Verification Code for Password Reset';
    $mail->Body = "<h3>Your verification code is: $verification_code</h3>";
    $mail->send();
}
class Mailer{
    
    function dathangmail($tieude, $noidung, $maildathang){
        $mail = new PHPMailer(true);
        $mail -> CharSet = 'utf8';
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'trunggokuty123@gmail.com';                     //SMTP username
        $mail->Password   = 'bktlultopukfupiy';                                   //SMTP password
        $mail->SMTPSecure = 'tls';             //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('trunggokuty123@gmail.com', 'Thông báo đơn hàng tại web suatuoinguyenchat.com');
        $mail->addAddress($maildathang);     //Add a recipient
       
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $tieude;
     
        $mail->Body = $noidung;
        $mail->send();
    }
}
if (isset($_POST['password_reset_link'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $_SESSION['email'] = $email;
    $check_email = "SELECT email, username FROM tbl_signup WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) {
        $verification_code = mt_rand(100000, 999999);

        // Gửi mã xác minh qua email
        send_verification_code($email, $verification_code);

        // Lưu mã xác minh vào session để kiểm tra sau
        $_SESSION['verification_code'] = $verification_code;

        $_SESSION['status'] = "Chúng tôi đã gửi mã xác minh qua email để đặt lại mật khẩu.";
        header("Location: xacminh.php");
        exit(0);
    } else {
        $_SESSION['status'] = "Không tìm thấy email trong hệ thống.";
        header("Location: resetpsw.php");
        exit(0);
    }
}
if (isset($_POST['verify_code'])) {
    $user_input_code = intval($_POST['verification_code']);
    // Kiểm tra xem mã người dùng nhập vào có khớp với mã đã gửi đi hay không
    if ($_SESSION['verification_code'] === $user_input_code) {
        // Mã xác minh đúng, chuyển hướng đến trang đổi mật khẩu
        header("Location: password-change.php");
        exit(0);
    } else {
        // Mã xác minh không khớp, hiển thị thông báo lỗi
        $_SESSION['status'] = "Mã xác minh không chính xác.";
        header("Location: xacminh.php");
        exit(0);
    }
}
if (isset($_POST['password_update'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    
    if ($new_password === $confirm_password) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        
        $update_password_query = "UPDATE tbl_signup SET password='$hashed_password' WHERE email='$email'";
        $update_password_result = mysqli_query($conn, $update_password_query);

        if ($update_password_result) {
            $_SESSION['status'] = "Mật khẩu đã được cập nhật thành công";
            header("Location: ../Login/index.php"); // Chuyển hướng đến trang profile hoặc trang khác sau khi cập nhật mật khẩu
            exit();
        } else {
            $_SESSION['status'] = "Đã xảy ra lỗi khi cập nhật mật khẩu";
            header("Location: password-change.php"); // Chuyển hướng người dùng về trang thay đổi mật khẩu với thông báo lỗi
            exit();
        }
    } else {
        $_SESSION['status'] = "Mật khẩu mới và xác nhận mật khẩu không khớp";
        header("Location: password-change.php"); // Chuyển hướng người dùng về trang thay đổi mật khẩu với thông báo lỗi
        exit();
    }
}
?>
