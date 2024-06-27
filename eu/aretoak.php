<?php require_once(__DIR__ . "/../lang/lang.eu.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "salas";
      $title = $lang["lang.head.title.salas"];
      require(__DIR__ . "/../include/head.php");
    ?>
  </head>
  <?php require(__DIR__ . "/../include/salas.php"); ?>
</html>