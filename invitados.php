<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = $lang["lang.head.title.invitados"];
      require("include/head.php");
    ?>
  </head>
  <?php require("include/invitados.php"); ?>
</html>