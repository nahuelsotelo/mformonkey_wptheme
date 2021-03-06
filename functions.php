<?php

// Enable multiple languages
// language files in the /lang
load_theme_textdomain( 'm4m', TEMPLATEPATH . '/lang' );


// Menus
register_nav_menus(
    array( 
        'main' => __( 'Main menu', 'm4m' ),
        'social' => __( 'Social networks', 'm4m' )
    )
);

//CUSTOM POST TYPE >> WORKS
register_post_type('m4m_work', array(
	'labels' => array(
        'name' => __( 'Works' ),
		'singular_name' => __( 'Work' )
	),
	'public' => true,
    'description' => 'MforMonkey works',
    'menu_position' => 5,
    'rewrite' => array('slug' => 'works'),
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields' )
));

// Add thumbnails to works.
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails', array( 'm4m_work') ); 
}

//end WORKS


if ( ! function_exists( 'mformonkey_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyeleven_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function mformonkey_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'mformonkey' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'mformonkey' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s on %2$s <span class="says">said:</span>', 'mformonkey' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'mformonkey' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'mformonkey' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'mformonkey' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'mformonkey' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for twentyeleven_comment()
