<?php require_once(__DIR__ . "/../lang/lang.eu.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "rol-de-mesa";
      $title = $lang["lang.activities.rpg.title"];
      require(__DIR__ . "/../include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/actividades.css" rel="stylesheet">
    <link href="/styles/callout.css" rel="stylesheet">
  </head>
  <?php $activityCategory = json_decode(file_get_contents(__DIR__ . '/../include/rol-de-mesa.json'));
        $categoryName = $activityCategory->categoryName;
        require(__DIR__ . "/../include/actividades.php"); ?>
</html>