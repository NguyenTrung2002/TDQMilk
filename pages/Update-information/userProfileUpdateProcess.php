<?php
session_start();
include("../../admincp/config/config.php");
if(isset($_POST['update'])){
    $userNewName = $_POST['username'];
    $userNewBirthday = $_POST['birthday'];
    $userNewEmail = $_POST['email'];
    if(!empty($userNewName) && !empty($userNewEmail)){
        $loggedInUser = $_SESSION['login'];
        $sql = "UPDATE tbl_signup SET username = '$userNewName' , birthday = '$userNewBirthday' ,email = '$userNewEmail' where username = '$loggedInUser'";
        $results = mysqli_query($conn, $sql);
        $_SESSION['login'] = $userNewName;
        echo '<script>
                alert("Cập nhật thông tin thành công!!!");
                window.location.href="../../index.php";
            </script>';
        exit;
    }else{
        header('Location:userProfile.php?error=emptyNameAndEmail');
        exit;
    }
    print_r($userNewEmail);
    print_r($userNewName);
}
?>