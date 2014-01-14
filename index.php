<?php get_header(); ?>
<div class="content-wrapper">
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>

			<article class="post">
				<header>
					<h1 class="posttitle" id="post-<?php the_ID (); ?>"><a href="<?php the_permalink () ?>"
							rel="bookmark"
							title="<?php _e ('Permanenter link zu'); ?> <?php the_title (); ?>"><?php the_title (); ?></a>
					</h1>
				</header>

				<div class="postinfo">
					<span class="author">
						<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
							<?php the_author() ?>
						</a>
					</span>
					&nbsp;
					<span class="date"><?php the_time('j. F Y') ?></span>
				</div>
			
				<div class="postmeta"> 
				<?php comments_popup_link(__('Kommentar'), __('Kommentare (1)'), __('Komentare (%)'), 'commentslink', __('Comments off')); ?>
				</div>
			
				<div class="postentry">
				<?php the_content("<p>weiterlesen &raquo;</p>"); ?>
				</div>
				
				<!--
				<?php trackback_rdf(); ?>
				-->

				<?php the_tags ('<footer><p>Tags: ', ', ', '</p></footer>'); ?>

			</article>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Vorherige Eintr&auml;ge')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('N&auml;chste Eintr&auml;ge &raquo;')) ?></div>
		</div>

	<?php else : ?>

		<h2><?php _e('Nicht zu finden'); ?></h2>

		<p><?php _e('Sorry, aber die angeforderte Seite war nicht aufzufinden.'); ?></p>
		
		<h3><?php _e('Suchen'); ?></h3>
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
	</div>

<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
