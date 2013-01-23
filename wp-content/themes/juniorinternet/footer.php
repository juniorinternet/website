<?php

function partner($url, $alt, $smallImage, $desktopImage)
{
    $template = get_bloginfo('template_url');
    echo <<<EOT
    <div class="partner">
	<a href="$url">
		<div data-picture data-alt="$alt">
			<div data-src="$template/assets/img/partners/$smallImage"></div>
			<div data-src="$template/assets/img/partners/$desktopImage" data-media="(max-width: 599px) and (-webkit-min-device-pixel-ratio: 1.5), (max-width: 599px) and (min--moz-device-pixel-ratio: 1.5), (max-width: 599px) and (min-device-pixel-ratio: 1.5)"></div>
			<div data-src="$template/assets/img/partners/$desktopImage" data-media="(min-width: 600px)"></div>

			<!--[if (lt IE 9) & (!IEMobile)]>
			  <div data-src="$template/assets/img/partners/$desktopImage"></div>
				  <![endif]-->

			<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			<noscript>
				<img src="$template/assets/img/partners/$smallImage" alt="$alt">
			</noscript>
		</div>
	</a>
    </div>
EOT;
}

?>

<div role="complementary" class="content clearfix tertiary partners">

	<div class="inner">
		<h2><span>Děkujeme našim partnerům</span></h2>

		<div class="partners-main clearfix">
                        <?php
                            partner(
                                $url = "http://nadacevodafone.cz/",
                                $alt = "Nadace Vodafone",
                                $smallImage = "nadace-vodafone-small.png",
                                $desktopImage = "nadace-vodafone.png"
                            );

                            partner(
                                $url = "http://www.nic.cz/",
								$alt = "CZ.NIC",
								$smallImage = "cznic-small.png",
								$desktopImage = "cznic.png"
				            );

                            partner(
                                    $url = "http://flowmedia.cz/",
                                    $alt = "Flow Media",
                                    $smallImage = "flow-small.png",
                                    $desktopImage = "flow.png"
                            );
                        ?>
		</div>

		<h2><span>Mediální partneři</span></h2>

		<div class="partners-media clearfix">
			<?php
			partner(
					$url = "http://www.lupa.cz/",
					$alt = "Lupa.cz",
					$smallImage = "lupa-small.png",
					$desktopImage = "lupa.png"
				);

			partner(
					$url = "http://www.root.cz/",
					$alt = "Root.cz",
					$smallImage = "root-small.png",
					$desktopImage = "root.png"
				);

			partner(
					$url = "http://www.slunecnice.cz/",
					$alt = "Slunečnice.cz",
					$smallImage = "slunecnice-small.png",
					$desktopImage = "slunecnice.png"
				);

			partner(
					$url = "http://www.ubuntu.cz/",
					$alt = "Ubuntu.cz",
					$smallImage = "ubuntu-small.png",
					$desktopImage = "ubuntu.png"
				);

			?>
		</div>

		<h3><span>Podporovatelé</span></h3>

		<?php
			partner(
					$url = "http://www.peoplecomm.cz/",
					$alt = "Peoplecomm",
					$smallImage = "peoplecomm-small.png",
					$desktopImage = "peoplecomm.png"
				);
			?>

		<h3><span>Spolupracujeme</span></h3>

		<div class="partners-others clearfix">
                    <?php
			partner(
				$url = "http://www.ceskyzavinac.cz/",
				$alt = "Český zavináč",
				$smallImage = "cesky-zavinac-small.png",
				$desktopImage = "cesky-zavinac.png"
			);

			partner(
				$url = "http://www.isss.cz/",
				$alt = "ISSS",
				$smallImage = "isss-small.png",
				$desktopImage = "isss.png"
			);

			partner(
				$url = "http://www.jsi.cz/",
				$alt = "Jednota školských informatiků",
				$smallImage = "jsi-small.png",
				$desktopImage = "jsi.png"
			);

			partner(
				$url = "http://bizit.cz/",
				$alt = "Business IT Club",
				$smallImage = "bizit-small.png",
				$desktopImage = "bizit.png"
			);
                    ?>
		</div>
	</div>

</div><!-- / content -->

<div role="contentinfo" class="footer clearfix secondary">
	<div class="inner">
		<div class="social">
			<a class="ss-icon facebook" href="https://www.facebook.com/juniorinternet.cz">&#xF610;</a>
			<a class="ss-icon twitter" href="https://twitter.com/junior_internet">&#xF611;</a>
			<a class="ss-icon github" href="https://github.com/juniorinternet/">&#xF671;</a>
		</div>
		<div class="newsletter">
			<div>
				<p>
					Nepropásni žádné zajímavé akce a novinky
				</p>
				<div>
					<input id="ml_signup_email" name="email" type="text" placeholder="tvůj@email">
					<input name="ml_groups[]" value="114319" type="hidden">
				</div>
				<div>
					<button id="ml_subscribe">odebírat newsletter</button>
				</div>
			</div>
		</div>
		<p class="github"><span class="ss-icon">&#xF671;</span> Tento web nic neskrývá. <a href="https://github.com/juniorinternet/website">Jeho zdrojový kód najdete na Githubu</a>.</p>
		<div class="quick-contact">
			<p>Junior Internet 2000 - 2013 <a href="mailto:info@juniorinternet.cz">info@juniorinternet.cz</a></p>
		</div>
	</div>
</div>

<!-- Prepsat skripty na lazy podobu. Nechapu, ze to neni v zakladu. -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-1.7.2.min.js"><\/script>')</script>

<script src="<?php bloginfo('template_url'); ?>/assets/js/plugins.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/helper.js"></script>
<script src='http://juniorinternet.mailerlite.com/js/mailerlite.js' type='text/javascript'></script>
<script type="text/javascript" charset="utf-8">
ML.feedback('http://juniorinternet.mailerlite.com/subscribe/join/s2l6n1/1');
</script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36437500-1']);
  _gaq.push(['_setDomainName', 'juniorinternet.cz']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<?php wp_footer(); ?>

</body>
</html>
