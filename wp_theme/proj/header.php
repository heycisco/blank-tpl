<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body class="heycisco-proj main-body" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="main-header" role="banner">
<?php get_template_part( 'inc/branding' ); ?>
<?php get_template_part( 'inc/menu-main' ); ?>
<?php get_template_part( 'inc/searchform' ); ?>
</header>
<div class="main-block wrapper">