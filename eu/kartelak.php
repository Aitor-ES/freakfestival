<?php require_once __DIR__ . "/../lang/lang.eu.php"; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">

  <head>
    <!-- Header tags and common CSS -->
    <?php
    $curPageName = "posters";
    $pageTitle = $lang["lang.posters.title"];
    require __DIR__ . "/../include/head.php";
    ?>

    <!-- Lightbox2 library -->
    <link href="/libraries/lightbox2/css/lightbox.min.css" rel="stylesheet">

    <!-- Page CSS -->
    <link href="/styles/list-group.css" rel="stylesheet">
  </head>

  <?php require __DIR__ . "/../include/carteles.php"; ?>

</html>
