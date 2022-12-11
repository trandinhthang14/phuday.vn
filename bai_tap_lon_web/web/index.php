
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Phủ Dầy</title>
    <link
      rel="stylesheet"
      href="font/fontawesome-free-6.2.0-web/css/all.min.css"
    />
    <link rel="stylesheet" href="css/c.css" />
  </head>

  <body class="home">
   
  <?php include("header.php") ?>

  <?php
  

  if (isset($_GET["view"])) {
    $view = $_GET["view"];
    include("". $view . ".php");
} else {
    include("main.php");
}

  ?>

<?php include("footer.php") ?>

    
  </body>
</html>
