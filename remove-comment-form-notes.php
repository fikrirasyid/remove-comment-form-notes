<?php
/*
 Plugin Name: Remove Comment Form Notes
 Plugin URI: http://fikrirasy.id/portfolio/remove-comment-form-notes/
 Description: This plugin only does one thing: removing comment form notes' such as 'You may use these HTML tags and attributes...'
 Author: Fikri Rasyid
 Version: 1.0
 Author URI: http://fikrirasy.id
*/

/**
 * Adding filter, and removing unwanted form notes. Quick and simple
 */
function rcfn_remove_comment_form_notes( $fields ){
	$fields['comment_notes_after'] = false;

	return $fields;
}
add_filter( 'comment_form_defaults', 'rcfn_remove_comment_form_notes' );