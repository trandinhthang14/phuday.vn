<?php
require_once('../Model/DBconnect.php');


if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM blogs WHERE id =$id";
    $query = mysqli_query($conn,$sql);
    if (isset($query)){
        header('Location: http://localhost/phuday.vn/bai_tap_lon_web/admin/?view=blog');
    }
}
?>


