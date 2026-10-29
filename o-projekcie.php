<?php
$title = 'O projekcie - Nasze wydarzenia | Wielka Draka dla Dzieciaka';
$desc  = 'Cykl wydarzeń kulturalnych i rozrywkowych Wielkiej Draki dla Dzieciaka: DrakArt, Bal Draki, SOK i wiele więcej. Cały dochód trafia na pomoc podopiecznym Fundacji Polsat.';
$page  = 'o-projekcie';
include __DIR__ . '/partials/header.php';
?>

<section class="page-head">
    <?php $corners_soft = true; include __DIR__ . "/partials/corners.php"; ?>
    <div class="container">
    <span class="eyebrow y">O projekcie</span>
    <h1>Nasze wydarzenia</h1>
    <p>W celu zebrania jak największej ilości pieniędzy na leczenie bądź rehabilitację podopiecznego Fundacji Polsat, organizujemy cykl wydarzeń kulturalnych oraz rozrywkowych, z których cały dochód jest przeznaczony na pomoc tym, którzy potrzebują jej najbardziej. Oto parę z nich!</p>
  </div>
</section>

<section class="section">
  <div class="container stack narrow">

    <article class="event reveal">
      <div class="event-text">
        <h3><span class="dot yellow"></span>DrakArt</h3>
        <p>Taniec, śpiew i teatr - jeden wieczór, wiele emocji! DrakArt to prawdziwa eksplozja artystycznej energii. Na scenie możemy zobaczyć najróżniejsze występy od śpiewu i tańca aż po spektakl, który zachwyci każdego widza. To wydarzenie otwiera cykl eventów Wielkiej Draki dla Dzieciaka, podczas których zbieramy fundusze, bawiąc się i spędzając czas w świetnej atmosferze!</p>
      </div>
      <div class="event-media"><img src="images/wydarzenia/drakart.webp" alt="DrakArt - występ artystyczny na scenie" loading="lazy"></div>
    </article>

    <article class="event rev reveal">
      <div class="event-text">
        <h3><span class="dot red"></span>Bal Draki</h3>
        <p>Ekscytujące motywy, wystrojeni ludzie i zabawa do białego rana - to wszystko wchodzi w skład Balu Charytatywnego, który pełni rolę oficjalnego zakończenia projektu. Jego sukcesy świętujemy robiąc tony zdjęć oraz tańcząc i bawiąc się wspólnie na parkiecie. Podczas tegorocznej edycji będziemy bawić się w motywie Weneckiego balu maskowego - teraz marzenia stają się rzeczywistością.</p>
      </div>
      <div class="event-media"><img src="images/wydarzenia/bal-draki.webp" alt="Bal Draki - charytatywny bal, zakończenie projektu" loading="lazy"></div>
    </article>

    <article class="event reveal">
      <div class="event-text">
        <h3><span class="dot blue"></span>SOK - Studenckie Odcinki Komediowe</h3>
        <p>Najśmieszniejszy event naszego projektu to nic innego, jak SOK - Studenckie Odcinki Komediowe! To właśnie podczas nich macie okazję obejrzeć występy przekomicznych stand-uperów, którzy na pewno ośmieszą was do łez, gwarantując pełen zabawy wieczór. Usłyszymy wiele żartów i historii z życia studenckiego, a występy przeplatane będą licytacjami przedmiotów, z których pieniądze zostaną przekazane dla Zosi i Mai!</p>
      </div>
      <div class="event-media"><img src="images/wydarzenia/sok.webp" alt="SOK - Studenckie Odcinki Komediowe, występ stand-up" loading="lazy"></div>
    </article>

    <div class="card topbar g center reveal">
      <h3>I wiele więcej!</h3>
      <p>Wielka Draka dla Dzieciaka organizuje masę innych inicjatyw wartych zobaczenia! Podczas tegorocznej edycji będzie można brać udział w takich wydarzeniach jak <strong>Drakowy turniej w siatkę, Silent Disco, Quiz Baj Draki, Wieczór Gier</strong> i wiele, wiele innych. Bądź na bieżąco z social mediami Wielkiej Draki dla Dzieciaka, aby dowiedzieć się więcej o nadchodzących wydarzeniach.</p>
    </div>

    <div class="center reveal">
      <a class="btn btn-red btn-lg" href="<?= ZBIORKA_URL ?>">❤ Zbiórka</a>
      <p class="cta-note">Link do zbiórki pojawi się tutaj, gdy tylko zostanie uruchomiony.</p>
    </div>

  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
