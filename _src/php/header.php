<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part( 'inc/meta' ); ?>
<?php wp_head(); ?>
</head>
<body class="heycisco-proj main-body" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="main-header" role="banner">
<?php get_template_part( 'inc/branding' ); ?>
<?php get_template_part( 'inc/menu-main' ); ?>
<?php get_search_form(); ?>
</header>
<div class="main-block wrapper">