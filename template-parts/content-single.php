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
		
		<div class="col-sm-6 col-xs-12 pull-right row feature-thumbnail">
			<?php twentysixteen_post_thumbnail()?>
		</div>
		<div class="feature-title title-desktop col-xs-10 col-xs-push-1 col-sm-push-0 col-sm-6 pull-left">
			<?php the_title( '<h1>', '</h1>' ); ?>
			<p class="author-subtitle">
					By <?php the_author(); ?>
			</p>
		</div>
	</header><!-- .entry-header -->

	

	<div class="entry-content col-xs-10 col-xs-push-1 col-sm-6 col-sm-push-3">
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
