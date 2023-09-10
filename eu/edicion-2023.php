<?php require_once(__DIR__ . "/../lang/lang.eu.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = $lang["lang.head.title.edition-2023"];
      require(__DIR__ . "/../include/head.php");
    ?>

    <!-- Lightbox2 library -->
    <link href="/libraries/lightbox2/css/lightbox.min.css" rel="stylesheet">
    <link href="/styles/invitados.css" rel="stylesheet">
    <link href="/styles/fotos.css" rel="stylesheet">
  </head>
  <?php require(__DIR__ . "/../include/edicion-2023.php"); ?>
</html>