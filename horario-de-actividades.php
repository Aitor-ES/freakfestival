<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "timetable";
      $title = $lang["lang.head.title.horario-de-actividades"];
      require("include/head.php");
    ?>
  </head>
  <?php require("include/horario-de-actividades.php"); ?>
</html>