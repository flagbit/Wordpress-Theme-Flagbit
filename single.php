<?php get_header(); ?>
<div class="content-wrapper single-article">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div class="post">
	
				<h2 class="posttitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanenter link zu'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<div class="postinfo"><span class="author"><?php the_author_posts_link() ?></span>&nbsp;<span class="date"><?php the_time('j. F Y') ?></span></div>

				<div class="postmeta"> 
				<img src="<?php bloginfo('template_directory'); ?>/images/icons/kommentarblase.png" border="0" alt="" />
				<a href="#comments">Zu den Kommentaren springen</a>
				</div>
				
				<div class="postentry">
				<?php the_content("<p>__('weiterlesen &raquo;')</p>"); ?>
				</div>
				
				<div class="postauthor">
					<h4>Über den Autor: <?php the_author_posts_link() ?></h4>
					<div class="postauthorimage">
						<?php echo get_avatar(get_the_author_id(),80); ?>
					</div>
					<p><?php the_author_description();?></p>
				</div>
				
				<!--
				<?php trackback_rdf(); ?>
				-->

				<?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
			
			</div>
		
		<?php comments_template(); ?>
				
	<?php endwhile; else : ?>

		<h2><?php _e('Nicht zu finden'); ?></h2>

		<p><?php _e('Sorry, aber die angeforderte Seite war nicht aufzufinden.'); ?></p>
		
		<h3><?php _e('Suchen'); ?></h3>
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>