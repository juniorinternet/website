<!doctype html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="cs"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="cs"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="cs"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="cs"><!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title>
            <?php
                $title = wp_title( '|', FALSE, 'right' ). get_bloginfo( 'name' );
                echo $title;
            ?>
        </title>

	<meta name="author" content="Junior Internet Team">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- http://t.co/dKP3o1e -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- For all browsers -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

	<!-- Social icons -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/social-icons/ss-social.css">

	<!-- JavaScript -->
	<script src="<?php bloginfo('template_url'); ?>/assets/js/modernizr-2.5.3-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/picturefill.js"></script>


	<!-- Typekit -->
	<script type="text/javascript" src="//use.typekit.net/qra5ent.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<link rel="shortcut icon" href="/favicon.ico">

	<meta http-equiv="cleartype" content="on">

	<!-- Facebook -->
	<meta property="og:title" content="<?php echo $title ?>">
	<meta property="og:description" content="<?php bloginfo('description') ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo home_url() ?>">
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/img/og-junior-internet.png">
        
        <?php wp_head(); ?>
</head>

<body <?php body_class('page-project') ?>>
    <!--[if lt IE 9]>
        <p class="chromeframe">Používáte <strong>zastaralý</strong> prohlížeè, který nám neumožòuje poskytnout vám plnohodnotný zážitek z tohoto webu. Prosíme <a href="http://browsehappy.com/">aktualizujte</a> nebo si <a href="http://www.google.com/chromeframe/?redirect=true">aktivujte Google Chrome Frame</a>. Dìkujeme!</p>
    <![endif]-->
