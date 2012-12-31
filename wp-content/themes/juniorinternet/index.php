<?php get_header(); ?>

<div role="banner" class="clearfix banner primary">
	<div class="inner">
		<span class="year">2013 &mdash; 14. ročník</span>
		<h1>Junior Internet</h1>
		<h2>Odrazový můstek <span class="line-break"></span>pro mladé internetové nadšence.</h2>
		<p>Již 14 let pomáháme mladým lidem poznávat internetové technologie, potkávat zajímavé lidi a prosadit se na internetu.</p>
		<p class="nav quicknav" role="navigation">
			Organizujeme:
			<a n:href="competition">Soutěže</a>

			<!-- <a href="/konference">Konference</a> -->
			<span class="wip" title="V přípravě">Konference</span>

			<!-- <a href="/junior-camp">Junior&nbsp;Camp</a> -->
			<span class="wip" title="V přípravě">Junior&nbsp;Camp</span>
		</p>

                <?php get_template_part( 'navigation' ); ?>
	</div>

</div>

<div role="main" class="content clearfix secondary competition">

	<div class="inner">
		<h2>Soutěže</h2>
		<p class="extraordinary-text">Ukaž co v tobě je. Přihlaš projekt do soutěže a vyhraj hodnotné ceny.</p>
		<p>Junior Internet se může stát tvým odrazovým můstkem, který tě vyhoupne do světa úspěšných mladých internetových webdesignerů, programátorů, internetových novinářů, či náctiletých podnikatelů. {* Podívej se na <a n:href="successStories">příběhy vítězů</a> a jak jim Junior Internet změnil život.*}</p>
		<p>Přihlášky končí <strong>17. února 2013 o půlnoci</strong>.</p>
		<div class="categories clearfix">
			<div class="category">
				<h3>Junior <span>Web</span></h3>
				<div class="category-about">
					<div>
						<p>Webové stránky, internetové služby a projekty umístěné na Internetu.</p>
					</div>
				</div>
			</div>
			<div class="category">
				<h3>Junior <span>Design</span></h3>
				<div class="category-about">
					<div>
						<p>Design webových stránek či jiné elektronické grafické práce.</p>
					</div>
				</div>
			</div>
			<div class="category">
				<h3>Junior <span>Text</span></h3>
				<div class="category-about">
					<div>
						<p>Slohová práce na téma "internet a vzdělávání".</p>
					</div>
				</div>
			</div>
			<div class="category">
				<h3>Junior <span>Erb</span></h3>
				<div class="category-about">
					<div>
						<p>Obecně prospěšné internetové projekty nebo stránky týkající se místa vašeho bydliště.</p>
					</div>
				</div>
			</div>
		</div>
		<p>Letos udělujeme také <strong>speciální ceny</strong> napříč soutěžemi Junior Web a Junior Erb:</p>
		<ul class="special-awards special-list">
			<li>Technologické zpracování</li>
			<li>Uživatelský prožitek na mobilech</li>
			<li>Nadace Vodafone za obecně prospěšný projekt</li>
			<li>Cena veřejnosti</li>
		</ul>
		<p><a href="<?php echo get_option('urlToCompetitionSystem') ?>" class="btn btn-extlarge btn-primary">Přihlásit se do soutěže</a></p>
		<p>
			<a n:href="competition">další informace</a> |
			<a n:href="competition#pravidla">pravidla soutěže &amp; průběh hodnocení</a>
		</p>
	</div>

</div><!-- / content -->

<div role="complementary" class="content clearfix tertiary">

	<div class="inner">
		<p class="extraordinary-text">Připravujeme Junior Camp ve školách.</p>
		<p>Jeden den plný nových webových technologií a týmové práce ve tvé škole.</p>
	</div>

</div><!-- / content -->

<div role="complementary" class="content clearfix primary">

	<div class="inner">
		<h2>Konference</h2>
		<div class="conference clearfix">
			<div class="half left-side">
				<p>Den plný nezapomenutelných přednášek, nových kamarádů, zajímavých rozhovorů a finále soutěží Junior Internet.</p>
				<p>Registrace na konferenci se otevřou v únoru 2013. Vstup je zdarma.</p>
			</div>
			<div class="half">
				<div class="conference-date">
					<i class="conference-day">23<span>.</span></i> <strong class="conference-year"><span>březen 2013</span></strong>
				</div>
			</div>
		</div>
	</div>

</div><!-- / content -->


<?php get_footer(); ?>