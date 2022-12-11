<style>
    body {
        background: #fff;
    }

    #blogs {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#blogs td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#blogs tr:nth-child(even){background-color: #f2f2f2;}

#blogs tr:hover {background-color: #ddd;}

#blogs th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.image-blog {
    width: 100px;
    height: 100px;
  object-fit: cover;
}

</style>

<?php

require_once('../Model/DBconnect.php');

$data = "SELECT * FROM blogs";

if (!isset($_SESSION)) {
    session_start();
}


$result = mysqli_query($conn, $data);

?>





<div class="adminer">

<?php include("nav.php") ?>

<div class="content">


<h1>Danh sách blog</h1>
<a href="?view=blog-create">Create</a>
<table id="blogs">
  <tr>
    <th>Title</th>
    <th>Ảnh</th>
    <th>Mô tỏ</th>
    <th>Action</th>
  </tr>
  <?php foreach ($result as $key => $f) : ?>
  <tr>
    <td><?php echo $f["title"] ?></td>
    <td><img class="image-blog" src="<?php echo $f["image"] ?>" alt="error"></td>
    <td><?php echo $f["description"] ?></td>
    <td>
        <a href="?view=blog-edit&id=<?php echo $f['id'] ?>">Edit</a>
        <a  href="?view=blog-delete&id=<?php echo $f['id'] ?>">Delete</a>
        
    </td>
  </tr>
  <?php endforeach; ?>
  
</table>


</div>
</div>

