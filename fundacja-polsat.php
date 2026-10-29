<?php
$title = 'Fundacja Polsat - nasza współpraca | Wielka Draka dla Dzieciaka';
$desc  = 'Wielka Draka dla Dzieciaka działa pod patronatem Fundacji Polsat od 2016 roku. Wspólnie pomogliśmy już 13 dzieciakom i zebraliśmy ponad 316 000 zł.';
$page  = 'fundacja-polsat';
include __DIR__ . '/partials/header.php';
?>

<section class="page-head">
    <?php $corners_soft = true; include __DIR__ . "/partials/corners.php"; ?>
    <div class="container">
    <span class="eyebrow g">Pod patronatem</span>
    <h1>Fundacja Polsat</h1>
  </div>
</section>

<section class="section-sm">
  <div class="container">
    <div class="handshake reveal">
      <div class="logo-box"><img src="images/logo/draka-sygnet.webp" alt="Wielka Draka dla Dzieciaka"></div>
      <div class="hands-emoji" aria-hidden="true"><span>&amp;</span></div>
      <div class="logo-box"><img src="images/logo/fundacja-polsat.webp" alt="Fundacja Polsat"></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container narrow stack">
    <div class="card topbar g center reveal">
      <p>Celem fundacji jest <strong>ratowanie zdrowia i życia dzieci</strong> i to właśnie tym nieustannie zajmuje się od 1996 roku. Fundacja jest znana między innymi z inicjatywy „Podziel się Posiłkiem", kampanii „Mikołajkowy Blok Reklamowy" tworzonej we współpracy z Grupą Polsat, a także z pomocy swoim podopiecznym poprzez wsparcie finansowe i umożliwienie im dostępu do nowoczesnych środków farmaceutycznych i specjalistycznych zabiegów.</p>
    </div>

    <div class="reveal">
      <h2 class="center" style="margin-bottom:.4rem">Nasza współpraca</h2>
      <p class="center" style="color:var(--ink-soft);max-width:66ch;margin:0 auto">Wielka Draka dla Dzieciaka po raz pierwszy otrzymała patronat Fundacji Polsat w 2016 roku. Od tamtego czasu udało nam się wspólnie pomóc już 13 dzieciakom, a co więcej - zebraliśmy razem już ponad 316 000 zł na pomoc dzieciom! Ogromnie się cieszymy, że możemy kontynuować naszą współpracę już 11. rok z rzędu i nie możemy doczekać się kolejnych lat tworzenia projektu pod patronatem Fundacji Polsat.</p>

      <div class="stat-row">
        <div class="stat c-green"><div class="num">2016</div><div class="lbl">rok rozpoczęcia współpracy</div></div>
        <div class="stat c-red"><div class="num">13</div><div class="lbl">dzieciaków, którym pomogliśmy</div></div>
        <div class="stat c-blue"><div class="num">316&nbsp;000&nbsp;zł+</div><div class="lbl">zebrane wspólnie na pomoc dzieciom</div></div>
      </div>
    </div>

    <div class="photo-duo reveal">
      <img src="images/fundacja/fundacja1.webp" alt="Wspólne działania z Fundacją Polsat" loading="lazy">
      <img src="images/fundacja/fundacja2.webp" alt="Ludzie z Fundacji Polsat i Wielkiej Draki" loading="lazy">
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
