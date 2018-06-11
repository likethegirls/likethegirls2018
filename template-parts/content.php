<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-6'); ?>>
	<div class="entry-content mt-xs-2 mt-sm-0">
		<?php
			twentysixteen_post_thumbnail();
		/* translators: %s: Name of current post */
	/* Add this back for an exerpt. 
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ), */
			
			 //remember to remove the colon.

	//	) );
		//	twentysixteen_excerpt();
				

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="entry-titles col-xs-12">
		<header class="entry-header h2">
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
				<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); 
				 else: 
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			 endif; 
			
			the_excerpt(); ?>
			</p>
			<!--
				<a class="more-link" href="%s" rel="bookmark">READ MORE 
				<?php esc_url(get_permalink()) ?>
				</a> -->
				<?php twentysixteen_entry_meta();?>
		</header><!-- .entry-header -->
	</div>
</article><!-- #post-## -->
