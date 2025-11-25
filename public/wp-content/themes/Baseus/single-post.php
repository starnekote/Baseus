<!-- 
 Template Name: Сторінка товару
 -->
<?php get_header(); ?>
    <!-- СТОРІНКА ТОВАРУ -->
     <div class="product-page">
        <div class="container">
            <div class="path">
                <a href="<?php echo get_category_link(get_the_category()[1]->term_id); ?>"><p class="category"><?php echo get_the_category()[1]->name ?? ''; ?></p></a>
                <p class="product-name"><?php the_title(); ?></p>
            </div>
            <div class="product-card">
                <div class="galery">
                    <div class="product-gallery-main-swiper">
                        <ul class="swiper-wrapper">
                            <?php $loop = CFS()->get('product_galery');
                            foreach($loop as $row) {?>
                                <li class="swiper-slide">
                                    <img src="<?php echo $row['product_image']; ?>" alt="">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="product-gallery-thumb-swiper">
                        <ul class="swiper-wrapper">
                            <?php $loop = CFS()->get('product_galery');
                            foreach($loop as $row) {?>
                                <li class="swiper-slide">
                                    <img src="<?php echo $row['product_image']; ?>" alt="">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="info">
                    <div class="product-name">
                        <h2><?php the_title(); ?></h2>
                        <p><?php if(CFS()->get('product_available')) {
                            echo 'В наявності';
                            } else {echo 'Немає в наявності';}
                            ?></p>
                    </div>
                    <div class="col-1">
                        <div class="product-colors">
                            <p>Колір</p>
                            <div class="color-row">
                                <?php $loop = CFS()->get('product_colors');
                                foreach($loop as $row) {?>  
                                <div class="color-circle" style="background-color: <?php echo $row['product_color']; ?>;"></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="product-characteristics">
                            <p>Характеристики:</p>
                            <?php $loop = CFS()->get('product_char');
                            foreach($loop as $row) {?>                              
                                <div class="char">
                                    <p class="tag"><?php echo $row['char_key']; ?></p>
                                    <p class="value"><?php echo $row['char_mean']; ?></p>
                                </div>
                            <? } ?>
                        </div>
                        <div class="price">
                            <h1 class="non-promo-price"><?php echo CFS()->get('non_promo_price'); ?></h1>
                            <h1 class="promo-price"><?php echo CFS()->get('promo_price'); ?></h1>
                        </div>
                        <div class="buttons">
                            <button class="buy">Купити</button>
                            <button class="chart">В кошик <img src="assets/images/додати в корзину (1).png" alt=""></button>
                        </div>
                    </div>
                    <div class="col-2">
                        <p>Відгуки</p>
                            <?php $loop = CFS()->get('product_review');
                            foreach($loop as $row) {?> 
                                <div class="review">
                                    <h2 class="username"><?php echo $row['review_name']; ?></h2><h2 class="rating"><?php echo $row['review_rating']; ?></h2>
                                    <p class="text"><?php echo $row['review_text']; ?></p>
                                </div>
                            <?php } ?>
                        <a href=""><p class="review-all">Всі відгуки</p></a>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <!-- ХІТИ ПРОДАЖІВ -->
     <div class="top-sales">
        <div class="container">
            <h2>З цим товаром часто обирають:</h2>
            <div class="product-swiper">
                <ul class="product-list swiper-wrapper">
                    <li class="swiper-slide">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/павер 20в 1.png" alt="">
                                <img class="image-reserve" src="assets/images/IMG_3589 1.png" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">Baseus Power Bank 20000mAh, 20W</p>
                                <div class="rating">
                                    <h2>5.0</h2>
                                    <img src="assets/images/Star 1.png" alt="">
                                </div>
                                <div class="price">
                                    <p class="non-promo-price">2200</p>
                                    <h1 class="promo-price">1800</h1>
                                </div>
                                <img src="assets/images/додати в корзину.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/IMG_3917.png" alt="">
                                <img class="image-reserve" src="assets/images/IMG_3979.jpg" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">Baseus Blade Digital Display 20000 mAh PD 100W</p>
                                <div class="rating">
                                    <h2>4.9</h2>
                                    <img src="assets/images/Star 1.png" alt="">
                                </div>
                                <div class="price">
                                    <p class="non-promo-price"></p>
                                    <h1 class="promo-price">3000</h1>
                                </div>
                                <img src="assets/images/додати в корзину.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/IMG_3929.png" alt="">
                                <img class="image-reserve" src="assets/images/IMG_3971.png" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">Baseus Magnetic Wireless Charging 20W на 10000mAh</p>
                                <div class="rating">
                                    <h2>4.5</h2>
                                    <img src="assets/images/Star 1.png" alt="">
                                </div>
                                <div class="price">
                                    <p class="non-promo-price">2000</p>
                                    <h1 class="promo-price">1400</h1>
                                </div>
                                <img src="assets/images/додати в корзину.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/IMG_3926.jpg" alt="">
                                <img class="image-reserve" src="assets/images/IMG_4031.png" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">Baseus Display Fast Charging Data Cable C to C 100W</p>
                                <div class="rating">
                                    <h2>5.0</h2>
                                    <img src="assets/images/Star 1.png" alt="">
                                </div>
                                <div class="price">
                                    <p class="non-promo-price"></p>
                                    <h1 class="promo-price">500</h1>
                                </div>
                                <img src="assets/images/додати в корзину.png" alt="">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
     </div>
<?php get_footer(); ?>