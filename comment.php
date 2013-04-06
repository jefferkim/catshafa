<?php
/**
 * Comment Template
 *
 * The comment template displays an individual comment. This can be overwritten by templates specific
 * to the comment type (comment.php, comment-{$comment_type}.php, comment-pingback.php, 
 * comment-trackback.php) in a child theme.
 *
 * @package Origin
 * @subpackage Template
 */

	global $post, $comment;
?>

	<li id="comment-<?php comment_ID(); ?>" class="<?php hybrid_comment_class(); ?> clearfix">

		<?php do_atomic( 'before_comment' ); // origin_before_comment ?>
		

			<?php do_atomic( 'open_comment' ); // origin_open_comment ?>
			
			
			<?php echo apply_atomic_shortcode( 'comment_meta', '[comment-author]' ); ?>



			<div class="comment-content comment-text clearfix">
				
				<?php if ( '0' == $comment->comment_approved ) : ?>
				
					<?php echo apply_atomic_shortcode( 'comment_moderation', '<p class="alert moderation">' . __( '你的评论正在审核', 'origin' ) . '</p>' ); ?>
					
				<?php endif; ?>

				<?php comment_text( $comment->comment_ID ); ?>				
			   
				
			</div><!-- .comment-content .comment-text -->
			
			
			 <?php echo apply_atomic_shortcode( 'comment_meta', '<div class="published">[comment-published] </div>' ); ?>

			<?php do_atomic( 'close_comment' ); // origin_close_comment ?>

		

		<?php do_atomic( 'after_comment' ); // origin_after_comment ?>

	<?php /* No closing </li> is needed.  WordPress will know where to add it. */ ?>