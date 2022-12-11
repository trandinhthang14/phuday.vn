<?php

require_once('../Model/DBconnect.php');

$error = [];


if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email)) {
        $error['email'] = "Vui lòng nhập email";
    }
    if (empty($password)) {
        $error['password'] = "Vui lòng nhập password";
    }

    $sql = "SELECT * FROM admins WHERE email = '$email'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
    $checkEmail = mysqli_num_rows($query);

    if (!isset($_SESSION)) {
        session_start();
    }
    if ($checkEmail == 1) {
        $checkPass = password_verify($password, $data['password']);

        if ($checkPass) {
            $_SESSION['admin'] = $data;
            header('Location: http://localhost/phuday.vn/bai_tap_lon_web/admin/?view=blog');
        } else {
            echo "<script>
            alert('Sai mật khẩu');
               </script>";
        }
    } else {
        echo "<script>
        alert('Email không tồn tại mời bạn quay lại đăng kí');
           </script>";
    }
}

?>

<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form class="form-login" action="" method="post">
    <h3>Login Here</h3>

    <label for="email">Email</label>
    <input type="text" placeholder="Email" id="email" name="email">

    <div class="error-validate">
        <span><?php echo (isset($error['email'])) ? $error['email'] : '' ?></span>
    </div>

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="password">

    <div class="error-validate">
        <span><?php echo (isset($error['password'])) ? $error['password'] : '' ?></span>
    </div>

    <button type="submit">Log In</button>
    <div class="register">
        <a href="?view=register">Register</a>
    </div>
</form>
