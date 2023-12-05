<div class="headline">
  <h3>Giỏ hàng</h3>
</div>
<div class="container" style="overflow-x:auto;">
<?php
session_start();
// if (isset($_SESSION['cart'])) {
//   echo "<pre>";
//   print_r($_SESSION['cart']);
//   echo "</pre>";
// }
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<table style="width: 100%;text-align:center" border="2">
  <tr>
    <th>ID</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
  </tr>
  <?php
  if (isset($_SESSION['cart'])) {
    $i = 0;
    $tongtien = 0;
    foreach ($_SESSION['cart'] as $cart_item) {
      $thanhtien = $cart_item['soluong'] * $cart_item['giasanpham'];
      $tongtien += $thanhtien;
      $i++;
  ?>
      <tr>
        <th><?php echo $i ?></th>
        <th><?php echo $cart_item['masanpham'] ?></th>
        <th><?php echo $cart_item['tensanpham'] ?></th>
        <th><img src="../admincp/modules/quanlysanpham/Upload/<?php echo $cart_item['hinhanh'];?>" width="100px" height="100px"></th>
        <th>
          <a href="http://localhost:8080/TDQMilk/danhmuc/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
          <?php echo $cart_item['soluong'] ?>
          <a href="http://localhost:8080/TDQMilk/danhmuc/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
        </th>
        <th><?php echo number_format($cart_item['giasanpham']) . 'VNĐ' ?></th>
        <th><?php echo number_format($thanhtien) . 'VNĐ' ?></th>
        <th><a href="http://localhost:8080/TDQMilk/danhmuc/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></th>
      </tr>

    <?php
    }
    ?>
    <tr>
      <td colspan="8">
        <p>Tổng tiền: <?php echo number_format($tongtien) . 'VNĐ' ?></p>
      </td>
    </tr>
  <?php
  } else {
  ?>
    <tr>
      <td colspan="8">
        <p>Hiện tại giỏ hàng trống</p>
      </td>
    </tr>
  <?php
  }
  ?>

</table>
</div>