<?php require_once(__DIR__ . "/../lang/lang.eu.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "donde-dormir";
      $title = $lang["lang.activities.hotels.title"];
      require(__DIR__ . "/../include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/donde-dormir.css" rel="stylesheet">
  </head>
  <?php $activityCategory = json_decode(file_get_contents(__DIR__ . '/../include/donde-dormir.json'));
        $categoryName = $activityCategory->categoryName;
        require(__DIR__ . "/../include/donde-dormir.php"); ?>
</html>