<?php require_once(__DIR__ . "/../lang/lang.eu.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "contributors";
      $title = $lang["lang.contributors.title"];
      require(__DIR__ . "/../include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/colaboradores.css" rel="stylesheet">
  </head>
  <?php require(__DIR__ . "/../include/colaboradores.php"); ?>
</html>