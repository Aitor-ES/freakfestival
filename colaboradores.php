<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "contributors";
      $pageTitle = $lang["lang.contributors.title"];
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/colaboradores.css" rel="stylesheet">
  </head>
  <?php require("include/colaboradores.php"); ?>
</html>