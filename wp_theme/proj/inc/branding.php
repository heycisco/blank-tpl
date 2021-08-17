<div class="main-header__branding">
<div class="main-header__branding__title">
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ):?>
	<?php if( has_custom_logo() ):?>
	<?php $logo_img = ''; if( $custom_logo_id = get_theme_mod('custom_logo') ){ $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array( 'class' => 'custom-logo', 'itemprop' => 'logo', ) ); } echo $logo_img;?>
	<?php else:?>
	<h1><?php echo esc_html( get_bloginfo( 'name' ) );?></h1>
	<?php endif;?>
<?php else:?>
	<?php if( has_custom_logo() ):?>
	<a href="<?php echo esc_url( home_url( '/' ) );?>" title="<?php echo esc_html( get_bloginfo( 'name' ) );?>" rel="home"><?php $logo_img = ''; if( $custom_logo_id = get_theme_mod('custom_logo') ){ $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array( 'class' => 'custom-logo', 'itemprop' => 'logo', ) ); } echo $logo_img;?></a>
	<?php else:?>
	<h1><a href="<?php echo esc_url( home_url( '/' ) );?>" title="<?php echo esc_html( get_bloginfo( 'name' ) );?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) );?></a></h1>
	<?php endif;?>
<?php endif;?>
</div>
<div class="main-header__branding__description"><?php bloginfo( 'description' ); ?></div>
</div>