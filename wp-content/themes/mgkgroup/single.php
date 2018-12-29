<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mgkgroup
 */
get_header();
?>
<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_attr( get_option('images_banner1') ); ?>" data-speed="0.8"></div>
	</div>

	<!-- Single Blog Post -->

	<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<?php
	        			while ( have_posts() ) :
	        				the_post();
	        				get_template_part( 'template-parts/content', get_post_type() );
	        			endwhile;
	        			?>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part('template-parts/relative'); 
		  get_template_part('template-parts/newletter'); ?>
<?php
get_footer();
