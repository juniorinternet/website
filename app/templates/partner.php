<?php
/**
 * pro výpis partnerů z jednoho místa
 * (používá se v app a na blogu)
 *
 * Mimo Nette je třeba mít v proměnné $basePath správnou URL, aby fungovali obrázky!
 */


$partnersDefinition = array(
	'general'    => array(
		'name' => 'Generální partneři',
		'headerTag' => 'h2',
	),
	'main'    => array(
		'name' => 'Partneři',
		'headerTag' => 'h2',
	),
	'competition'    => array(
		'name' => 'Partneři soutěží',
		'headerTag' => 'h2',
	),
	'media'   => array(
		'name' => 'Mediální partneři',
		'headerTag' => 'h2',
	),
	'others'  => array(
		'name' => 'Spolupracujeme',
		'headerTag' => 'h3',
	),
);

$partnersText = array(
	'general' => array(
		array(
			'url' => "http://nadacevodafone.cz/",
			'alt' => "Nadace Vodafone",
			'smallImage' => "nadace-vodafone-small.png",
			'desktopImage' => "nadace-vodafone.png"
		),
	),

	'main' => array(
		array(
			'url' => "http://www.czechict.cz/",
			'alt' => "Czech ICT Alliance",
			'smallImage' => "ict-small.png",
			'desktopImage' => "ict.png"
		),
		array(
			'url' => "http://www.active24.cz/",
			'alt' => "Active 24",
			'smallImage' => "active24-small.png",
			'desktopImage' => "active24.png"
		),
	),

	'competition' => array(
		array(
			'url' => "http://abdoc.net/",
			'alt' => "abdoc",
			'smallImage' => "abdoc-small.png",
			'desktopImage' => "abdoc.png"
		),
		array(
			'url' => "http://prusaresearch.com/",
			'alt' => "Prusa Research",
			'smallImage' => "prusa-small.png",
			'desktopImage' => "prusa.png"
		),
	),

	'media' => array(

		array(
			'url' => "http://respekt.ihned.cz/",
			'alt' => "Respekt.cz",
			'smallImage' => "respekt-small.png",
			'desktopImage' => "respekt.png"
		),
		array(
			'url' => "http://www.tyinternety.cz/",
			'alt' => "tyinternety.cz",
			'smallImage' => "tyinternety-small.png",
			'desktopImage' => "tyinternety.png"
		),

	),

	'others' => array(

		array(
			'url' => "http://www.jsi.cz/",
			'alt' => "Jednota školských informatiků",
			'smallImage' => "jsi-small.png",
			'desktopImage' => "jsi.png"
		),

	)
);



?>

<div role="complementary" class="content clearfix tertiary partners">

	<div class="inner">
		<?php foreach($partnersText as $sectionName => $sectionData): ?>
		<<?php echo $partnersDefinition[$sectionName]['headerTag']; ?>><span><?php echo $partnersDefinition[$sectionName]['name']; ?></span></<?php echo $partnersDefinition[$sectionName]['headerTag']; ?>>

		<div class="partners-<?php echo $sectionName; ?> clearfix">
			<?php foreach ($sectionData as $p): ?>
			<div class="partner">
				<a href="<?php echo $p['url']; ?>">
					<div data-picture data-alt="<?php echo $p['alt']; ?>">
						<div data-src="<?php echo $basePath; ?>/img/partners/<?php echo $p['smallImage']; ?>"></div>
						<div data-src="<?php echo $basePath; ?>/img/partners/<?php echo $p['desktopImage']; ?>" data-media="(max-width: 599px) and (-webkit-min-device-pixel-ratio: 1.5), (max-width: 599px) and (min--moz-device-pixel-ratio: 1.5), (max-width: 599px) and (min-device-pixel-ratio: 1.5)"></div>
						<div data-src="<?php echo $basePath; ?>/img/partners/<?php echo $p['desktopImage']; ?>" data-media="(min-width: 600px)"></div>

						<!--[if (lt IE 9) & (!IEMobile)]>
						  <div data-src="<?php echo $basePath; ?>/img/partners/<?php echo $p['desktopImage']; ?>"></div>
						<![endif]-->

						<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
						<noscript>
							<img src="<?php echo $basePath; ?>/img/partners/<?php echo $p['smallImage']; ?>" alt="<?php echo $p['alt']; ?>">
						</noscript>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endforeach; ?>

	</div>

</div><!-- / content -->
