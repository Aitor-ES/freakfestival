<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "index";
      $title = $lang["lang.head.title.index"];
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/index.css" rel="stylesheet">
  </head>
  <?php require("include/index.php"); ?>
</html>