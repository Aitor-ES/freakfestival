<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "hotels";
      $title = $lang["lang.activities.hotels.title"];
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/donde-dormir.css" rel="stylesheet">
    <link href="/styles/list-group.css" rel="stylesheet">
  </head>
  <?php $activityCategory = json_decode(file_get_contents(__DIR__ . '/include/donde-dormir.json'));
        $categoryName = $activityCategory->categoryName;
        require("include/donde-dormir.php"); ?>
</html>