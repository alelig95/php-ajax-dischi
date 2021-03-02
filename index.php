<?php

require_once __DIR__ . '/database/database.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>


    <header>
      <div class="container">
        <img class="logo" src="https://1000logos.net/wp-content/uploads/2017/08/Spotify-Logo.png" alt="logo" />
      </div>
    </header>

    <?php

      foreach ($dischi as $key => $value) {

    ?>

    <div class="cds-container container">
      <div class="cd">
        <img src="<?php echo $value['poster']?>" alt="">
        <h3><?php echo $value["title"] ?></h3>
        <span class="author"><?php echo $value["author"] ?></span>
        <span class="year"><?php echo $value["year"] ?></span>
      </div>
    </div>

     <?php
      }
     ?>


  </body>
</html>
