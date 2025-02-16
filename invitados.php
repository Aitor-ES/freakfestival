<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "guests";
      $title = $lang["lang.head.title.invitados"];
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/invitados.css" rel="stylesheet">
    <link href="/styles/list-group.css" rel="stylesheet">
  </head>
  <?php $activityCategory = json_decode(file_get_contents(__DIR__ . '/include/invitados.json'));
        $categoryName = $activityCategory->categoryName;
        require("include/invitados.php"); ?>
</html>