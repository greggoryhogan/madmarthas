<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover">
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="icon" href="fav.png" type="image/png">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="top site">
<a href="<?php bloginfo(url) ?>"  class="logo"><img src="<?php bloginfo(template_url)?>/images/logo.jpg" alt="HOME" /></a>
<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('Hours') ) : ?>
<?php endif; ?>
</div>
<div class="navWrap site">
		<?php wp_nav_menu( array('menu' => 'Main Nav' )); ?>
        <div  class="social">
        <a href="http://www.facebook.com/profile.php?id=100000730682165&sk=wall">F</a>
        <a href="mailto:madmartha@madmarthasislandcafe.com">@</a>
        </div>
</div>
<div class="wrapper site">
<div class="flex">
<div class="main">