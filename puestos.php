<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "puestos";
      $title = $lang["lang.activities.stands.title"];
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/puestos.css" rel="stylesheet">
  </head>
  <?php $activityCategory = json_decode(file_get_contents(__DIR__ . '/include/puestos.json'));
        $categoryName = $activityCategory->categoryName;
        require("include/puestos.php"); ?>
</html>