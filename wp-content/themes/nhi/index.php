<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<section class="featured">
<div class="featured-home "><div class="flexslider"><ul class="slides">
	<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Northpark1.jpg" alt="North Park Residences" /></li>
	<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Northpark2.jpg" alt="North Park Residences" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Northpark3.jpg" alt="North Park Residences" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Northpark4.jpg" alt="North Park Residences" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Northpark5.jpg" alt="North Park Residences" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Northpark6.jpg" alt="North Park Residences" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Northpark7.jpg" alt="North Park Residences" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Northpark8.jpg" alt="North Park Residences" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Northpark9.jpg" alt="North Park Residences" /></li>
</ul></div></div></section>

<section class="wrap">
<div class="content">
<?php echo $post->post_content;?>
</div>

<aside role="complementary" class="sidebar">
<?php dynamic_sidebar( 'sidebar-main');?>
</aside>

</section>
<?php
get_footer();