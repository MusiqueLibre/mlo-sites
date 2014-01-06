<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package SemPress
 * @since SemPress 1.0.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://microformats.org/profile/specs" />
<link rel="profile" href="http://microformats.org/profile/hatom" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php include 'inc/global_statics.php'; ?>
<?php include 'inc/wp_statics.php'; ?>
<?php  wp_enqueue_script('init', get_template_directory_uri() . '/js/init.js', false); ?>

</head>

<body id="wordpress_site" <?php body_class(get_bloginfo('name')); ?><?php sempress_blog_itemscope(); ?>>
<?php
  $site_title = get_bloginfo('name');
  $site_description = get_bloginfo("description");
  include 'inc/general_menu.php'; 
?>

<?php do_action( 'before' ); ?>
    

