<?php get_header(); ?>

<div role="banner" class="clearfix banner primary">
	<div class="inner">
		<span class="year">2013 &mdash; 14. ročník</span>

		<h1><a href="<?php echo home_url() ?>">Junior Internet</a></h1>
		<h2>Rozbil se internet a tady nic není.</h2>

		<p class="extraordinary-text">Je nám to líto, ale takovouhle stránku tady nemáme.</p>
		<p>Možná jsme ji kdysi měli a zapomněli jsme na ni při změnách webu. Poslali jsem email sami sobě a zjistíme, kde je chyba.</p>

		<p class="nav quicknav" role="navigation">
			Organizujeme:
			<a href="<?php echo home_url() ?>">Soutěže</a>

			<!-- <a href="/konference">Konference</a> -->
			<span class="wip" title="V přípravě">Konference</span>

			<!-- <a href="/junior-camp">Junior&nbsp;Camp</a> -->
			<span class="wip" title="V přípravě">Junior&nbsp;Camp</span>
		</p>

		<?php get_template_part( 'navigation' ); ?>
	</div>
</div>

<?php get_footer(); ?>