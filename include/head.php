<?php require_once("links.php"); ?>

<?php $title = isset($pageTitle) ? $pageTitle . " · " . $lang["lang.head.title"] : $lang["lang.head.title"]; ?>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $lang["lang.head.description"]; ?>">
<meta name="author" content="<?php echo $lang["lang.head.author"]; ?>">
<meta name="theme-color" content="#b92014">

<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@AsoValinor">
<meta name="twitter:creator" content="@AsoValinor">

<!-- Facebook -->
<meta property="og:url"
  content="https://freakfestival.es/<?php echo $links[$lang["lang"] . "." . $curPageName]; ?>.php">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $lang["lang.head.description"]; ?>">
<meta property='og:site_name' content="Freak Festival">
<meta property="og:locale" content="<?php echo $lang["lang"]; ?>_ES" />
<meta property="og:type" content="website">
<meta property="og:image" content="https://freakfestival.es/images/ui/banner_square-min.jpg">
<meta property="og:image:alt" content="Freak Festival">
<meta property="og:image:type" content="image/jpg">
<meta property="og:image:width" content="1000">
<meta property="og:image:height" content="1000">

<title><?php echo $title; ?></title>

<!-- Favicon -->
<link rel="icon" href="/images/ui/logos/favicon.png">

<!-- Common CSS -->
<!-- Inter font CSS -->
<link rel="preconnect" href="https://rsms.me/">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">

<!-- Google Fonts CSS - Outfit, Uncial Antiqua -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Uncial+Antiqua&display=swap"
  rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<!-- Bootstrap Icons CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<!-- Own Bootstrap colors CSS -->
<link href="/styles/color/bootstrap-color-ffscarlet.css" rel="stylesheet">
<link href="/styles/color/bootstrap-color-ffglacier.css" rel="stylesheet">
<link href="/styles/color/bootstrap-color-ffsunlight.css" rel="stylesheet">

<!-- Own CSS styles -->
<link href="/styles/main.css" rel="stylesheet">
<link href="/styles/fonts.css" rel="stylesheet">
<link href="/styles/layout.css" rel="stylesheet">
<link href="/styles/btn.css" rel="stylesheet">
<link href="/styles/header.css" rel="stylesheet">
<link href="/styles/footer.css" rel="stylesheet">
