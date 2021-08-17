<?php if ( is_singular() ) {
get_template_part( 'inc/post-single' );
} else {
get_template_part( 'inc/post-prev' );
} ?>