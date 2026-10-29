<?php
$title = 'Poznaj nas - Wielka Draka dla Dzieciaka';
$desc  = 'Wielka Draka dla Dzieciaka to największa studencka akcja charytatywna ZSP przy Uniwersytecie Ekonomicznym we Wrocławiu. Trwa XXI. edycja - zbieramy środki dla Zosi i Mai.';
$page  = 'poznaj-nas';
include __DIR__ . '/partials/header.php';
?>

<section class="page-head">
    <?php $corners_soft = true; include __DIR__ . "/partials/corners.php"; ?>
    <div class="container">
    <span class="eyebrow">Poznaj nas!</span>
    <h1>Pomagamy dzieciom<br>poprzez dobrą zabawę</h1>
  </div>
</section>

<section class="section">
  <div class="container narrow">
    <div class="card topbar r center reveal">
      <p class="lead">Wielka Draka dla Dzieciaka to największa, studencka akcja charytatywna organizowana przez <strong>Zrzeszenie Studentów Polskich</strong> działających przy Uniwersytecie Ekonomicznym we Wrocławiu. Projekt od <strong>11 lat</strong> dumnie współpracuje z <strong>Fundacją POLSAT - Jesteśmy dla Dzieci</strong>, a od <strong>21 lat</strong> sukcesywnie angażuje młodszych i starszych do pomagania poprzez dobrą zabawę.</p>
      <p>Co roku Wielka Draka dla Dzieciaka łączy te dwie rzeczy podczas cyklu różnorodnych wydarzeń kulturalnych i rozrywkowych, z których dochód przeznaczany jest na leczenie lub rehabilitację podopiecznych Fundacji Polsat.</p>
    </div>
  </div>
</section>

<section class="section-sm">
  <div class="container">
    <div class="cta-band reveal">
      <svg class="blob" style="top:-60px;left:-40px;width:180px;opacity:.5" viewBox="0 0 200 200" aria-hidden="true"><path fill="#4FC04B" d="M41-54c13 9 23 23 27 39 4 16 1 33-9 45S31 92 15 93C-1 94-17 86-31 74-45 62-57 46-58 29c-1-17 9-34 23-45C-21-27-1-33 15-31c10 1 13 1 26-23Z" transform="translate(100 100)"/></svg>
      <svg class="blob" style="bottom:-70px;right:-40px;width:200px;opacity:.5" viewBox="0 0 200 200" aria-hidden="true"><path fill="#35A7FF" d="M46-60C60-50 69-33 70-16c1 17-6 35-18 46-12 11-30 15-46 11C-10 37-24 25-35 9-46-7-54-27-48-43c6-16 26-28 45-30 10-1 22 2 49 13Z" transform="translate(100 100)"/></svg>
      <h2>Razem możemy wszystko!</h2>
      <p style="font-weight:700;color:var(--ink);font-size:1.15rem;margin-bottom:.6rem">To już XXI. edycja Draki!</p>
      <p>Obecnie trwa XXI. edycja Wielkiej Draki dla Dzieciaka! Zbieramy środki dla <strong>7-letniej Zosi</strong> (zmagającej się z rzadką wielotorbielowatością nerek) oraz <strong>rocznej Mai</strong> (chorującej na „chorobę motylkowych skrzydeł”).</p>
      <p>Zebrane pieniądze zostaną przeznaczone na intensywną terapię, leczenie i rehabilitację dzielnych sióstr, aby zapewnić im szansę na lepszy rozwój i ulgę w codziennym cierpieniu. Dołącz do nas i wesprzyj Zosię oraz Maję!</p>
      <p style="font-weight:700;color:var(--ink);margin:.6rem auto 1.2rem;text-align:center">Wspólnie dajmy Zosi i Mai szansę na lepsze jutro!</p>
      <a class="btn btn-red btn-lg" href="<?= ZBIORKA_URL ?>">❤ Zbiórka</a>
      <p class="cta-note">Link do zbiórki pojawi się tutaj, gdy tylko zostanie uruchomiony.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container narrow center">
    <h2 class="reveal">Galeria Draki</h2>
    <p class="reveal" style="color:var(--ink-soft);max-width:48ch;margin:.8rem auto 0">Zdjęcia z tegorocznej sesji pojawią się już wkrótce - śledź nasze social media, aby być na bieżąco!</p>
    <div class="social-row reveal" style="margin-top:1.6rem">
      <a href="<?= FB_URL ?>" target="_blank" rel="noopener" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M13.5 22v-8h2.7l.4-3.1h-3.1V8.9c0-.9.25-1.5 1.5-1.5h1.6V4.6c-.3 0-1.25-.1-2.35-.1-2.32 0-3.9 1.4-3.9 4v2.3H7.6V14h2.75v8h3.15Z"/></svg></a>
      <a href="<?= IG_URL ?>" target="_blank" rel="noopener" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.85.07 1.17.05 1.8.25 2.23.42.56.22.96.48 1.38.9.42.42.68.82.9 1.38.17.42.37 1.06.42 2.23.06 1.26.07 1.64.07 4.85s0 3.6-.07 4.85c-.05 1.17-.25 1.8-.42 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.17-1.06.37-2.23.42-1.26.06-1.64.07-4.85.07s-3.6 0-4.85-.07c-1.17-.05-1.8-.25-2.23-.42a3.8 3.8 0 0 1-1.38-.9 3.8 3.8 0 0 1-.9-1.38c-.17-.42-.37-1.06-.42-2.23C2.21 15.6 2.2 15.2 2.2 12s0-3.6.07-4.85c.05-1.17.25-1.8.42-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.17 1.06-.37 2.23-.42C8.4 2.21 8.8 2.2 12 2.2Zm0 1.95c-3.15 0-3.52.01-4.76.07-.9.04-1.39.2-1.71.32-.43.17-.74.37-1.06.69-.32.32-.52.63-.69 1.06-.12.32-.28.81-.32 1.71-.06 1.24-.07 1.61-.07 4.76s.01 3.52.07 4.76c.04.9.2 1.39.32 1.71.17.43.37.74.69 1.06.32.32.63.52 1.06.69.32.12.81.28 1.71.32 1.24.06 1.61.07 4.76.07s3.52-.01 4.76-.07c.9-.04 1.39-.2 1.71-.32.43-.17.74-.37 1.06-.69.32-.32.52-.63.69-1.06.12-.32.28-.81.32-1.71.06-1.24.07-1.61.07-4.76s-.01-3.52-.07-4.76c-.04-.9-.2-1.39-.32-1.71a2.85 2.85 0 0 0-.69-1.06 2.85 2.85 0 0 0-1.06-.69c-.32-.12-.81-.28-1.71-.32-1.24-.06-1.61-.07-4.76-.07Zm0 3.32a4.53 4.53 0 1 1 0 9.06 4.53 4.53 0 0 1 0-9.06Zm0 7.47a2.94 2.94 0 1 0 0-5.88 2.94 2.94 0 0 0 0 5.88Zm5.77-7.69a1.06 1.06 0 1 1-2.12 0 1.06 1.06 0 0 1 2.12 0Z"/></svg></a>
      <a href="<?= TT_URL ?>" target="_blank" rel="noopener" aria-label="TikTok"><svg viewBox="0 0 24 24"><path d="M16.6 5.82a4.28 4.28 0 0 1-1.06-2.82h-3.2v12.28a2.59 2.59 0 0 1-2.59 2.5 2.59 2.59 0 0 1-.6-5.1V9.4a5.77 5.77 0 1 0 6.59 5.71V8.9a7.44 7.44 0 0 0 4.33 1.38V7.1a4.3 4.3 0 0 1-3.47-1.28Z"/></svg></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
