<?php
/**
 * Template Name: Produtos Template
 *
 * Displays the Team Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'himalayas_before_body_content' );

	$himalayas_layout = himalayas_layout_class(); ?>

	<div id="content" class="site-content">
	   <main id="main" class="clearfix <?php echo $himalayas_layout; ?>">
	      <div class="tg-container">

				<div id="primary">
					<div id="content-2">
						<ul class="row">
							<?php
								$args = array(
									'post_type' => 'product',
									'posts_per_page' => 5
									);
								$loop = new WP_Query( $args );
								if ( $loop->have_posts() ) {
									while ( $loop->have_posts() ) : $loop->the_post();
										wc_get_template_part( 'content', 'product' );
									endwhile;
								} else {
									echo __( 'No products found' );
								}
								wp_reset_postdata();
							?>
						</ul><!--/.products-->
					</div><!-- #content-2 -->
				</div><!-- #primary -->

				<?php  himalayas_sidebar_select(); ?>
			</div>
		</main>
	</div>

	<?php do_action( 'himalayas_after_body_content' ); ?>

<?php get_footer(); ?>