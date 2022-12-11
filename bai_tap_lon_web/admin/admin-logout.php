<?php


if (!isset($_SESSION)) {
    session_start();
} 
unset($_SESSION['admin']);
session_destroy();

header('Location: http://localhost/phuday.vn/bai_tap_lon_web/admin/');

?>

