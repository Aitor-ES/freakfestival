<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "invitados";
      $title = $lang["lang.head.title.invitados"];
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/invitados.css" rel="stylesheet">
  </head>
  <?php require("include/invitados.php"); ?>
</html>