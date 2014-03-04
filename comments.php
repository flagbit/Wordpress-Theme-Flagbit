<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p><?php _e("Dieser Beitrag ist Passwort gesch&uuml;tzt. Bitte Passwort eingeben."); ?><p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background, thanks Kubrick */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h2 id="comments">
	<span class="commentlink"><?php comments_number(__('Bisher keine Kommentare'), __('Bisher 1 Kommentar'), __('Bisher % Kommentare')); ?>
	<?php if ( comments_open() ) : ?>
	<a href="#postcomment" title="<?php _e('Zur Kommentareingabe'); ?>">&raquo;</a>
	<?php endif; ?>
	</span>
	<span class="homelink">&laquo;&nbsp;<a href="index.php">Zur&uuml;ck zur &Uuml;bersicht</a></span>
	</h2>
	
	<ol id="commentlist">
	<?php echo wp_list_comments(); ?>
	</ol>
	
	<p class="small">
	<?php comments_rss_link(__('Kommentare als <abbr title="Really Simple Syndication">RSS</abbr> abbonieren.')); ?>
	<?php if ( pings_open() ) : ?>
	&#183; <a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Uniform Resource Identifier">URI</abbr>'); ?></a>
	<?php endif; ?>
	</p>

<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post-> comment_status) : ?> 
		<?php /* No comments yet */ ?>
		
	<?php else : // comments are closed ?>
		<?php /* Comments are closed */ ?>
		<p><?php _e('Kommentarfunktion momentan geschlossen.'); ?></p>
		
	<?php endif; ?>
	
<?php endif; ?>

<?php if ('open' == $post-> comment_status) : ?>

	<h2 id="postcomment"><?php _e('Schreib einen Kommentar'); ?></h2>
	
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	
		<p>Du mu&szlig;t Dich zum Kommentieren <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">einloggen</a>.</p>
	
	<?php else : ?>
	
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		
		<?php if ( $user_ID ) : ?>
		
		<p>Als <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"> <?php echo $user_identity; ?></a> eingeloggt. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Ausloggen &raquo;</a></p>

		<?php else : ?>
	
		<p>
		<label for="author">Name</label>
		<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="30" tabindex="1" />
		</p>
		
		<p>
		<label for="email">E-Mail</label>
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="30" tabindex="2" />
		</p>
		
		<p>
		<label for="url">Website</label>
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="30" tabindex="3" />
		</p>

		<?php endif; ?>

	<p>
	<label for="url">Kommentar</label>
	<textarea name="comment" id="comment" cols="70" rows="10" tabindex="4"></textarea>
	</p>

	<p>
	<input name="submit" type="submit" id="submit" tabindex="5" value="Abschicken" />
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</p>

	<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
