<!-- 
 Template Name: Головна сторінка
 -->
<?php get_header(); ?>
    <!-- ХЕДЕР -->
     <div class="header">
        <div class="container">
            <div class="header-inner">
                <div class="categories-swiper">
                    <ul class="categories-list swiper-wrapper">
                        <li class="swiper-slide">
                            <a href="" class="category">
                                <img src="<?php echo wp_get_attachment_url(SCF::get_term_meta(3, 'category', 'category_img')); ?>" alt="">
                                <h2><?php echo get_category(3, ARRAY_A)['name']; ?></h2>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="" class="category">
                                <img src="<?php echo wp_get_attachment_url(SCF::get_term_meta(5, 'category', 'category_img')); ?>" alt="">
                                <h2><?php echo get_category(5, ARRAY_A)['name']; ?></h2>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="" class="category">
                                <img src="<?php echo wp_get_attachment_url(SCF::get_term_meta(7, 'category', 'category_img')); ?>" alt="">
                                <h2><?php echo get_category(7, ARRAY_A)['name']; ?></h2>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="" class="category">
                                <img src="<?php echo wp_get_attachment_url(SCF::get_term_meta(4, 'category', 'category_img')); ?>" alt="">
                                <h2><?php echo get_category(4, ARRAY_A)['name']; ?></h2>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="" class="category">
                                <img src="<?php echo wp_get_attachment_url(SCF::get_term_meta(6, 'category', 'category_img')); ?>" alt="">
                                <h2><?php echo get_category(6, ARRAY_A)['name']; ?></h2>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="" class="category">
                                <img src="<?php echo wp_get_attachment_url(SCF::get_term_meta(2, 'category', 'category_img')); ?>" alt="">
                                <h2><?php echo get_category(2, ARRAY_A)['name']; ?></h2>
                            </a>
                        </li class="swiper-slide">
                    </ul>
                </div>
                <div class="promotions">
                    <div class="promotions-swiper">
                        <ul class="promo-list swiper-wrapper">
                            <?php $loop = SCF::get('promo', 7);
                                foreach($loop as $row){?>
                                    <li class="promo swiper-slide">
                                        <div class="image">
                                            <img src="<?php echo wp_get_attachment_url($row['promo_img'] )?>" alt="">
                                        </div>
                                        <div class="text">
                                            <h3 class="title"><?php echo $row['promo_text']?></h3>
                                            <div class="price">
                                                <h1 class="non-promo-price"><?php echo $row['non_promo_price']?></h1>
                                                <h1 class="promo-price"><?php echo $row['promo_price']?></h1>
                                            </div>
                                            <div class="buttons">
                                                <a href="" class="buy"><?php echo $row['promo_btn_first']?></a>
                                                <a href="" class="catalog"><?php echo $row['promo_btn_second']?></a>
                                            </div>
                                        </div>
                                    </li>
                            <?php } ?>
                        </ul>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <!-- ХІТИ ПРОДАЖІВ -->
     <div class="top-sales">
        <div class="container">
            <h2>Топ продажів</h2>
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
    <!-- НОВИНКИ -->
     <div class="new-arrivals">
        <div class="container">
            <h2>Новинки</h2>
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
                                <p class="product-name"> Baseus Display Fast Charging Data Cable C to C 100W</p>
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