<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

<?php 
// Додає айді головного зобоаження в масив галереї
$product_img_id = $product->get_image_id();
$product_gallery_ids = $product->get_gallery_image_ids();
array_unshift($product_gallery_ids, (int) $product_img_id);

$stock = $product->is_in_stock();
if ($stock) {
	$stock_res = 'В наявності';
} else {
	$stock_res = 'Немає в наявності';
}
?>

		<div class="product-card">
			<div class="galery">
				<div class="product-gallery-main-swiper">
					<ul class="swiper-wrapper">
						<?php foreach ($product_gallery_ids as $product_gallery_id): ?>
							<li class="swiper-slide">
								<img src="<?php echo wp_get_attachment_url($product_gallery_id); ?>" alt="">
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="product-gallery-thumb-swiper">
					<ul class="swiper-wrapper">
						<?php foreach ($product_gallery_ids as $product_gallery_id): ?>
							<li class="swiper-slide">
								<img src="<?php echo wp_get_attachment_url($product_gallery_id); ?>" alt="">
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
	                </div>
                <div class="info">
                    <div class="product-name">
                        <?php woocommerce_template_single_title(); ?>
                        <p><?php echo $stock_res ?></p>
                    </div>
                    <div class="col-1">
                        <div class="product-colors">
                            <p>Колір</p>
                            <div class="color-row">
                                <div class="color-circle" style="background-color: #000;"></div>
                                <div class="color-circle" style="background-color: var('--bg-white');"></div>
                            </div>
                        </div>
							<?php woocommerce_product_additional_information_tab(); ?>
							<?php woocommerce_template_single_price(); ?>
                        <div class="buttons">
                            <button class="buy">Купити</button>
                            <button class="chart">В кошик <img src="assets/images/додати в корзину (1).png" alt=""></button>
                        </div>
                    </div>
                    <div class="col-2">
                        <p>Відгуки</p>
                        <div class="review">
                            <h2 class="username">Олексій</h2><h2 class="rating">5.0</h2>
                            <p class="text">Дякую за павербанк! Швидко заряджає, зручно, що можна заряджати кілька пристроїв разом</p>
                        </div>
                        <div class="review">
                            <h2 class="username">Наталія</h2><h2 class="rating">4.5</h2>
                            <p class="text">Павер класний, швидко заряджає, вистачає на кілька разів Окреме дякую, що все пояснили, підібрали, швидко оформили і відправили замовлення Рекомендую ваш магазин</p>
                        </div>
                        <a href=""><p class="review-all">Всі відгуки</p></a>
                    </div>
                </div>
            </div>


	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
