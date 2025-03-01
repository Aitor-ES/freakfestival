<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "maps";
      $title = $lang["lang.head.title.planos"];
      require("include/head.php");
    ?>
  </head>
  <?php require("include/planos.php"); ?>
</html>