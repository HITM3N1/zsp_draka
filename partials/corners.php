<?php

$cs = $corners_soft ?? false;
$corners_soft = false;
?>
<div class="corners<?= $cs ? ' soft' : '' ?>" aria-hidden="true">
  <svg class="corner tl" viewBox="0 0 320 320" preserveAspectRatio="none"><path fill="#FFD23E" d="M0,0 H320 C292,58 256,78 220,108 C182,142 176,202 140,236 C104,270 54,270 0,300 Z"/></svg>
  <svg class="corner tr" viewBox="0 0 320 320" preserveAspectRatio="none"><path fill="#FF3F3F" d="M0,0 H320 C292,58 256,78 220,108 C182,142 176,202 140,236 C104,270 54,270 0,300 Z"/></svg>
  <svg class="corner bl" viewBox="0 0 320 320" preserveAspectRatio="none"><path fill="#4FC04B" d="M0,0 H320 C292,58 256,78 220,108 C182,142 176,202 140,236 C104,270 54,270 0,300 Z"/></svg>
  <svg class="corner br" viewBox="0 0 320 320" preserveAspectRatio="none"><path fill="#35A7FF" d="M0,0 H320 C292,58 256,78 220,108 C182,142 176,202 140,236 C104,270 54,270 0,300 Z"/></svg>
</div>
