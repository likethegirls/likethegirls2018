<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="single-header col-sm-12">
		<?php the_title( '<h1 class="title-desktop col-sm-6 pull-left">', '</h1>' ); ?>
		<span class="col-sm-6 pull-right">
			<?php twentysixteen_post_thumbnail()?>
		</span>
		<?php the_title( '<h1 class="entry-title title-mobile">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	

	<div class="entry-content col-sm-6 col-sm-push-3">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			// if ( '' !== get_the_author_meta( 'description' ) ) {
			//	get_template_part( 'template-parts/biography' );
			//}
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php // twentysixteen_entry_meta(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
