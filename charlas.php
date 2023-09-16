<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "charlas";
      $title = $lang["lang.activities.talks-exhibitions.title"];
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/callout.css" rel="stylesheet">
  </head>
  <?php require("include/charlas.php"); ?>
</html>