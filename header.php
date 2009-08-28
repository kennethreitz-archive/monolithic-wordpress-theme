<!DOCTYPE HTML>
	<html lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title><?php the_title(); ?> … <?php bloginfo('name'); ?></title>
		<meta name="description" content="BLOG DESCTIPTION" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" title="Kenneth Reitz Blog Posts" href="http://feeds.feedburner.com/kennethreitz/rss+xml" />
		<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
		<!--[if lt IE 7]>
		        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/js/unitpngfix.js"></script>
		<![endif]-->
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projector" title="master-css" charset="utf-8" />
		
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/shCore.css"/>
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/shThemeDefault.css"/>
	</head>
	
	<div id="header" class="container">
		<a href="/"><h1 class="all-caps inline"><?php bloginfo('name'); ?></h1></a>
		<span id="nav" id="welcome" class="quiet inline">
			<a href="/blog/">Blog</a>.
			<a href="/projects/">Projects</a>. 
			<a href="/services/">Services</a>. 
		<a class="git-fork" href="http://github.com/kennethreitz"><span class="git-fork seo-only">Fork me on GitHub.</span></a>
	</span>
		<hr/>
		
	</div>
	