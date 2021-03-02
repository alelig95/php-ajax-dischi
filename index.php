<?php

require_once __DIR__ . '/database/database.php';

print_r($dischi);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>

    <div class="container">
      <?php
      foreach ($dischi as $key => $value) {

     ?>

     <img src=" . '<?php echo $value['poster']?>' . " alt="">
     <h2><?php echo $value["author"] ?></h2>
     <p><?php echo $value["year"] ?></p>

     <?php
      }
     ?>
    </div>

  </body>
</html>
