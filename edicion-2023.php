<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "edicion-2023";
      $title = $lang["lang.head.title.edition-2023"];
      require("include/head.php");
    ?>

    <!-- Lightbox2 library -->
    <link href="/libraries/lightbox2/css/lightbox.min.css" rel="stylesheet">
    <link href="/styles/invitados.css" rel="stylesheet">
    <link href="/styles/fotos.css" rel="stylesheet">
  </head>
  <?php require("include/edicion-2023.php"); ?>
</html>