<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mgkgroup
 */
$id_post = get_the_ID();
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($id_post), 'medium', false );
if(!$thumbnail){
 //$rand = rand(0,4);
//$$_thumbnail = no_thumbnail_url."no-thumbnail".$rand.".jpg";
}else{
$_thumbnail = $thumbnail[0];
}
?>
<div class="blog_post">
    <div class="blog_image" style="background-image:url(<?php echo $_thumbnail; ?>)"></div>
    <div class="blog_text"><?php the_title(); ?></div>
    <div class="blog_button"><a href="<?php the_permalink(); ?>">Đọc thêm</a></div>
  </div>

