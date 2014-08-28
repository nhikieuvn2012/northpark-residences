<?php
get_header();
?>
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