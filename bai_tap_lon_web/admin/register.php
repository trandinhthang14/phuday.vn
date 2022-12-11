<?php
require_once('../Model/DBconnect.php');

$error = [];

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    if (empty($name)) {
        $error['name'] = "Xin hãy nhập tên của bạn.";
    }
    if (empty($email)) {
        $error['email'] = "Hãy điền địa chỉ email của bạn.";
    }
    if (empty($password)) {
        $error['password'] = "Vui lòng nhập mật khẩu của bạn.";
    }


    if ($password != $re_password) {
        $error['re_password'] = "Vui lòng nhập lại password";
    }

    $datetime = date("Y-m-d H:i:s A");

    if (empty($error)) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO admins (name, email,password,datetime)
VALUES ('$name', '$email','$password','$datetime')";

        $checkEmail = "SELECT * FROM admins WHERE email = '$email'";
        $queryEmail = mysqli_query($conn, $checkEmail);
        $checkEmail = mysqli_num_rows($queryEmail);

        if ($checkEmail == 1) {
            echo " <script>
            alert('Địa chỉ email đã tồn tại.');
               </script>";
        } else {
            $query = mysqli_query($conn, $sql);
        }
    }

    if (isset($query)) {
        header('Location: http://localhost/phuday.vn/bai_tap_lon_web/admin/');

        exit;
    }
}
?>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form class="form-register" action="" method="post">
    <h3>Register</h3>

    <label for="name">Name</label>
    <input type="text" placeholder="Name" name="name" id="name">

    <div class="error-validate">
        <span><?php echo (isset($error['name'])) ? $error['name'] : '' ?></span>
    </div>

    <label for="email">Email</label>
    <input type="text" placeholder="Email" name="email" id="email">

    <div class="error-validate">
        <span><?php echo (isset($error['email'])) ? $error['email'] : '' ?></span>
    </div>

    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password" id="password">

    <div class="error-validate">
        <span><?php echo (isset($error['password'])) ? $error['password'] : '' ?></span>
    </div>

    <label for="re-password">Re Password</label>
    <input type="password" placeholder="Re Password" name="re_password" id="re_password">

    <div class="error-validate">
        <span><?php echo (isset($error['re_password'])) ? $error['re_password'] : '' ?></span>
    </div>

    <button type="submit">Register</button>
    <div class="register">
        <a href="?view=login">Login</a>
    </div>
</form>
