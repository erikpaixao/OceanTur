<?php
/**
 * Front Page Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */
?>

<?php get_header(); ?>

	<div id="content" class="site-content">
		<?php
	   if( is_active_sidebar( 'himalayas_front_page_section' ) ) {
	   	if ( !dynamic_sidebar( 'himalayas_front_page_section' ) ):
	   	endif;
	   }

	   $himalayas_layout = himalayas_layout_class();

	   if( get_theme_mod( 'himalayas_hide_blog_front' , 0 ) != 1 ): ?>
		   <main id="main" class="clearfix <?php echo $himalayas_layout; ?>">
				<div class="tg-container">
					<div id="primary" class="content-area">

		            <?php if ( have_posts() ):

		               while ( have_posts() ) : the_post();

		                  if ( is_front_page() && is_home() ) {
		                  	get_template_part( 'content', 'page' );
		                  } elseif ( is_front_page() ) {
		                  	get_template_part( 'content', 'page' );
		                  }
		               endwhile;

		               get_template_part( 'navigation', 'none' );
		            else:
		               get_template_part( 'no-results', 'none' );
		            endif; ?>
					
			      </div>
			   </div>
			</main>
		<?php endif; ?>
	</div>
	<br />
	<br />
	<h2 class="produtos-home main-title">Produtos</h2>
	<div id="produtos" class="parallax parallax-section" data-speed="15" style="background-image: url(<?php echo the_post_thumbnail_url();?>);">
		<div class="parallax-back">	
			<div class="tg-container" >

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home-page") ) : ?>
				<?php endif ;?>

			</div>
		</div>
	</div>
	</div>
	
	<div class="depoimentos-home">
		<h2 class="produtos-home main-title">Depoimentos</h2>
		<div class="slide-depoimentos">
		<?php do_action('slideshow_deploy', '60'); ?>
		</div>
	</div>

	<div class="contato-home">
		<h2 class="produtos-home main-title">Contatos</h2>
		<div class="slide-depoimentos">
		<?php //do_action('slideshow_deploy', '60'); ?>
		</div>
	</div>
	
	
<?php get_footer(); ?>