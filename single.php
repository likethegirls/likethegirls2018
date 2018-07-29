<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


<?php
	if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<div class="col-sm-8 col-sm-push-2"><p id="breadcrumbs">','</p></div>');
	};
?>
<div id="primary" class="content-area row">

	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				/*
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );



				 // Previous/next post navigation with images
			    $next_post = get_next_post();
			    $previous_post = get_previous_post();
			    the_post_navigation( array(
		        'next_text' => '<div class="meta-nav col-xs-6" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) .
		            '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
		            '<span class="post-title">%title</span>' . get_the_post_thumbnail($next_post->ID,'thumbnail'),
		        'prev_text' => '</div><div class="meta-nav col-xs-6" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
		            '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
		            '<span class="post-title">%title</span>' . get_the_post_thumbnail($previous_post->ID,'thumbnail'), '</div>'
    ) );
*/
			}

			// End of the loop. 
		endwhile;
		?>


	</main><!-- .site-main -->


</div><!-- .content-area -->

<?php get_footer(); ?>
