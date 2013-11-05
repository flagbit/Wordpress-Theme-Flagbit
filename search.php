<?php get_header(); ?>
<div class="content-wrapper">
	<?php if (have_posts()) : ?>
	
		<h2><?php _e('Suchergebnis'); ?></h2>
		
		<?php while (have_posts()) : the_post(); ?>
		
			<div class="post">
	
				<h2 class="posttitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanenter link zu'); ?> <?php the_title(); ?>"><?php the_title(); ?></a>&nbsp;<span class="author"><?php the_author() ?></span>&nbsp;<span class="date"><?php the_time('j. F Y') ?></span></h2>
			
				<div class="postmeta"> 
				<img src="<?php bloginfo('template_directory'); ?>/images/comment.png" border="0" alt="" />
				<?php comments_popup_link(__('Kommentar'), __('Kommentare (1)'), __('Komentare (%)'), 'commentslink', __('Comments off')); ?>
				</div>
			
				<div class="postentry">
				<?php the_content("<p>__('weiterlesen &raquo;')</p>"); ?>
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
