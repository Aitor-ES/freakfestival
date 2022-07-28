<?php require_once(__DIR__ . "/../lang/lang.eu.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = $lang["lang.head.title.mapas-recinto"];
      require(__DIR__ . "/../include/head.php");
    ?>
  </head>
  <?php require(__DIR__ . "/../include/mapas-recinto.php"); ?>
</html>