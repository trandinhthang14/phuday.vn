<?php 

if (!isset($_SESSION)) {
    session_start();
}
$getIdAdmin = $_SESSION['admin']['id'];

?>

<div class="nav-bar">Bên trái blog</div>
<a href="?view=blog"> Blog list</a>
<a href="?view=admin-edit&id=<?php echo $getIdAdmin ?>"> Sủa admin</a>
<a href="?view=admin-logout"> Logout admin</a>