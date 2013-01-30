<?php

$basePath = substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], "/novinky/"));
include realpath('../app/templates/partner.php');
?>

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
