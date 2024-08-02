<?php require_once("links.php"); ?>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $lang["lang.head.description"]; ?>">
<meta name="author" content="<?php echo $lang["lang.head.author"]; ?>">
<meta name="theme-color" content="#191d38">

<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@AsoValinor">
<meta name="twitter:creator" content="@AsoValinor">
<meta name="twitter:title" content="<?php echo $title; ?> · <?php echo $lang["lang.head.title.name"]; ?>">
<meta name="twitter:description" content="<?php echo $lang["lang.head.description"]; ?>">
<meta name="twitter:image" content="https://freakfestival.es/images/photos/banner_square-min.jpg">

<!-- Facebook -->
<meta property="og:url" content="https://freakfestival.es/<?php if ($lang["lang"] == "eu") echo "eu/"; ?><?php echo $links[$lang["lang"] . "." . $curPageName]; ?>.php">
<meta property="og:title" content="<?php echo $title; ?> · <?php echo $lang["lang.head.title.name"]; ?>">
<meta property="og:description" content="<?php echo $lang["lang.head.description"]; ?>">
<meta property='og:site_name' content='Freak Festival'>
<meta property="og:type" content="article">
<meta property="og:image" content="https://freakfestival.es/images/photos/banner_square-min.jpg">
<meta property="og:image:type" content="image/jpg">
<meta property="og:image:width" content="1000">
<meta property="og:image:height" content="1000">

<title><?php echo $title; ?> · <?php echo $lang["lang.head.title.name"]; ?></title>

<!-- Favicon -->
<link rel="icon" href="/images/logos/favicon.png">

<!-- Common CSS -->
<!-- Inter font CSS -->
<link rel="preconnect" href="https://rsms.me/">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">

<!-- Uncial Antiqua font CSS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Bootstrap Icons CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Own Bootstrap colors CSS -->
<link href="/styles/color/bootstrap-color-ffscarlet.css" rel="stylesheet">
<link href="/styles/color/bootstrap-color-ffglacier.css" rel="stylesheet">

<link href="/styles/color/bootstrap-color-ffmidnight.css" rel="stylesheet">
<link href="/styles/color/bootstrap-color-ffdiamond.css" rel="stylesheet">
<link href="/styles/color/bootstrap-color-ffsea.css" rel="stylesheet">
<link href="/styles/color/bootstrap-color-ffocean.css" rel="stylesheet">
<link href="/styles/color/bootstrap-color-ffsunlight.css" rel="stylesheet">

<!-- Own CSS styles -->
<link href="/styles/main.css" rel="stylesheet">
<link href="/styles/fonts.css" rel="stylesheet">
<link href="/styles/layout.css" rel="stylesheet">
<link href="/styles/btn.css" rel="stylesheet">
<link href="/styles/header.css" rel="stylesheet">
<link href="/styles/footer.css" rel="stylesheet">