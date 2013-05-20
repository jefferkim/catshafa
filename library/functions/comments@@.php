<?php
/**
 * Functions for handling how comments are displayed and used on the site. This allows more precise 
 * control over their display and makes more filter and action hooks available to developers to use in their 
 * customizations.
 *
 * @package HybridCore
 * @subpackage Functions
 * @author Justin Tadlock <justin@justintadlock.com>
 * @copyright Copyright (c) 2008 - 2011, Justin Tadlock
 * @link http://themehybrid.com/hybrid-core
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Filter the comment form defaults. */
add_filter( 'comment_form_defaults', 'hybrid_comment_form_args' );

/* Add a few comment types to the allowed avatar comment types list. */
add_filter( 'get_avatar_comment_types', 'hybrid_avatar_comment_types' );

/**
 * Arguments for the wp_list_comments_function() used in comments.php. Users can set up a 
 * custom comments callback function by changing $callback to the custom function.  Note that 
 * $style should remain 'ol' since this is hardcoded into the theme and is the semantically correct
 * element to use for listing comments.
 *
 * @since 0.7.0
 * @access public
 * @return array $args Arguments for listing comments.
 */
function hybrid_list_comments_args() {

	/* Set the default arguments for listing comments. */
	$args = array(
		'style' => 'ol',
		'type' => 'all',
		'avatar_size' => 80,
		'callback' => 'hybrid_comments_callback',
		'end-callback' => 'hybrid_comments_end_callback'
	);

	/* Return the arguments and allow devs to overwrite them. */
	return apply_atomic( 'list_comments_args', $args );
}

/**
 * Uses the $comment_type to determine which comment template should be used. Once the 
 * template is located, it is loaded for use. Child themes can create custom templates based off
 * the $comment_type. The comment template hierarchy is comment-$comment_type.php, 
 * comment.php.
 *
 * The templates are saved in $hybrid->comment_template[$comment_type], so each comment template
 * is only located once if it is needed. Following comments will use the saved template.
 *
 * @since 0.2.3
 * @access public
 * @param $comment The comment object.
 * @param $args Array of arguments passed from wp_list_comments().
 * @param $depth What level the particular comment is.
 * @return void
 */
function hybrid_comments_callback( $comment, $args, $depth ) {
	global $hybrid;
	$GLOBALS['comment'] = $comment;
	$GLOBALS['comment_depth'] = $depth;

	/* Get the comment type of the current comment. */
	$comment_type = get_comment_type( $comment->comment_ID );

	/* Create an empty array if the comment template arra