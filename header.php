<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title('&raquo;',true,'right'); ?><?php bloginfo('name'); ?></title>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<meta name="Author" content="Flagbit GmbH &amp; Co. KG" />
	<meta name="Publisher" content="Flagbit GmbH &amp; Co. KG" />
	<meta name="Copyright" content="Flagbit GmbH &amp; Co. KG" />
	<meta name="Page-topic" content="<?php bloginfo('description'); ?>" />
	<meta name="Audience" content="Alle" />
	<meta name="Description" content="<?php wp_title('&raquo;',true,'right'); ?><?php bloginfo('description'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<meta property="fb:admins" content="100002158337997" />

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.gif" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php wp_head(); ?>
	<script type="text/javascript">
	$(document).ready(function(){
		$('input[placeholder]').placeholderFunction('focus');
	});
	</script>
</head>

<body>

<div id="wrapper">

<div id="header">
<div id="logo" style="cursor:pointer;" onclick="location.href='http://www.flagbit.de/';"></div>
<div id="search"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>
</div>

<div id="breadcrumb">
<?php if (function_exists('bcn_display'))
{
?>
Sie befinden sich hier:
<?php
// Display the breadcrumb
bcn_display();
} ?>
</div>

<div id="content-header">
<div id="blogname"><h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1></div>
<div id="slogan"><?php bloginfo('description'); ?></div>
<div id="rss-feed"><img src="<?php bloginfo('template_directory'); ?>/images/icons/rss-feed.png" border="0" alt="RSS Feed" />&nbsp;<a href="?feed=rss2">RSS Feed Abonieren</a></div>
</div>

<div id="content">
