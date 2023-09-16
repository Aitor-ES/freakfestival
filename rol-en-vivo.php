<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "rol-en-vivo";
      $title = $lang["lang.activities.larp.title"];
      require("include/head.php");
    ?>
  </head>
  <?php require("include/rol-en-vivo.php"); ?>
</html>