<?php get_header(); ?>
    <!-- КАТЕГОРІЇ -->
     <div class="categories">
        <div class="container">
            <div class="catalog-categories-swiper">
                <ul data-filter-group class="categories-list swiper-wrapper">
                    <li class="swiper-slide category">
                        <button type="button" data-filter="all">
                            <img src="assets/images/image 1.png" alt="">
                            <h2>Всі категорії</h2>
                        </button>
                    </li>
                    <li class="swiper-slide category">
                        <button type="button" data-filter=".category-a">
                            <img src="assets/images/image 2.png" alt="">
                            <h2>Шнури</h2>
                        </button>
                    </li>
                    <li class="swiper-slide category">
                        <button type="button" data-filter=".category-b">
                            <img src="assets/images/image 4.png" alt="">
                            <h2>Чохли</h2>
                        </button>
                    </li>
                    <li class="swiper-slide category">
                        <button type="button" data-filter=".category-c">
                            <img src="assets/images/image 5.png" alt="">
                            <h2>Аксесуари</h2>
                        </button>
                    </li>
                    <li class="swiper-slide category">
                        <button type="button" data-filter="">
                            <img src="assets/images/image 1.png" alt="">
                            <h2>Автотовари</h2>
                        </button>
                    </li>
                    <li class="swiper-slide category">
                        <button type="button" data-filter="">
                            <img src="assets/images/image 1.png" alt="">
                            <h2>Павербанки</h2>
                        </button>
                    </li>
                    <li class="swiper-slide category">
                        <button type="button" data-filter="">
                            <img src="assets/images/image 2.png" alt="">
                            <h2>Шнури</h2>
                        </button>
                    </li>
                    <li class="swiper-slide category">
                        <button type="button" data-filter="">
                            <img src="assets/images/image 4.png" alt="">
                            <h2>Чохли</h2>
                        </button>
                    </li>
                    <li class="swiper-slide category">
                        <button type="button" data-filter="">
                            <img src="assets/images/image 5.png" alt="">
                            <h2>Аксесуари</h2>
                        </button>
                    </li>
                    <li class="swiper-slide category">
                        <button type="button" data-filter="">
                            <img src="assets/images/image 1.png" alt="">
                            <h2>Автотовари</h2>
                        </button>
                    </li>
                </ul>
                <div class="gradient"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
     </div>
    <!-- СІТКА З ТОВАРАМИ -->
     <div class="grid-products">
        <div id="filter" class="filter">
            <img id="cross" src="assets/images/хрестик.png" alt="">
            <div class="price">
                <p>Ціна</p>
                <span class="range">
                    <p>від</p>
                    <input name="minSize" class="from" type="number">
                    <p>до</p>
                    <input name="maxSize" class="to" type="number">
                    <p>грн</p>
                </span>
                <button id="apply-filter" class="button">Застосувати</button>
            </div>
            <fieldset data-filter-group class="color">
                <p>Колір</p>
                <label class="color-picker">
                    <input type="checkbox" value=".color-black"/>
                    <div class="color-circle" style="background-color: var(--text-dark);"></div>
                    <h3 class="color-name">чорний</h3>
                </label>
                <label class="color-picker">
                    <input type="checkbox" value=".color-white"/>
                    <div class="color-circle" style="background-color: var(--bg-white);"></div>
                    <h3 class="color-name">білий</h3>
                </label>
            </fieldset>
            <fieldset data-filter-group class="length">
                <p>Довжина</p>
                <label class="length-picker">
                    <input type="checkbox" value=".threedm"/>
                    <div class="length-square"></div>
                    <h3 class="length-title">0.3 м</h3>
                </label>
                <label class="length-picker">
                    <input type="checkbox" value=".tendm"/>
                    <div class="length-square"></div>
                    <h3 class="length-title">1 м</h3>
                </label>
                <label class="length-picker">
                    <input type="checkbox" value=".twentydm"/>
                    <div class="length-square"></div>
                    <h3 class="length-title">2 м</h3>
                </label>
            </fieldset>
        </div>
        <div class="container">
            <div class="cat-name-sort-filter">
                <h2 class="cat-name"><?php single_cat_title(); ?></h2>
                <div class="sort-filter">
                    <div id="sort-btn" class="sort-btn">
                        <img src="assets/images/іконка сортування.png" alt="">
                        <p>Сортувати</p>
                    </div>
                    <div id="filter-btn" class="filter-btn">
                        <img src="assets/images/іконка фільтр.png" alt="">
                        <p>Фільтрувати</p>
                    </div>
                    <div id="sort" class="sort">
                        <button type="button" class="option" data-sort="rating:desc">За рейтингом</button>
                        <button type="button" class="option" data-sort="size:asc">Від дешевих до дорогих</button>
                        <button type="button" class="option" data-sort="size:desc">Від дорогих до дешевих</button>
                    </div>
                </div>
            </div>
            <div class="products">
                <ul class="product-list row mix-container" data-ref="container">
                    <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();
                            $all_category = get_the_category();
                            $res_name = '';
                            foreach($all_category as $category) {
                                if($category->term_id == 2) {
                                    $res_name = $category->slug;
                                }
                            }
                            ?>
                            <li class="mix category-a color-black threedm"  data-size="<?php echo CFS()->get('non_promo_price'); ?>" data-rating="<?php echo get_average_product_rating();?>">
                                <a href="<?php the_permalink(); ?>" class="product">
                                    <div class="image">
                                        <?php $loop = CFS()->get('product_galery');
                                            foreach($loop as $row){?>
                                                <img class="image-main" src="<?php echo $row['product_image'] ?>" alt="">
                                            <?php } ?>
                                    </div>
                                    <div class="info"> 
                                        <p class="product-name"><?php the_title(); ?></p>
                                        <div class="rating">
                                            <h2><?php echo get_average_product_rating();?></h2>
                                            <img src="<?php echo wp_get_attachment_url(SCF::get('star_icon', 58))?>" alt="">
                                        </div>
                                        <div class="price">
                                            <p class="non-promo-price"><?php echo CFS()->get('non_promo_price'); ?></p>
                                            <h1 class="promo-price"><?php echo CFS()->get('promo_price'); ?></h1>
                                        </div>
                                        <img src="<?php echo wp_get_attachment_url(SCF::get('product_court_icon', 58))?>" alt="">
                                    </div>
                                </a>
                            </li>
                        <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <?php the_posts_pagination(); ?>
        </div>
    </div>
<?php get_footer(); ?>