<?php require_once(__DIR__ . "/../lang/lang.eu.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "edition-2018";
      $title = $lang["lang.head.title.edition-2018"];
      require(__DIR__ . "/../include/head.php");
    ?>

    <!-- Lightbox2 library -->
    <link href="/libraries/lightbox2/css/lightbox.min.css" rel="stylesheet">

    <!-- Page CSS -->
    <link href="/styles/fotos.css" rel="stylesheet">
  </head>
  <?php require(__DIR__ . "/../include/edicion-2018.php"); ?>
</html>