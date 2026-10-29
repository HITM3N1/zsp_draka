<?php
$title = 'Kontakt - Wielka Draka dla Dzieciaka';
$desc  = 'Skontaktuj się z Wielką Draką dla Dzieciaka. Adres: Kamienna 57, Biuro 15, 53-345 Wrocław. E-mail: wielkadrakadladzieciaka.zsp@gmail.com.';
$page  = 'kontakt';
include __DIR__ . '/partials/header.php';
?>

<section class="page-head">
    <?php $corners_soft = true; include __DIR__ . "/partials/corners.php"; ?>
    <div class="container">
    <span class="eyebrow b">Jesteśmy do dyspozycji</span>
    <h1>Kontakt</h1>
    <p>Masz pytania, chcesz zostać partnerem lub wesprzeć akcję? Napisz do nas albo śledź nas w social mediach!</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-card reveal">
        <div class="ic red"><svg viewBox="0 0 24 24"><path d="M12 2C7.9 2 4.5 5.3 4.5 9.5 4.5 15 12 22 12 22s7.5-7 7.5-12.5C19.5 5.3 16.1 2 12 2Zm0 10.2a2.7 2.7 0 1 1 0-5.4 2.7 2.7 0 0 1 0 5.4Z"/></svg></div>
        <h3>Adres</h3>
        <p>Kamienna 57, Biuro 15<br>53-345 Wrocław</p>
      </div>

      <div class="contact-card reveal" data-delay="80">
        <div class="ic blue"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2Zm8 7 8-5H4l8 5Zm0 2.2L4 8.2V18h16V8.2l-8 5Z"/></svg></div>
        <h3>E-mail</h3>
        <p><a href="mailto:<?= MAIL ?>"><?= MAIL ?></a></p>
      </div>

      <div class="contact-card reveal" data-delay="160">
        <div class="ic green"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm3.6 7.5c-.1 1.5-.8 3.6-1.2 4.6-.2.4-.5.6-.8.6-.6 0-1.4-.6-2-1.1-1-.8-1.5-1.3-2.4-2-1.1-.9-.4-1.4.2-2.2.2-.2 2.9-2.7 3-2.9 0-.1 0-.3-.1-.3-.1-.1-.2 0-.4 0-.1.1-2.1 1.4-5.9 3.9-.6.4-1.1.6-1.5.6-.5 0-1.4-.3-2.1-.5-.9-.3-1.5-.4-1.5-.9 0-.3.4-.6 1.1-.9 4.4-1.9 7.3-3.2 8.8-3.8 4.2-1.7 5-2 5.6-2 .1 0 .4 0 .6.2.1.1.2.3.2.5 0 .1 0 .5 0 .8Z"/></svg></div>
        <h3>Social media</h3>
        <div class="contact-socials">
          <a href="<?= FB_URL ?>" target="_blank" rel="noopener" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M13.5 22v-8h2.7l.4-3.1h-3.1V8.9c0-.9.25-1.5 1.5-1.5h1.6V4.6c-.3 0-1.25-.1-2.35-.1-2.32 0-3.9 1.4-3.9 4v2.3H7.6V14h2.75v8h3.15Z"/></svg></a>
          <a href="<?= IG_URL ?>" target="_blank" rel="noopener" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.85.07 1.17.05 1.8.25 2.23.42.56.22.96.48 1.38.9.42.42.68.82.9 1.38.17.42.37 1.06.42 2.23.06 1.26.07 1.64.07 4.85s0 3.6-.07 4.85c-.05 1.17-.25 1.8-.42 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.17-1.06.37-2.23.42-1.26.06-1.64.07-4.85.07s-3.6 0-4.85-.07c-1.17-.05-1.8-.25-2.23-.42a3.8 3.8 0 0 1-1.38-.9 3.8 3.8 0 0 1-.9-1.38c-.17-.42-.37-1.06-.42-2.23C2.21 15.6 2.2 15.2 2.2 12s0-3.6.07-4.85c.05-1.17.25-1.8.42-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.17 1.06-.37 2.23-.42C8.4 2.21 8.8 2.2 12 2.2Zm0 1.95c-3.15 0-3.52.01-4.76.07-.9.04-1.39.2-1.71.32-.43.17-.74.37-1.06.69-.32.32-.52.63-.69 1.06-.12.32-.28.81-.32 1.71-.06 1.24-.07 1.61-.07 4.76s.01 3.52.07 4.76c.04.9.2 1.39.32 1.71.17.43.37.74.69 1.06.32.32.63.52 1.06.69.32.12.81.28 1.71.32 1.24.06 1.61.07 4.76.07s3.52-.01 4.76-.07c.9-.04 1.39-.2 1.71-.32.43-.17.74-.37 1.06-.69.32-.32.52-.63.69-1.06.12-.32.28-.81.32-1.71.06-1.24.07-1.61.07-4.76s-.01-3.52-.07-4.76c-.04-.9-.2-1.39-.32-1.71a2.85 2.85 0 0 0-.69-1.06 2.85 2.85 0 0 0-1.06-.69c-.32-.12-.81-.28-1.71-.32-1.24-.06-1.61-.07-4.76-.07Zm0 3.32a4.53 4.53 0 1 1 0 9.06 4.53 4.53 0 0 1 0-9.06Zm0 7.47a2.94 2.94 0 1 0 0-5.88 2.94 2.94 0 0 0 0 5.88Zm5.77-7.69a1.06 1.06 0 1 1-2.12 0 1.06 1.06 0 0 1 2.12 0Z"/></svg></a>
          <a href="<?= TT_URL ?>" target="_blank" rel="noopener" aria-label="TikTok"><svg viewBox="0 0 24 24"><path d="M16.6 5.82a4.28 4.28 0 0 1-1.06-2.82h-3.2v12.28a2.59 2.59 0 0 1-2.59 2.5 2.59 2.59 0 0 1-.6-5.1V9.4a5.77 5.77 0 1 0 6.59 5.71V8.9a7.44 7.44 0 0 0 4.33 1.38V7.1a4.3 4.3 0 0 1-3.47-1.28Z"/></svg></a>
        </div>
      </div>
    </div>

    <div class="cta-band reveal" style="margin-top:2rem">
      <h2>Chcesz pomóc?</h2>
      <p>Każda złotówka przybliża Zosię i Maję do lepszego jutra. Dołącz do zbiórki i zostań częścią Wielkiej Draki!</p>
      <a class="btn btn-red btn-lg" href="<?= ZBIORKA_URL ?>">❤ Przejdź do zbiórki</a>
      <p class="cta-note">Link do zbiórki pojawi się tutaj, gdy tylko zostanie uruchomiony.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
