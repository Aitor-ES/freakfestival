<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "salas";
      $title = $lang["lang.head.title.salas"];
      require("include/head.php");
    ?>
  </head>
  <?php require("include/salas.php"); ?>
</html>