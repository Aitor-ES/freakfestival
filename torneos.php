<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "torneos";
      $title = $lang["lang.activities.tournaments.title"];
      require("include/head.php");
    ?>
  </head>
  <?php $activityCategory = json_decode(file_get_contents(__DIR__ . '/include/torneos.json'));
        $categoryName = $activityCategory->categoryName;
        require("include/actividades.php"); ?>
</html>