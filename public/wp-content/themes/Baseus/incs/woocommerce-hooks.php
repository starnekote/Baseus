<?php

add_filter('woocommerce_enqueue_styles', '__return_false');


// content-single-product.php
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );

?>