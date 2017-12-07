<?php
// hide screen option
add_filter( 'screen_options_show_screen', '__return_false' ); 

//add extra fields in product table
    add_action( 'manage_product_posts_custom_column', 'wpso23858236_product_column_offercode', 10, 2 );
    function wpso23858236_product_column_offercode( $column, $postid ) {
        if ( $column == 'price' ) {
            echo '<span class=""><i class="fa fa-pencil"></i></span>';
        }
    }
?>