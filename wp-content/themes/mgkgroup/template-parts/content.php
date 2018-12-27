<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mgkgroup
 */

?>
<?php
if ( is_single() ) :
  //wpb_set_post_views($id_post);  
?>
<div class="single_post_title"><?php the_title(); ?></div>
<div class="single_post_text">
	<?php the_content(); ?>
</div>
<?php else : ?>
  <!-- Blog post -->
  <div class="blog_post">
    <div class="blog_image" style="background-image:url(<?php echo $_thumbnail; ?>)"></div>
    <div class="blog_text"><?php the_title(); ?></div>
    <div class="blog_button"><a href="<?php the_permalink(); ?>">Đọc thêm</a></div>
  </div>
<?php endif;?>   

