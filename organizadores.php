<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "organizadores";
      $title = $lang["lang.head.title.organizadores"];
      require("include/head.php");
    ?>
  </head>
  <?php require("include/organizadores.php"); ?>
</html>