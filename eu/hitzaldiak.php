<?php require_once(__DIR__ . "/../lang/lang.eu.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "charlas";
      $title = $lang["lang.activities.talks-exhibitions.title"];
      require(__DIR__ . "/../include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/callout.css" rel="stylesheet">
  </head>
  <?php require(__DIR__ . "/../include/charlas.php"); ?>
</html>