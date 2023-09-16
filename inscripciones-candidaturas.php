<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "inscripciones-candidaturas";
      $title = $lang["lang.head.title.registrations-applications"];
      require("include/head.php");
    ?>
  </head>
  <?php require("include/inscripciones-candidaturas.php"); ?>
</html>