<?php get_header(); ?>
<div class="content-wrapper single-article">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post">
			<header>
				<h1 class="posttitle" id="post-<?php the_ID (); ?>"><a href="<?php the_permalink () ?>" rel="bookmark"
						title="<?php _e ('Permanenter link zu'); ?> <?php the_title (); ?>"><?php the_title (); ?></a>
				</h1>
			</header>

			<div class="postinfo"><span class="author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
							<?php the_author() ?>
						</a></span>&nbsp;<span class="date"><?php the_time('j. F Y') ?></span></div>

				<div class="postmeta">
				<a href="#comments">Zu den Kommentaren springen</a>
				</div>

				<div class="postentry">
					<?php the_content("<p>__('weiterlesen &raquo;')</p>"); ?>
				</div>

				<div class="postauthor">
					<h4>Über den Autor: <?php the_author_posts_link () ?></h4>

					<div class="postauthorimage">
						<?php echo get_avatar (get_the_author_id (), 80); ?>
					</div>
					<p><?php the_author_description (); ?></p>
				</div>

				<?php //trackback_rdf(); ?>

			<?php the_tags ('<footer><p>Tags: ', ', ', '</p></footer>'); ?>

		</article>

		<?php comments_template('', true); ?>

	<?php endwhile; else : ?>

		<h2><?php _e('Nicht zu finden'); ?></h2>
		<p><?php _e('Sorry, aber die angeforderte Seite war nicht aufzufinden.'); ?></p>
		<h3><?php _e('Suchen'); ?></h3>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
