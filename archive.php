<?php get_header(); ?>
<div class="content-wrapper">
	<?php if (have_posts()) : ?>
	
		<?php $post = $posts[0]; // Thanks Kubrick for this code ?>
		
		<?php if (is_category()) { ?>				
		<h2><?php _e('Archiv zur Kategorie'); echo single_cat_title(); ?></h2>
		
 	  	<?php } elseif (is_day()) { ?>
		<h2><?php _e('Archiv vom'); the_time('j.F, Y'); ?></h2>
		
	 	<?php } elseif (is_month()) { ?>
		<h2><?php _e('Archiv des Monats '); the_time('F, Y'); ?></h2>

		<?php } elseif (is_year()) { ?>
		<h2><?php _e('Archive '); the_time('Y'); ?></h2>

		<?php } elseif (is_author()) { ?>
		<h2><?php _e('Autoren Archiv'); ?></h2>

		<?php } ?>
		
		<?php while (have_posts()) : the_post(); ?>
		
			<div class="post">
	
				<h2 class="posttitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanenter link zu'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			
				<div class="postinfo"><span class="author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
							<?php the_author() ?>
						</a></span>&nbsp;<span class="date"><?php the_time('j. F Y') ?></span></div>
			
				<div class="postmeta"> 
				<?php comments_popup_link(__('Kommentar'), __('Kommentare (1)'), __('Komentare (%)'), 'commentslink', __('Comments off')); ?>
				</div>
			
				<div class="postentry">
				<?php the_content("<p>weiterlesen &raquo;</p>"); ?>
				</div>
				
				<!--
				<?php trackback_rdf(); ?>
				-->
			
			</div>
				
		<?php endwhile; ?>

		<?php posts_nav_link(' &#183; ', __('N&auml;chste Eintr&auml;ge &raquo;'), __('&laquo; Vorherige Eintr&auml;ge')); ?>
		
	<?php else : ?>

		<h2><?php _e('Nicht zu finden'); ?></h2>

		<p><?php _e('Sorry, aber die angeforderte Seite war nicht aufzufinden.'); ?></p>
		
		<h3><?php _e('Suchen'); ?></h3>
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
