<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $curPageName = "talleres";
      $title = $lang["lang.activities.workshops.title"];
      require("include/head.php");
    ?>
  </head>
  <?php require("include/talleres.php"); ?>
</html>