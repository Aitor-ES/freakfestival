<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "edicion-2024";
      $title = $lang["lang.head.title.edition-2024"];
      require("include/head.php");
    ?>

    <!-- Lightbox2 library -->
    <link href="/libraries/lightbox2/css/lightbox.min.css" rel="stylesheet">

    <!-- Page CSS -->
    <link href="/styles/fotos.css" rel="stylesheet">
  </head>
  <?php require("include/edicion-2024.php"); ?>
</html>