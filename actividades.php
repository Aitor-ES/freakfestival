<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "actividades";
      $title = $lang["lang.activities.title"];
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/actividades.css" rel="stylesheet">
    <link href="/styles/list-group.css" rel="stylesheet">
  </head>
  <?php $activities = json_decode(file_get_contents(__DIR__ . '/include/actividades.json'));
        $categoryName = "activities";
        require("include/actividades.php"); ?>
</html>