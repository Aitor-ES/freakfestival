<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "otras-actividades";
      $title = $lang["lang.activities.others.title"];
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/actividades.css" rel="stylesheet">
  </head>
  <?php $activityCategory = json_decode(file_get_contents(__DIR__ . '/include/otras-actividades.json'));
        $categoryName = $activityCategory->categoryName;
        require("include/actividades.php"); ?>
</html>