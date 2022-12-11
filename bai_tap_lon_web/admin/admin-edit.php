<style>
    body {
        background: #fff;
    }
 input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  background: red;
}

</style>


<?php
require_once('../Model/DBconnect.php');
if (!isset($_SESSION)) {
    session_start();
}

$error = [];

$id = $_GET['id'];

$sql = "SELECT * FROM admins where id='$id'";
$query = mysqli_query($conn, $sql);
$admin = mysqli_fetch_array($query);

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    if (empty($name)) {
        $error['name'] = "Vui lòng nhập tên";
    }


    if (empty($password)) {
        $error['password'] = "Vui lòng nhập password";
    }
    if ($password != $re_password) {
        $error['re_password'] = "Mật khẩu không trùng khớp";
    }
    $sql = "UPDATE admins SET name='$name',password = '$password_hash' WHERE id='$id'";


    $query = mysqli_query($conn, $sql);
    if (isset($query)) {
        echo " <script>alert('Sửa thông tin thành công')
    </script>";

    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}

?>


<div class="adminer">
<?php include("nav.php") ?>
<div class="content">

<form action="" method="post">
  <label for="fname">Name</label>
  <input type="text" placeholder="Name" id="name" name="name" value="<?php echo $admin['name']; ?>">

  <div class="error-validate">
        <span><?php echo (isset($error['name'])) ? $error['name'] : '' ?></span>
    </div>

  <label for="fname">Email</label>
  <input type="email" disabled placeholder="Email" id="email" name="email" value="<?php echo $admin['email']; ?>">

  <label for="lname">Password</label>
  <input type="password" placeholder="Password" id="password" name="password">

  <div class="error-validate">
        <span><?php echo (isset($error['password'])) ? $error['password'] : '' ?></span>
    </div>


  <label for="lname">Re Password</label>
  <input type="password" placeholder="Re Password" id="re_password" name="re_password">

  <div class="error-validate">
        <span><?php echo (isset($error['re_password'])) ? $error['re_password'] : '' ?></span>
    </div>

    <button type="submit">Chỉnh sửa</button>


</form>


</div>
</div>