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

    <!-- Page CSS -->
    <link href="/styles/actividades.css" rel="stylesheet">
    <link href="/styles/callout.css" rel="stylesheet">
    <link href="/styles/list-group.css" rel="stylesheet">
  </head>
  <?php $activityCategory = json_decode(file_get_contents(__DIR__ . '/include/rol-en-vivo.json'));
        $categoryName = $activityCategory->categoryName;
        require("include/actividades.php"); ?>
</html>