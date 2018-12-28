<!-- Reviews -->



	<div class="reviews">

		<div class="container">

			<div class="row">

				<div class="col">

					

					<div class="reviews_title_container">

						<h3 class="reviews_title">Tin tức</h3>

						<div class="reviews_all ml-auto"><a href="#">xem <span>tất cả</span></a></div>

					</div>



					<div class="reviews_slider_container">

						

						<!-- Reviews Slider -->

						<div class="owl-carousel owl-theme reviews_slider">

							

							<!-- Reviews Slider Item -->
						<?php
	                        $args = array(
	                        'post_type' => 'post',
	                        'posts_per_page' => '6'
	                        );                                                                           
	                        $team_query = new WP_Query($args);
	                       if ($team_query->have_posts()) {
	                        while ($team_query->have_posts()) {
	                          $team_query->the_post();  
	                          $id = get_the_ID();
	                          $src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false );
	                           if(!$src){
	                              //$_src = no_thumbnail;
	                              //$rand = rand(0,4);
	                              //$_src = no_thumbnail_url."no-thumbnail".$rand.".jpg";
	                            }else{
	                              $_src = $src[0];
	                            } 
	                         ?>
	                         
	                          <div class="owl-item">

								<div class="review d-flex flex-row align-items-start justify-content-start">

									<div><div class="review_image"><a href="<?php the_permalink(); ?>"><img src="<?php echo $_src; ?>" alt=""></a></div></div>

									<div class="review_content">

										<div class="review_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

										<div class="review_rating_container">

											<!-- <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div> -->

											<!-- <div class="review_time">2 day ago</div> -->

										</div>

										<div class="review_text"><p><?php //the_excerpt_max_charlength(185); ?></p></div>

									</div>

								</div>

							</div>

	                         <?php  }
	                        } else {
	                            echo "nothing found";
	                        } 
                       		wp_reset_query();   ?> 					
						</div>

						<div class="reviews_dots"></div>

					</div>

				</div>

			</div>

		</div>

	</div>

