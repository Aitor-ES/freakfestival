<?php require_once(__DIR__ . "/../lang/lang.eu.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "concursos";
      $title = $lang["lang.activities.contests.title"];
      require(__DIR__ . "/../include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/list-group.css" rel="stylesheet">
  </head>
  <?php require(__DIR__ . "/../include/concursos.php"); ?>
</html>