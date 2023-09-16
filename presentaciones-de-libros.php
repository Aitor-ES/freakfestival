<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "presentaciones-de-libros";
      $title = $lang["lang.activities.book-releases.title"];
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/callout.css" rel="stylesheet">
  </head>
  <?php require("include/presentaciones-de-libros.php"); ?>
</html>