<?php
session_start();

$page_title = "Password Reset Form";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    input[type=text], input[type=password] {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 17%;
        position: relative;
        left: 20px;
    }
    button:hover {
        opacity: 0.8;
    }
    .py-5{
        text-align: center;
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }
    .card-header{
        position: relative;
        left: 20px;
    }
    body {
        background-color: hsl(151, 61%, 21%);
    }
</style>
</head>
<body>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                    if(isset($_SESSION['status'])){
                        ?>
                        <div class="alert alert-success">
                            <h5><?= $_SESSION['status'];?></h5>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card">
                    <div class="card-header">
                        <h5>Nhập mã xác minh</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="password-reset-code.php" method="POST">

                            <div class="form-group mb-3">
                                <label>Mã xác minh</label>
                                <input type="text" name="verification_code" class="form-control" placeholder="Nhập mã xác minh">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="verify_code" class="btn btn-primary">Nhập mã xác minh</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>