<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "juegos-de-mesa";
      $title = $lang["lang.activities.board-games.title"];
      require("include/head.php");
    ?>
  </head>
  <?php $activityCategory = json_decode(file_get_contents(__DIR__ . '/include/juegos-de-mesa.json'));
        $categoryName = $activityCategory->categoryName;
        require("include/actividades.php"); ?>
</html>