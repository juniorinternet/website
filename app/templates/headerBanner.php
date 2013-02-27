<div role="banner" class="clearfix banner primary">
  <div class="inner">
    <span class="year">2013 &mdash; 14. ročník</span>
    <h1 class="logo">Junior Internet</h1>
    <h2>Odrazový můstek <span class="line-break"></span>pro mladé internetové nadšence.</h2>
    <p>Již 14 let pomáháme mladým lidem poznávat internetové technologie, potkávat zajímavé lidi a prosadit se na internetu.</p>
    <?php foreach( $flashes as $flash ): ?>
      <p class="flash <?php echo $flash->type ?>"><?php echo $flash->message ?></p>
    <?php endforeach ?>
    <p class="nav quicknav" role="navigation">
      Organizujeme:
      <a href="<?php echo netteLink('Homepage:competition'); ?>">Soutěže</a>

      <!-- <a href="/konference">Konference</a> -->
      <span class="wip" title="V přípravě">Konference (registrace se otevřou v průběhu února)</span>

      <!-- <a href="/junior-camp">Junior&nbsp;Camp</a>
      <span class="wip" title="V přípravě">Junior&nbsp;Camp</span> -->
    </p>

    <?php require APP_DIR. '/templates/mainNav.php' ?>
  </div>

</div>
