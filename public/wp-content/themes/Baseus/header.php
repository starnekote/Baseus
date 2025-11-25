<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"> -->
    <title>Baseusua</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- МЕНЮ -->
    <div class="menu">
        <div class="container">
            <div class="menu-inner">
                <a href="<?php echo home_url(); ?>">
                    <div class="logo">
                        <h1>Baseus.ua</h1>
                        <h3>based on user</h3>
                    </div> 
                </a>
                <div class="right">
                    <div class="search">
                        <input type="text" id="search" placeholder="Пошук">
                        <img src="<?php echo wp_get_attachment_url(SCF::get('loop_icon', 58))?>" alt="">
                    </div>
                    <span class="icons">
                        <a href="" class="account"><img src="<?php echo wp_get_attachment_url(SCF::get('account_icon', 58))?>" alt=""></a>
                        <a href="" class="chart"><img src="<?php echo wp_get_attachment_url(SCF::get('court_icon', 58))?>" alt=""></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <img class="contact contact-yellow active" src="<?php echo wp_get_attachment_url(SCF::get('contact_icon_light', 58))?>" alt="">
    <img class="contact contact-black" src="<?php echo wp_get_attachment_url(SCF::get('contact_icon_black', 58))?>" alt="">