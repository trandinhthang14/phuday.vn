<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Phủ dầy</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
</head>

<body>

    <?php

        if (!isset($_SESSION)) {
            session_start();
        }

        if (isset($_SESSION['admin'])) {
            $user_admin = (isset($_SESSION['admin'])) ? $_SESSION['admin'] : [];
        }

//         else {
            
//             echo "<script>
//             window.location.href = ‘http://localhost/phuday.vn/bai_tap_lon_web/admin/?view=login’;
// </script>";
            
//         }

        if (isset($_GET["view"])) {
            $view = $_GET["view"];
            include("". $view . ".php");
        } else {
            include("login.php");
        }
    ?>
</body>

</html>
</body>

</html>