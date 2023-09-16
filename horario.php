<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "horario";
      $title = $lang["lang.head.title.horario"];
      require("include/head.php");
    ?>
  </head>
  <?php require("include/horario.php"); ?>
</html>