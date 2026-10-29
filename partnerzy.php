<?php
$title = 'Partnerzy - Wielka Draka dla Dzieciaka';
$desc  = 'Partnerzy wspierający Wielką Drakę dla Dzieciaka. Dziękujemy firmom, które pomagają nam pomagać. Chcesz dołączyć? Skontaktuj się z nami!';
$page  = 'partnerzy';
include __DIR__ . '/partials/header.php';

$partners = [
  ['coca-cola.webp','Coca-Cola'], ['decathlon.svg','Decathlon'], ['mbank.webp','mBank'],
  ['starbucks.webp','Starbucks'], ['superpharm.webp','Super-Pharm'], ['hp.webp','HP'],
  ['energylandia.webp','Energylandia'], ['eska.svg','Radio Eska'], ['tous.webp','TOUS'],
  ['tolpa.webp','Tołpa'], ['lajkonik.svg','Lajkonik'], ['goralki.webp','Góralki'],
  ['roedl.webp','Rödl & Partner'], ['lokum.svg','Lokum Deweloper'], ['fundacja-gpw.webp','Fundacja GPW'],
  ['ds.webp','DS'], ['ewelina.webp','Ewelina Kosmetyczna'], ['vitmeup.webp','VitMeUp'],
  ['tp-wroclaw.webp','TP Wrocław'],
];
?>

<section class="page-head">
    <?php $corners_soft = true; include __DIR__ . "/partials/corners.php"; ?>
    <div class="container">
    <span class="eyebrow">Dziękujemy!</span>
    <h1>Nasi partnerzy</h1>
    <p>Jesteśmy niezmiernie wdzięczni partnerom naszego wydarzenia, którzy wspierają nas finansowo. Jeżeli chcesz do nich dołączyć - skontaktuj się z nami!</p>
    <p style="margin-top:1.2rem"><a class="btn btn-red" href="kontakt.php">Skontaktuj się z nami</a></p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="center reveal" style="margin-bottom:1.6rem">Zaufali nam</h2>
    <div class="partners-grid">
      <?php foreach ($partners as $i => [$file, $name]): ?>
      <div class="partner reveal" data-delay="<?= ($i % 5) * 50 ?>">
        <img src="images/partnerzy/<?= $file ?>" alt="<?= htmlspecialchars($name) ?>" loading="lazy">
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
