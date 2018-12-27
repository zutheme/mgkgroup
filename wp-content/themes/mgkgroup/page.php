<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mgkgroup
 */

get_header();
?>
<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory');?>/images/blog_single_background.jpg" data-speed="0.8"></div>
	</div>

	<!-- Single Blog Post -->

	<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<?php
	        			while ( have_posts() ) :
	        				the_post();
	        				get_template_part( 'template-parts/content', 'page' );
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
