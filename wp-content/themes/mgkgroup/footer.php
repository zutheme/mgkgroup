<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mgkgroup
 */

?>
<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a  href="#"><img class="logo-footer" src="<?php bloginfo('template_directory');?>/images/Logo_MGK.png"></a></div>
						</div>
						<div class="footer_title">Giải đáp, tư vấn 24/7</div>
						<div class="footer_phone"><a href="tel:19001768">Hãy gọi 1900 1768</a></div>
						<div class="footer_contact_text">
							<p>Số 7,Trần Quan Diệu, Phường 14</p>
							<p>Quận 3, TP Hồ Chí Minh</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Lĩnh vực hoạt động</div>
						<ul class="footer_list">
							<li><a href="#">Thẩm mỹ viện</a></li>
							<li><a href="#">Đào tạo</a></li>
							<li><a href="#">hệ thống SPA</a></li>
							<li><a href="#">Tư vấn setup SPA</a></li>
							<li><a href="#"></a></li>
						</ul>
						
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Tầm nhìn</a></li>
							<li><a href="#">Sứ mệnh</a></li>
							<li><a href="#">Giá trị cốt lõi</a></li>
							<li><a href="#">Lịch sự thành lập</a></li>
							
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Chính sách</div>
						<ul class="footer_list">
							<li><a href="#">Tài khoản</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by <a href="http://mgkgroup.vn" target="_blank">mgkgroup.vn</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a></li>
								<li><a href="http://www.mgkgroup.vn/category/tin-tuc-su-kien/tin-tuc/">Tin tức</a></li>
								<li><a href="http://www.mgkgroup.vn/lien-he/">Liên hệ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
$page_slug = home_url('/')."lien-he/";
$rt = get_page_title_for_slug($page_slug);
echo $rt;
?>
<script src="<?php bloginfo('template_directory');?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/styles/bootstrap4/popper.js"></script>
<script src="<?php bloginfo('template_directory');?>/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/plugins/greensock/TweenMax.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>

<script src="<?php bloginfo('template_directory');?>/plugins/easing/easing.js"></script>

<?php wp_footer(); ?>

</body>
</html>
