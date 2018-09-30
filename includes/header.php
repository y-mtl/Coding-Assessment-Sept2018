<!DOCTYPE html>
<?php include_once 'set_lang.php'; ?>
<?php $baseUrl = "./"; // add page url here. e.g. "https://abcxyz.com/" ?>
<html lang="<?php echo $language; ?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta name="robots" content="index, follow"> -->
<title><?php echo $text_main['title']; ?></title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700%7CRoboto:100,300,400,500,700,900">
<link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/swiper.min.css">
<link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/style.css">

<!-- the code below is for SEO canonical when adding actual $baseUrl -->
<!-- <link rel="canonical" href="<?php echo $baseUrl; ?>"> -->

<noscript>
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/noscript.css" />
</noscript>
<link rel="icon" href="<?php echo $baseUrl; ?>assets/images/favicon.png" />
<!-- favicon for iOS and Android if the images are avaialbe
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $baseUrl; ?>assets/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $baseUrl; ?>assets/images/favicon/android-icon-192x192.png"> -->
<!-- <meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff"> -->
<!-- /.favicon -->
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <a class="logo" href="<?php echo $baseUrl?>"><img src="<?php echo $baseUrl?>assets/images/logo.png" alt="Applauz Logo"/></a>
          <h1><?php echo $text_main['h1']; ?></h1>
          <a id="nav-toggle" class="close">
            <span></span>
            <span></span>
            <span></span>
          </a>
          <?php include_once 'nav.php'; ?>
        </div>
      </div>
    </div><!-- /.container -->
  </header>
  <main class="main">
    <div class="container-fluid">
      <div class="row">