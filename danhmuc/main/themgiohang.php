<?php
session_start();
include("../../admincp/config/config.php");
if(isset($_GET['tru'])){
    $id = $_GET['tru'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'giasanpham'=>$cart_item['giasanpham'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
            $_SESSION['cart'] = $product;
        }else{
            $giamsoluong = $cart_item['soluong']-1;
            if($cart_item['soluong']>1){
                $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$giamsoluong, 'giasanpham'=>$cart_item['giasanpham'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
            }else{
                $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'giasanpham'=>$cart_item['giasanpham'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
            }
            $_SESSION['cart'] = $product;
        }
        header('Location: http://localhost:8080/TDQMilk/danhmuc/index.php?quanly=giohang');

    }
}
if(isset($_GET['cong'])){
    $id = $_GET['cong'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'giasanpham'=>$cart_item['giasanpham'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
            $_SESSION['cart'] = $product;
        }else{
            if($cart_item['soluong']<99){
                $tangsoluong = $cart_item['soluong']+1;
                $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$tangsoluong, 'giasanpham'=>$cart_item['giasanpham'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
            }else{
                $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'giasanpham'=>$cart_item['giasanpham'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
            }
            $_SESSION['cart'] = $product;
        }
        header('Location: http://localhost:8080/TDQMilk/danhmuc/index.php?quanly=giohang');

    }
}
if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
    $id = $_GET['xoa'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'giasanpham'=>$cart_item['giasanpham'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
        }
        $_SESSION['cart'] = $product;
        header('Location: http://localhost:8080/TDQMilk/danhmuc/index.php?quanly=giohang');
    }
}
if(isset($_POST['themgiohang'])){
// session_destroy();
    $id = $_GET['idsanpham'];
    $soluong=1;
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham ='".$id."' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    if($row){
        $new_product = array(array('tensanpham'=>$row['ten_sanpham'], 'id'=>$id, 'soluong'=>$soluong, 'giasanpham'=>$row['gia_sanpham'], 'hinhanh'=>$row['hinhanh_sanpham'], 'masanpham'=>$row['ma_sanpham']));
        if(isset($_SESSION['cart'])){
            $found = false;
            foreach($_SESSION['cart'] as $cart_item){
                //neu du lieu trung
                if($cart_item['id']==$id){
                    $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong']+1, 'giasanpham'=>$cart_item['giasanpham'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
                    $found = true;
                //neu du lieu khong trung
                }else{
                    $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'giasanpham'=>$cart_item['giasanpham'], 'hinhanh'=>$cart_item['hinhanh'], 'masanpham'=>$cart_item['masanpham']);
                    
                }
            }
            if($found == false){
                $_SESSION['cart'] = array_merge($product, $new_product);
            }
            else{
                $_SESSION['cart'] = $product;
            }
        }else{
            $_SESSION['cart'] = $new_product;
        }
    }
    header('Location: http://localhost:8080/TDQMilk/danhmuc/index.php?quanly=giohang');
}
print_r($_SESSION['cart']);
?>