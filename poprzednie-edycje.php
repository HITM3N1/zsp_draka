<?php
$title = 'Poprzednie edycje - Wielka Draka dla Dzieciaka';
$desc  = 'Historia Wielkiej Draki dla Dzieciaka edycja po edycji - komu pomogliśmy, ile udało się zebrać i jakie wydarzenia organizowaliśmy przez lata.';
$page  = 'poprzednie-edycje';
include __DIR__ . '/partials/header.php';

$editions = [
  ['2025','XX',   'prawie 48 000 zł', 'Pomoc trafiła do 9-letniego <strong>Igora</strong> zmagającego się z MPD i autyzmem - zebrane środki przeznaczyliśmy na jego rehabilitację. W programie znalazły się DrakArt, Kino z Draką, turniej siatkówki, Bingo, PubQuiz, Studenckie Odcinki Komediowe (SOK), Bal Charytatywny, Silent Disco oraz Dancing with Draka.', 4],
  ['2024','XIX',  '37 130 zł', 'Wsparliśmy 10-letnią <strong>Dominikę</strong> w operacjach plastycznych, implantach i rehabilitacji po usunięciu nowotworu żuchwy. W ramach akcji zorganizowaliśmy Tydzień Drakowy, Koncert Charytatywny, Silent Disco, PubQuiz, grę miejską PubCrime, Bingo, SOK oraz Bal Charytatywny.', 4],
  ['2023','XVIII','53 486 zł', 'Na rzecz <strong>Julii</strong> z zespołem Angelmana sfinansowaliśmy specjalistyczną bieżnię rehabilitacyjną. Uczestnicy mogli wziąć udział w Balu Charytatywnym, Koncercie Charytatywnym, stand-upach SOK, PubQuizie, wieczorach planszówkowych i turniejach integracyjnych.', 4],
  ['2022','XVII', '37 866 zł', 'Dla <strong>Aleksandra</strong> z zespołem Downa i głębokim niedosłuchem zbieraliśmy środki na ciągłą terapię. Wydarzenia edycji obejmowały Bal Charytatywny, Studenckie Odcinki Komediowe (SOK), Bingo, PubQuiz oraz internetowe licytacje.', 3],
  ['2021','XVI',  '33 380 zł', 'Zebrane środki przeznaczyliśmy na rehabilitację i ortezy korygujące dla <strong>Leny</strong>. W formule hybrydowej odbyły się Bal Charytatywny, SOK, charytatywne turnieje gamingowe oraz e-licytacje.', 2],
  ['2020','XV',   '24 241 zł', 'Pomogliśmy bliźniakom <strong>Szymonowi i Dawidowi</strong> z MPD i wadą serca. Z powodu pandemii akcja przeniosła się do sieci i objęła internetowe występy SOK live, wirtualne turnieje gier wideo, wyzwania sportowe oraz aukcje live.', 2],
  ['2019','XIV',  '42 565 zł', 'Zebrane fundusze przeznaczyliśmy na ratującą wzrok terapię komórkami macierzystymi dla <strong>Martyny</strong>. Wydarzenia edycji to Bal Charytatywny, Koncert Charytatywny, Studenckie Odcinki Komediowe (SOK), PubQuiz oraz kampusowe kiermasze ciast.', 0],
  ['2018','XIII', '40 138 zł', 'Dla cierpiącej na chorobę pęcherzową skóry (EB) <strong>Karoliny</strong> zbieraliśmy na zakup opatrunków i leków. W ramach akcji zorganizowaliśmy Bal Charytatywny, SOK, Koncert Charytatywny, rozgrywki planszowe oraz zbiórki na terenie uczelni.', 0],
];
?>

<section class="page-head">
    <?php $corners_soft = true; include __DIR__ . "/partials/corners.php"; ?>
    <div class="container">
    <span class="eyebrow b">Nasza historia</span>
    <h1>Poprzednie edycje</h1>
    <p>Każdego roku, dzięki ogromnemu sercu darczyńców, udaje nam się zdziałać coraz więcej. Oto komu pomogliśmy i co razem osiągnęliśmy.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="edition featured" style="margin-bottom:1.6rem">
      <div class="year">2026</div>
      <div class="roman">XXI. EDYCJA - TRWA TERAZ</div>
      <p style="color:var(--ink-soft)">Naszym celem jest uzbieranie <strong>ponad 50 000 zł</strong> na leczenie 7-letniej Zosi i rocznej Mai. Wierzymy, że wspólnymi siłami możemy zdziałać cuda i odmienić życie tych dwóch cudownych dziewczynek.</p>
      <p style="margin-top:1rem"><a class="btn btn-red" href="<?= ZBIORKA_URL ?>">❤ Wesprzyj XXI. edycję</a></p>
    </div>

    <div class="editions-list">
      <?php foreach ($editions as [$year, $roman, $amount, $story, $photos]): ?>
      <article class="edition-full">
        <div class="edition-full-head">
          <div>
            <div class="ef-year"><?= $year ?></div>
            <div class="ef-roman"><?= $roman ?>. EDYCJA</div>
          </div>
          <div class="ef-amount"><?= $amount ?><small>zebrane na pomoc dzieciom</small></div>
        </div>
        <p class="ef-desc"><?= $story ?></p>
        <?php
          $dir  = __DIR__ . '/images/edycje/' . $year;
          $imgs = is_dir($dir) ? glob($dir . '/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE) : [];
          sort($imgs);
        ?>
        <?php if ($imgs): ?>
        <div class="ef-gallery">
          <?php $n = 1; foreach ($imgs as $img): $file = basename($img); ?>
          <figure class="ef-photo"><img src="images/edycje/<?= $year ?>/<?= rawurlencode($file) ?>" alt="Wielka Draka dla Dzieciaka <?= $year ?> - zdjęcie <?= $n++ ?>" loading="lazy"></figure>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="total-band">
      <span class="total-label">Suma zebranych funduszy z lat 2018-2025</span>
      <span class="total-sum">316 806 zł</span>
    </div>

    <p class="center" style="margin-top:2rem;color:var(--ink-soft);font-weight:600">Dziękujemy każdemu, kto był z nami przez te wszystkie lata! ❤</p>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
