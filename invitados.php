<?php require_once "lang/lang.es.php"; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">

  <head>
    <!-- Header tags and common CSS -->
    <?php
    $curPageName = "guests";
    $pageTitle = $lang["lang.activities.guests.title"];
    require "include/head.php";
    ?>

    <!-- Page CSS -->
    <link href="/styles/invitados.css" rel="stylesheet">
    <link href="/styles/list-group.css" rel="stylesheet">
  </head>

  <?php $guests = json_decode(file_get_contents(__DIR__ . '/include/invitados.json'));
  require "include/invitados.php"; ?>

</html>
