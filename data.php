<?php
// hide screen option
add_filter( 'screen_options_show_screen', '__return_false' ); 

//add extra fields in product table
    add_action( 'manage_product_posts_custom_column', 'wpso23858236_product_column_offercode', 10, 2 );
    function wpso23858236_product_column_offercode( $column, $postid ) {
        if ( $column == 'price' ) {
            echo '&nbsp;&nbsp;<span class="edit_price" data-id="'.$postid.'">Edit</span>';
        }
    }









/* Access the value outside the tag*/
$(document).ready(function(){
    var a=$(".a").contents().filter(function(){
        return this.nodeType == 3;
    }).text();
    alert(a);
});
http://jsfiddle.net/euvKK/




/* Create Zip viw putty */
 zip -r yourcab.zip /var/www/html/yourcab
/* Git commands */
     git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/swaranlata/yourcab.git
git push -u origin master
?>