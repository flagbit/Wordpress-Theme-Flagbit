<!DOCTYPE html>
<html>

<head>
	<title><?php wp_title('&raquo;',true,'right'); ?><?php bloginfo('name'); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="Author" content="Flagbit GmbH &amp; Co. KG" />
	<meta name="Publisher" content="Flagbit GmbH &amp; Co. KG" />
	<meta name="Copyright" content="Flagbit GmbH &amp; Co. KG" />
	<meta name="Page-topic" content="<?php bloginfo('description'); ?>" />
	<meta name="Audience" content="Alle" />
	<meta name="Description" content="<?php wp_title('&raquo;',true,'right'); ?><?php bloginfo('description'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="fb:admins" content="100002158337997" />

    <link rel="stylesheet" href="wp-content/themes/flagbit_de/style.css" />

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.gif" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="publisher" href="https://plus.google.com/117279544987000527799" />

	<?php wp_get_archives('type=monthly&format=link'); ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php bloginfo('home'); ?>/wp-content/themes/flagbit_de/js/jRespond.min.js"></script>
    <script src="<?php bloginfo('home'); ?>/wp-content/themes/flagbit_de/js/jquery.jpanelmenu.min.js"></script>
    <script>
        var jPanelMenu = {};
        $(function() {


            jPanelMenu = $.jPanelMenu({
                menu: '#menu',
                trigger: '.trigger',
                animated: true
            });
            jPanelMenu.on();

            $(document).on('click',jPanelMenu.menu + ' li a',function(e){
                if ( jPanelMenu.isOpen() && $(e.target).attr('href').substring(0,1) == '#' ) { jPanelMenu.close(); }
            });

            $(document).on('click','#trigger-off',function(e){
                jPanelMenu.off();
                $('html').css('padding-top','40px');
                $('#trigger-on').remove();
                $('body').append('<a href="" title="Re-Enable jPanelMenu" id="trigger-on">Re-Enable jPanelMenu</a>');
                e.preventDefault();
            });

            $(document).on('click','#trigger-on',function(e){
                jPanelMenu.on();
                $('html').css('padding-top',0);
                $('#trigger-on').remove();
                e.preventDefault();
            });
        });
    </script>

	<?php wp_head(); ?>

	<?php
		if (is_single()) {
			$post = get_post(get_the_ID());
			if ($post != null) {
				$author_url = get_the_author_meta( 'user_url', $post->post_author );
				if ($author_url != '') {
					echo '<link rel="author" href="'.$author_url.'"/>';
				}
			}
		}
	?>

	<script type="text/javascript">
        $(document).ready(function(){
            $('input[placeholder]').placeholderFunction('focus');
        });
	</script>
</head>

<body>

<div id="wrapper">

    <header id="header">

        <div class="header-wrap">
            <div class="trigger">
                <img class="trigger-normal-image" src="<?php print(get_stylesheet_directory_uri () . '/images/icons/transpTrgList.png'); ?>" alt="Trigger of the off-canvas menu"/>
                <p>Menu</p>
            </div>

            <div class="logo">
                <a href="<?php echo get_settings ('home'); ?>">
                    <img src="<?php print(get_stylesheet_directory_uri () . '/images/logo_flagbit_blank.png'); ?>"
                         alt="Logo der Magento und TYPO3 Agentur in Karlsruhe" />
                </a>
            </div>

            <div id="blogname">
                <h1>
                    <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a>
                </h1>
            </div>

            <div id="slogan">
                <?php bloginfo('description'); ?>
            </div>
        </div>

    </header>

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


    <section id="content">
