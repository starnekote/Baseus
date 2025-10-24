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
                <h2 class="cat-name">Всі категорії</h2>
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
                    <li class="mix category-a color-black threedm"  data-size="1800" data-rating="5.0">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/павер 20в 1.png" alt="">
                                <img class="image-reserve" src="assets/images/IMG_3589 1.png" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">1 Baseus Power Bank 20000mAh, 20W</p>
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
                    <li class="mix category-b color-black tendm" data-size="3000" data-rating="4.9">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/IMG_3917.png" alt="">
                                <img class="image-reserve" src="assets/images/IMG_3979.jpg" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">2 Baseus Blade Digital Display 20000 mAh PD 100W</p>
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
                    <li class="mix category-c color-black twentydm" data-size="1400" data-rating="4.5">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/IMG_3929.png" alt="">
                                <img class="image-reserve" src="assets/images/IMG_3971.png" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">3 Baseus Magnetic Wireless Charging 20W на 10000mAh</p>
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
                    <li class="mix category-a color-white threedm"  data-size="500" data-rating="5.0">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/IMG_3926.jpg" alt="">
                                <img class="image-reserve" src="assets/images/IMG_4031.png" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">4 Baseus Display Fast Charging Data Cable C to C 100W</p>
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
                    <li class="mix category-b color-white tendm" data-size="1700" data-rating="4.6">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/павер 20в 1.png" alt="">
                                <img class="image-reserve" src="assets/images/IMG_3589 1.png" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">5 Baseus Power Bank 20000mAh, 20W</p>
                                <div class="rating">
                                    <h2>4.6</h2>
                                    <img src="assets/images/Star 1.png" alt="">
                                </div>
                                <div class="price">
                                    <p class="non-promo-price">2200</p>
                                    <h1 class="promo-price">1700</h1>
                                </div>
                                <img src="assets/images/додати в корзину.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li class="mix category-c color-white twentydm" data-size="7000" data-rating="3.9">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/IMG_3917.png" alt="">
                                <img class="image-reserve" src="assets/images/IMG_3979.jpg" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">6 Baseus Blade Digital Display 20000 mAh PD 100W</p>
                                <div class="rating">
                                    <h2>3.9</h2>
                                    <img src="assets/images/Star 1.png" alt="">
                                </div>
                                <div class="price">
                                    <p class="non-promo-price"></p>
                                    <h1 class="promo-price">7000</h1>
                                </div>
                                <img src="assets/images/додати в корзину.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li class="mix category-a color-white threedm" data-size="2400" data-rating="4.4">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/IMG_3929.png" alt="">
                                <img class="image-reserve" src="assets/images/IMG_3971.png" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">7 Baseus Magnetic Wireless Charging 20W на 10000mAh</p>
                                <div class="rating">
                                    <h2>4.4</h2>
                                    <img src="assets/images/Star 1.png" alt="">
                                </div>
                                <div class="price">
                                    <p class="non-promo-price">2000</p>
                                    <h1 class="promo-price">2400</h1>
                                </div>
                                <img src="assets/images/додати в корзину.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li class="mix category-b color-black tendm" data-size="100" data-rating="3.2">
                        <a href="" class="product">
                            <div class="image">
                                <img class="image-main" src="assets/images/IMG_3926.jpg" alt="">
                                <img class="image-reserve" src="assets/images/IMG_4031.png" alt="">
                            </div>
                            <div class="info"> 
                                <p class="product-name">8 Baseus Display Fast Charging Data Cable C to C 100W</p>
                                <div class="rating">
                                    <h2>3.2</h2>
                                    <img src="assets/images/Star 1.png" alt="">
                                </div>
                                <div class="price">
                                    <p class="non-promo-price"></p>
                                    <h1 class="promo-price">100</h1>
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