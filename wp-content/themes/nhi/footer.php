</main>
<footer role="contentinfo">
<div class="footer"><div class="menu"><ul id="menu-foot-menu" class="">
<?php
$menu_name = 'footer-menu';
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    $menu_list='';
                    foreach ( (array) $menu_items as $key => $menu_item ) {
                    $title = $menu_item->title;
                    $url = $menu_item->url;
                    $title_alt = $menu_item->attr_title; // your attribute
                    $menu_list .= '<li><a title="' . $title . '" href="' . $url . '">' . $title . '</a></li>';
                    }
    }
echo ($menu_list);
?>
</ul></div><div class="copyright">http://www.northpark-residences.com ©<script>var d = new Date();document.write(d.getFullYear());</script> All Rights Reserved.</div><script type='text/javascript' src='<?php echo get_stylesheet_directory_uri();?>/js/scripts.v68.js'></script>
<script type="text/javascript">
disableSelection(document.body)
</script>
<?php
wp_head();
?>
</body>

<!-- Mirrored from www.northpark-residences.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Aug 2014 07:24:26 GMT -->
</html>