<?php

/**
 *  Template Name: Home template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eleaning
 */
get_header();
get_template_part('template-parts/banner2');
get_template_part('template-parts/brand-slogan');
get_template_part('template-parts/menu-horizontal');
get_template_part('template-parts/trends');
get_template_part('template-parts/news');
get_template_part('template-parts/about-us');
get_template_part('template-parts/partner-logo');
get_template_part('template-parts/newletter');
get_footer();
?>
