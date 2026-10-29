<?php

$title = $title ?? 'Wielka Draka dla Dzieciaka - studencka akcja charytatywna';
$desc  = $desc  ?? 'Wielka Draka dla Dzieciaka - największa studencka akcja charytatywna ZSP przy Uniwersytecie Ekonomicznym we Wrocławiu. Pod patronatem Fundacji Polsat pomagamy dzieciom poprzez dobrą zabawę.';
$page  = $page  ?? 'start';

if (!defined('ZBIORKA_URL')) define('ZBIORKA_URL', '#');

if (!defined('IG_URL'))  define('IG_URL',  'https://www.instagram.com/wielkadrakadladzieciaka/');
if (!defined('FB_URL'))  define('FB_URL',  'https://www.facebook.com/WielkaDrakadlaDzieciaka');
if (!defined('TT_URL'))  define('TT_URL',  'https://www.tiktok.com/@wielkadrakadladzieciaka');
if (!defined('MAIL'))    define('MAIL',    'wielkadrakadladzieciaka.zsp@gmail.com');

if (!defined('SITE_URL')) define('SITE_URL', 'https://wielkadraka.pl');
$self = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$canonical = rtrim(SITE_URL, '/') . '/' . ($self === 'index.php' ? '' : $self);

$nav = [
  'poznaj-nas'        => ['Poznaj nas',       'poznaj-nas.php',        'red'],
  'o-projekcie'       => ['O projekcie',      'o-projekcie.php',       'yellow'],
  'fundacja-polsat'   => ['Fundacja Polsat',  'fundacja-polsat.php',   'green'],
  'poprzednie-edycje' => ['Poprzednie edycje','poprzednie-edycje.php', 'blue'],
  'partnerzy'         => ['Partnerzy',        'partnerzy.php',         'red'],
  'kontakt'           => ['Kontakt',          'kontakt.php',           'yellow'],
];
?>
<!doctype html>
<html lang="pl" class="html">
<head>
  <script>document.documentElement.className += ' js';</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($desc) ?>">
  <meta name="theme-color" content="#F6F3EA">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
  <meta property="og:site_name" content="Wielka Draka dla Dzieciaka">
  <meta property="og:locale" content="pl_PL">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
  <meta property="og:image" content="<?= rtrim(SITE_URL, '/') ?>/og-image.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta name="twitter:card" content="summary_large_image">

  <link rel="icon" href="favicon-32.png" sizes="any" type="image/png">
  <link rel="apple-touch-icon" href="favicon-180.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css?v=3">

  <script type="application/ld+json">
  {
    "@context":"https://schema.org","@type":"Organization",
    "name":"Wielka Draka dla Dzieciaka",
    "description":"Największa studencka akcja charytatywna organizowana przez Zrzeszenie Studentów Polskich przy Uniwersytecie Ekonomicznym we Wrocławiu, pod patronatem Fundacji Polsat.",
    "email":"wielkadrakadladzieciaka.zsp@gmail.com",
    "url":"https://wielkadraka.pl",
    "address":{"@type":"PostalAddress","streetAddress":"Kamienna 57, Biuro 15","postalCode":"53-345","addressLocality":"Wrocław","addressCountry":"PL"},
    "sameAs":["https://www.instagram.com/wielkadrakadladzieciaka/","https://www.facebook.com/WielkaDrakadlaDzieciaka","https://www.tiktok.com/@wielkadrakadladzieciaka"]
  }
  </script>
</head>
<body<?= $page === 'start' ? ' class="is-home"' : '' ?>>

<a class="skip-link" href="#main">Przejdź do treści</a>

<header class="site-header" id="siteHeader">
  <div class="container header-inner">
    <a class="brand" href="index.php" aria-label="Wielka Draka dla Dzieciaka - strona główna">
      <img src="images/logo/draka-sygnet.webp" alt="" width="48" height="48">
      <b>Wielka Draka<br>dla Dzieciaka</b>
    </a>

    <nav class="nav" id="mainNav" aria-label="Menu główne">
      <ul class="nav-list" id="navList">
        <?php foreach ($nav as $slug => [$label, $href, $c]): ?>
          <li><a href="<?= $href ?>" data-c="<?= $c ?>"<?= $page === $slug ? ' class="active" aria-current="page"' : '' ?>><?= $label ?></a></li>
        <?php endforeach; ?>
        <li class="nav-cta-mobile"><a class="btn btn-red" href="<?= ZBIORKA_URL ?>">❤ Wesprzyj zbiórkę</a></li>
      </ul>
    </nav>

    <button class="nav-toggle" id="navToggle" aria-label="Otwórz menu" aria-expanded="false" aria-controls="navList">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<main id="main">
