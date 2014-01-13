<!DOCTYPE html>
<html>

<head>
	<title><?php wp_title ('&raquo;', true, 'right'); ?><?php bloginfo ('name'); ?></title>

	<meta http-equiv="Content-Type"
		content="<?php bloginfo ('html_type'); ?>; charset=<?php bloginfo ('charset'); ?>" />

	<meta name="Author" content="Flagbit GmbH &amp; Co. KG" />
	<meta name="Publisher" content="Flagbit GmbH &amp; Co. KG" />
	<meta name="Copyright" content="Flagbit GmbH &amp; Co. KG" />
	<meta name="Page-topic" content="<?php bloginfo ('description'); ?>" />
	<meta name="Audience" content="Alle" />
	<meta name="Description"
		content="<?php wp_title ('&raquo;', true, 'right'); ?><?php bloginfo ('description'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo ('version'); ?>" />
	<!-- leave this for stats -->
	<meta name="viewport" content="width=device-width" />

	<meta property="fb:admins" content="100002158337997" />

	<link rel="shortcut icon" href="<?php bloginfo ('template_directory'); ?>/images/favicon.gif" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo ('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo ('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo ('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo ('pingback_url'); ?>" />
	<link rel="publisher" href="https://plus.google.com/117279544987000527799" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php print(get_stylesheet_directory_uri () . '/style.css'); ?>" />

	<?php wp_get_archives ('type=monthly&format=link'); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<?php
	if (is_singular () && get_option ('thread_comments')) {
		wp_enqueue_script ('comment-reply');
	}

	wp_head ();
	?>
	<?php
	if (is_single ()) {
		$post = get_post (get_the_ID ());
		if ($post != null) {
			$author_url = get_the_author_meta ('user_url', $post->post_author);
			if ($author_url != '') {
				echo '<link rel="author" href="' . $author_url . '"/>';
			}
		}
	}
	?>
</head>

<body>

	<div id="wrapper">

		<header id="header">
			<div class="header-wrap">
				<div id="slogan"><?php bloginfo ('description'); ?></div>

				<div class="logo">
					<h1>
						<a href="<?php echo get_settings ('home'); ?>">
							<img src="<?php print(get_stylesheet_directory_uri () . '/images/header_logo.png'); ?>"
								alt="Logo der Magento und TYPO3 Agentur in Karlsruhe" />
						</a>
					</h1>
				</div>
			</div>
		</header>

		<div id="breadcrumb">
			<?php if (function_exists ('bcn_display')) { ?>
				Sie befinden sich hier:
				<?php bcn_display ();
			} ?>
		</div>

		<div id="content">
