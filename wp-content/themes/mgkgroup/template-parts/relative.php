<!-- Blog Posts -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">
						<?php
				          $cat_slug = get_curent_slug();
				          $args = array(
				          'category_name'  => $cat_slug,
				          'post_type' => 'post',
				          'posts_per_page' => '3'
				          );                                                                           
				          $team_query = new WP_Query($args);
				         if ($team_query->have_posts()) {
				          while ($team_query->have_posts()) {
				            $team_query->the_post();  
				            $id = get_the_ID();
				            $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'medium', false );
				            //$price = get_post_meta( $id, 'meta-unit-price', true );              
				             if(!$thumbnail){
				              //$_thumbnail = no_thumbnail;
				            }else{
				              $_thumbnail = $thumbnail[0];
				            }
				           ?>
				           <div class="blog_post">
							<div class="blog_image" style="background-image:url(<?php echo $_thumbnail; ?>)"></div>
							<div class="blog_text"><?php the_title(); ?></div>
							<div class="blog_button"><a href="<?php the_permalink(); ?>">Đọc thêm</a></div>
						</div>
				          
				           <?php 
				              }
				          } else {
				              echo "nothing found";
				          }
				          wp_reset_query();  ?>

					</div>
				</div>	
			</div>
		</div>
	</div>