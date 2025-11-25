<?php 
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
add_action('after_setup_theme', 'add_menu');
add_action ('after_setup_theme', function() {add_theme_support('woocommerce');});
function add_scripts_and_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('swiper', get_template_directory_uri().'/assets/css/swiper-bundle.min.css');
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array(), null, true);
    wp_enqueue_script('swiper', get_template_directory_uri().'/assets/js/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('mixitup', get_template_directory_uri().'/assets/js/mixitup.min.js', array(), null, true);
    wp_enqueue_script('mixitup-multifilter', get_template_directory_uri().'/assets/js/mixitup-multifilter.min.js', array(), null, true);
}

function add_Menu() {
    register_nav_menu('top', 'Категорії на головній сторінці');
    register_nav_menu('bottom', 'Футер');
}

// Walker, який підтягує картинку з SCF за object_id (терм ID)
class SCF_Menu_Image_Walker extends Walker_Nav_Menu {

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'swiper-slide'; // додаємо класс swiper-slide для Swiper
        $class_names = join( ' ', array_filter( $classes ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id_attr = $item->ID ? ' id="menu-item-'. esc_attr( $item->ID ) .'"' : '';

        $output .= '<li' . $id_attr . $class_names . '>';

        // Атрибути посилання
        $atts = array();
        $atts['href']   = ! empty( $item->url ) ? $item->url : '';
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $attributes .= ' ' . $attr . '="' . esc_attr( $value ) . '"';
            }
        }

        // =========================
        // Отримуємо зображення з SCF за терм ID
        // =========================
        $img_html = '';

        if ( ! empty( $item->object ) && $item->object === 'category' && ! empty( $item->object_id ) ) {
            $term_id = intval( $item->object_id );

            // Припускаємо, що поле називається 'category_img' і знаходиться в таксономії 'category'
            // SCF::get_term_meta( $term_id, 'category', 'category_img' )
            $scf_value = SCF::get_term_meta( $term_id, 'category', 'category_img' );

            if ( $scf_value ) {
                // Якщо SCF повертає ID вложення — використовуємо wp_get_attachment_image
                if ( is_numeric( $scf_value ) ) {
                    $img_html = wp_get_attachment_image( intval( $scf_value ), 'thumbnail', false, array( 'class' => 'menu-item-image', 'loading' => 'lazy' ) );
                } else {
                    // Якщо SCF повертає URL — виводимо тег <img>
                    $img_html = '<img src="' . esc_url( $scf_value ) . '" alt="" class="menu-item-image" loading="lazy">';
                }
            }
        }

        // Якщо не знайдено — можна підставити placeholder (необов'язково)
        // if ( ! $img_html ) { $img_html = '<span class="menu-item-placeholder"></span>'; }

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        // Виводимо <a> з картинкою перед текстом
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $img_html; // картинка тут
        $item_output .= '<span class="menu-item-text">'. esc_html( $title ) .'</span>';
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}

// ФУНКЦІЯ ДЛЯ РАХУВАННЯ СЕРЕДНЬОГО РЕЙТИНГУ ТОВАРУ
function get_average_product_rating() {
    $rows = CFS()->get('product_review'); // ТВОЄ поле LOOP у CFS

    if (empty($rows)) {
        return 0;
    }

    $sum = 0;
    $count = 0;

    foreach ($rows as $row) {
        $rating = $row['review_rating'];

        if ($rating !== '' && is_numeric($rating)) {
            $sum += floatval($rating);
            $count++;
        }
    }

    if ($count === 0) return 0;

    return round($sum / $count, 1);
}
require_once get_template_directory().'/incs/woocommerce-hooks.php';
?>
