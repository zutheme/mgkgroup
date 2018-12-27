<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mgkgroup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/styles/bootstrap4/bootstrap.min.css">
	<link href="<?php bloginfo('template_directory');?>/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/plugins/slick-1.8.0/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style-custom.css?v=0.0.5">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php bloginfo('template_directory');?>/images/phone.png" alt=""></div>1900 1768 </div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php bloginfo('template_directory');?>/images/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">contact@mgkgroup.vn</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="#">English<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Italian</a></li>
											<li><a href="#">Spanish</a></li>
											<li><a href="#">Japanese</a></li>
										</ul>
									</li>
									
								</ul>
							</div>
							<div class="top_bar_user">
								<div class="user_icon"><img src="<?php bloginfo('template_directory');?>/images/user.svg" alt=""></div>
								<div><a href="#">Đăng ký</a></div>
								<div><a href="#">Đăng nhập</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="<?php bloginfo('template_directory');?>/images/Logo_MGK.png" width="100%"></a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Tìm kiếm...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">MGK CORPORATION</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">Tất cả</a></li>
													<li><a class="clc" href="#">Hệ thống đào tạo</a></li>
													<li><a class="clc" href="#">Thẩm mỹ viện</a></li>
													<li><a class="clc" href="#">Hệ thống spa</a></li>
													<li><a class="clc" href="#">Tư vấn setup spa</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?php bloginfo('template_directory');?>/images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="<?php bloginfo('template_directory');?>/images/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Wishlist</a></div>
									<div class="wishlist_count">115</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="<?php bloginfo('template_directory');?>/images/cart.png" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Cart</a></div>
										<div class="cart_price"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">Trang chủ</div>
								</div>

								<ul class="cat_menu">
									<li><a href="#">MGK Corporation<i class="fas fa-chevron-right ml-auto"></i></a></li>
									<li><a href="#">Lĩnh vực hoạt động<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Phát triển bền vững<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Đối tác<i class="fas fa-chevron-right"></i></a></li>
									
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<!-- <li><a href="#">Giới thiệu<i class="fas fa-chevron-down"></i></a></li> -->
									<li class="hassubs">
										<a href="#">Giới thiệu<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Tầm nhìn<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Sứ mệnh<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Giá trị cốt lõi<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Lịch sử hình thành<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Sứ mệnh<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Giá trị cốt lõi<i class="fas fa-chevron-down"></i></a></li>
											<!-- <li><a href="#">Lịch sử hình thành<i class="fas fa-chevron-down"></i></a></li> -->
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Lĩnh vực hoạt động<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Viện thẩm mỹ<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Đào tạo thẩm mỹ<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Hệ thống Spa<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Tư vấn Setup Spa<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									
									<li class="hassubs">
										<a href="#">Tin tức & sự kiện<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="shop.html">Tin tức<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="product.html">Tuyển dụng<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									
									<li><a href="contact.html">Nội bộ<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">Liên hệ<i class="fas fa-chevron-down"></i></a></li>
										
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php bloginfo('template_directory');?>/images/phone_white.png" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php bloginfo('template_directory');?>/images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
