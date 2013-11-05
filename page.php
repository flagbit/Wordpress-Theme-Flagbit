<?php get_header(); ?>
<div class="content-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
			
		<?php the_content("<p>__('weiterlesen &raquo;')</p>"); ?>
		<?php wp_link_pages(); ?>
		
		<?php edit_post_link(__('Editieren'), '<p>', '</p>'); ?>
	
	<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
