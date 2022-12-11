<style>
    body {
        background: #fff;
    }

    input,textarea {
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

$sql = "SELECT * FROM blogs where id='$id'";
$query = mysqli_query($conn, $sql);
$blog = mysqli_fetch_array($query);

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $detail = $_POST['detail'];

    if (empty($title)) {
        $error['title'] = "Vui lòng nhập tên";
    }

    if (empty($image)) {
        $error['image'] = "Vui lòng chọn ảnh";
    }

    if (empty($description)) {
        $error['description'] = "Vui lòng nhập mô tả";
    }
    if (empty($detail)) {
        $error['detail'] = "Vui lòng nhập mô tả chi tiết";
    }
    $datetime = date("Y-m-d H:i:s A");

    $sql = "UPDATE blogs SET title='$title',image = '$image',
    description = '$description',detail = '$detail',datetime = '$datetime'
     WHERE id='$id'";


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
      <h2>Chỉnh sửa bài viết
</h2>
        <form action="" method="post">
            <label for="fname">Title</label>
            <input type="text" placeholder="Title" id="title" name="title"
                value="<?php echo $blog['title']; ?>">

            <div class="error-validate">
                <span><?php echo (isset($error['title'])) ? $error['title'] : '' ?></span>
            </div>

            <label for="fname">Image</label>
            <input type="text" placeholder="Image" id="image" name="image"
                value="<?php echo $blog['image']; ?>">

             <div class="error-validate">
                <span><?php echo (isset($error['image'])) ? $error['image'] : '' ?></span>
            </div>

            <label for="fname">Mô tả</label>
            <input type="text" placeholder="Mô tả" id="description" name="description"
                value="<?php echo $blog['description']; ?>">

             <div class="error-validate">
                <span><?php echo (isset($error['description'])) ? $error['description'] : '' ?></span>
            </div>

            <label for="fname">Chi Tiết</label>
            <textarea name="detail" id="detail"><?php echo $blog['detail']; ?></textarea>
             <div class="error-validate">
                <span><?php echo (isset($error['detail'])) ? $error['detail'] : '' ?></span>
            </div>

            <button type="submit">Chỉnh sửa blog</button>


        </form>


    </div>
</div>