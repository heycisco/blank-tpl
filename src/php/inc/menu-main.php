<nav class="main-header__menu main-menu" role="navigation">
<button type="button" class="menu-toggle"><span class="menu-icon">&#9776;</span><span class="menu-text screen-reader-text"><?php esc_html_e( ' Menu', 'starchenkov-dev' ); ?></span></button>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>