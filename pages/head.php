<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7" lang="<?php echo LANG_CODE; ?>"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8" lang="<?php echo LANG_CODE; ?>"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9" lang="<?php echo LANG_CODE; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="" lang="<?php echo LANG_CODE; ?>"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php seo($filename, 'title'); ?></title>
	<meta name="description" content="<?php seo($filename, 'description'); ?>" />
	<meta name="keywords" content="<?php seo($filename, 'keywords'); ?>" />
	
	<link rel="shortcut icon" href="<?php echo URL_ROOT; ?>/favicon.ico" />
	<link rel="apple-touch-icon" href="/appletouch.png"/>
	
	<link rel="stylesheet" href="<?php echo URL_ROOT; ?>/css/style.css" media="all" />
	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script>window.html5 || document.write('<script src="<?php echo URL_ROOT; ?>/js/html5shiv.js"><\/script>')</script>
	<![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo URL_ROOT; ?>/js/jquery.js"><\/script>')</script>
</head>
<body>
	<!-- google analytics code -->
	<!--[if lt IE 8]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->