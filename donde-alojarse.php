<?php require_once "lang/lang.es.php"; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">

  <head>
    <!-- Header tags and common CSS -->
    <?php
    $curPageName = "hotels";
    $pageTitle = $lang["lang.activities.hotels.title"];
    require "include/head.php";
    ?>

    <!-- Page CSS -->
    <link href="/styles/donde-alojarse.css" rel="stylesheet">
    <link href="/styles/list-group.css" rel="stylesheet">
  </head>

  <?php $hotels = json_decode(file_get_contents(__DIR__ . '/include/donde-alojarse.json'));
  require "include/donde-alojarse.php"; ?>

</html>
