<?php
     include("../../admincp/config/config.php");    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
</head>
<body>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.notice{
    text-align: center;
    position: relative;
    top: 250px;
    
}
body {
    background-color: hsl(151, 61%, 21%);
}
#birthday{
  position: relative;
  top:10px;
  margin-bottom: 20px;
  width: 100%;
  padding: 15px;
  background-color: #f1f1f1;
  border: none;
}
#check{
  margin-top:10px;
  margin-bottom: 20px;
}
#myInput{
  margin-bottom: 10px;
}

</style>
<body>
<?php
    if(isset($_GET['error'])){
        ?>
        <small class="alert alert-danger">Tên và Email cần phải có</small>
        <hr>
        <?php
    }
?>
  <form class="modal-content" action="userProfileUpdateProcess.php" method ="POST">
    <div class="container">
      <?php
        session_start();
        $currentUser = $_SESSION['login'];
        $sql = "SELECT * FROM tbl_signup WHERE username ='$currentUser'";

        $gotResuslts = mysqli_query($conn, $sql);

        if($gotResuslts){
            if(mysqli_num_rows($gotResuslts) >0 ){
                while($row = mysqli_fetch_array($gotResuslts)){
                    ?>
                        <h1>Thông tin người dùng</h1>    
                        <hr>                    
                        <label for="username"><b>Tên tài khoản</b></label>
                        <input type="text" name="username" value="<?php echo $row['username'] ?>" required>
                        <form action="/action_page.php">
                            <label for="birthday"><b>Ngày sinh</b></label> <br>
                            <input type="date" id="birthday" name="birthday" value="<?php echo $row['birthday'] ?>">
                        </form> <br>
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" value="<?php echo $row['email'] ?>" required>
                        <div class="form-group">
                            <button type="submit" name ="update" class="btn btn-info">Cập nhật thông tin</button>
                        </div>
                    <?php
                }
            }
        }
      ?>
    </div>
  </form>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>