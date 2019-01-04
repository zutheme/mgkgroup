<?php
/**
 * Template Name: Search
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package mgkgroup
 */
get_header();
?>
<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_attr( get_option('images_banner1') ); ?>"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'kết quả tìm kiếm: %s', 'mgkgroup' ), '<span>' . get_search_query() . '</span>' );
					?>
		</div>
	</div>
	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">
						<?php if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
	
					</div>
				</div>
					
			</div>
		</div>
	</div>
<?php
get_footer(); ?>
