<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title><?php wp_title(); ?></title>
<meta name="description" content="Northpark Residences &#8211; Yishun Central Condo by Frasers Centrepoint. Intergrated with Northpoint City Mega Project" />
<link rel="canonical" href="index.html" />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Cuprum|' />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/styles/canvas/styles.v68.css" media="screen" />
<script type="text/javascript">
<!--
/******************************************************************************
***   COPY PROTECTED BY CHETANGOLE.COM/BLOG/WP-COPYPROTECT   version 3.0.0 ****
******************************************************************************/
function clickIE4(){
if (event.button==2){
return false;
}
}
function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("return false")
// --> 
</script>

<script type="text/javascript">
/******************************************************************************
***   COPY PROTECTED BY CHETANGOLE.COM/BLOG/WP-COPYPROTECT   version 3.0.0 ****
******************************************************************************/
function disableSelection(target){
if (typeof target.onselectstart!="undefined") //For IE 
	target.onselectstart=function(){return false}
else if (typeof target.style.MozUserSelect!="undefined") //For Firefox
	target.style.MozUserSelect="none"
else //All other route (For Opera)
	target.onmousedown=function(){return false}
target.style.cursor = "default"
}
</script>
<meta name="google-site-verification" content="x4rUibjTMb4sRw5pHH2HGOFRFX5jeusirYpffevKpAM" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head(); ?>
</head>
<body class="home blog">
<div class="canvas wrapper">
<header role="banner">
<div class="header">
<h2 class="siteTitle"><img src="<?php echo get_stylesheet_directory_uri();?>/styles/canvas/header.png" alt="North Park Residences &#8211; Yishun Central Condo by Fraser Centrepoint" class="logo" /><a href="index.html">North Park Residences &#8211; Yishun Central Condo by Fraser Centrepoint</a></h2>
<div class="tagline">Northpark Residences &#8211; Yishun Central Condo by Fraser Centrepoint. Integrated with Northpoint City Mega Project</div>
<nav class="menu nav"><ul id="menu-site-menu" class="menu">
<?php
$current_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://{$_SERVER[HTTP_HOST]}{$_SERVER[REQUEST_URI]}";
$menu_name = 'header-menu';
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    $menu_list='';
                    foreach ( (array) $menu_items as $key => $menu_item ) {
                        if($current_url==$menu_item->url){
                            $menu_list .= '<li class="current-menu-item current_page_item"><a href="' . $menu_item->url. '">' .$menu_item->title. '</a></li>';
                        }else{
                            $menu_list .= '<li><a href="' . $menu_item->url. '">' .$menu_item->title. '</a></li>';
                        }
                    }
    }
echo ($menu_list);
?>
</ul></nav></div>
</header><a id="jump"></a>
<main class="main" role="main">