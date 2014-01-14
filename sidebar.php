<aside class="sidebar" role="complementary">
	<ul>
	<li class="sidebar_category">
		<div class="category_border">
			<h2><?php _e('Kategorien'); ?></h2>
		</div>
		<ul>
			<?php wp_list_categories('title_li='); ?> 
		</ul>
	</li>

	<li>
		<ul class="dynamic-sidebar">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

				<li class="noncat">
					<?php wp_list_pages('title_li=<h2>' . __('Menu') . '</h2>' ); ?>
				</li>

				<li class="noncat">
					<h2><?php _e('Archiv'); ?></h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>

				<?php if (function_exists('wp_theme_switcher')) { ?>
					<li class="noncat">
						<h2><?php _e('Themen'); ?></h2>
						<?php wp_theme_switcher(); ?>
					</li>
				<?php } ?>

				<?php if ( is_home() ) {
					wp_list_bookmarks(array('class' => 'noncat'));
				} ?>

				<li class="noncat">
					<h2><?php _e('Meta'); ?></h2>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS 2.0'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr> 2.0'); ?></a></li>
						<li><a href="<?php bloginfo('atom_url'); ?>" title="<?php _e('Syndicate this site using Atom'); ?>"><?php _e('Atom'); ?></a></li>
						<li><a href="http://wordpress.org" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>">WordPress</a></li>
						<?php wp_meta(); ?>
					</ul>
				</li>

			<?php endif; ?>
		</ul>
	</li>
	<?php
		if(function_exists('wp_fb_like')) {
			echo '<li class="fb-like"><p>';
			wp_fb_like();
			echo '</p></li>';
		}
	?>

</ul>
</aside>

