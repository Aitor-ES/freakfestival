<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "concursos";
      $title = $lang["lang.activities.contests.title"];
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/list-group.css" rel="stylesheet">
  </head>
  <?php require("include/concursos.php"); ?>
</html>