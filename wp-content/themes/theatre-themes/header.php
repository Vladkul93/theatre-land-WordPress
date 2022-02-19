<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title>Theatre</title>
</head>

<body>
    <div class="box">
        <header id="header">
            <div class="header__box">
                <div class="header__bg"
                    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/header.jpg');">
                    <div class="header__menu-bg">
                        <div class="header__menu-left">
                            <p>контактная информация</p>
                            <div class="verical__line"></div>
                            <div class="left__icon">
                                <a href="<?php the_field('instagram-link'); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/instagramactive.svg"
                                        alt="instagram">
                                </a>
                                <a href="<?php the_field('facebook-link'); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg"
                                        alt="facebook">
                                </a>
                                <a href="<?php the_field('vk-link'); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/VK.svg" alt="VK">
                                </a>
                                <a href="<?php the_field('youtube-link'); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/youtube.svg" alt="youtube">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header__container">
                        <div class="header__main">
                            <div class="header__nav">
                                <ul>
                                    <li>
                                        <a href="#">Главная</a>
                                    </li>
                                    <li>
                                        <a href="#about-theare">о театре</a>
                                    </li>
                                    <li>
                                        <a href="#our-post">Наши постановки</a>
                                    </li>
                                    <li>
                                        <a href="#partner">партнеры театра</a>
                                    </li>
                                    <li>
                                        <a href="#contact">контакты</a>
                                    </li>
                                </ul>
                                <div class="header__tel">
                                    <a
                                        href="tel:<?php the_field('number-linkheader'); ?>"><?php the_field('number-header'); ?></a>
                                </div>
                            </div>
                            <!-- burger -->
                            <span class="burger-menu" onclick="openNav()">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/burger.png" alt="burger">
                            </span>
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/close.svg" alt="close">
                                </a>
                                <ul>
                                    <li>
                                        <a href="#Start"> Главная</a>
                                    </li>
                                    <li>
                                        <a href="#about-theare">о театре</a>
                                    </li>
                                    <li>
                                        <a href="#our-post">Наши постановки</a>
                                    </li>
                                    <li>
                                        <a href="#partner">партнеры театра</a>
                                    </li>
                                    <li>
                                        <a href="#contact">контакты</a>
                                    </li>
                                </ul>
                                <div class="sidenav__icon">
                                    <a href="<?php the_field('facebook-link'); ?>">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/facebookicon.svg"
                                            alt="facebook">
                                    </a>
                                    <a href="<?php the_field('instagram-link'); ?>">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/instaicon.svg"
                                            alt="insta">
                                    </a>
                                    <a href="<?php the_field('vk-link'); ?>">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/vkicon.svg" alt="vk">
                                    </a>
                                    <a href="<?php the_field('youtube-link'); ?>">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/youtubeicon.svg"
                                            alt="youtub">
                                    </a>
                                </div>
                            </div>
                            <!-- burger -->
                            <div class="header__title">
                                <div class="header__text">
                                    <h1>Большой театр</h1>
                                    <p>Большо́й теа́тр — петербургский театр, существовавший в 1784—1886 годах, с 1886
                                        года — Петербургская консерватория. Первое постоянное в Санкт-Петербурге,
                                        крупнейшее в России и одно из крупнейших театральных зданий в Европе XVIII.</p>
                                    <div class="header-btn">
                                        <button>афиша</button>
                                    </div>
                                </div>
                                <div class="wrapper">
                                    <div class="image-slider swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php
                                            global $post;
                                            $myposts = get_posts([ 
                                                'numberposts' => -1,
                                            ]);
                                            if( $myposts ){
                                                foreach( $myposts as $post ){
                                                    setup_postdata( $post );
                                                    ?>
                                            <div class="swiper-slide">
                                                <div class="slider__img">
                                                    <?php the_post_thumbnail(
                                                        array(350, 490),
                                                        array(
                                                            'class' => 'slider__img'
                                                        )
                                                    ); ?>
                                                </div>
                                            </div>
                                            <?php  }} wp_reset_postdata(); 
                                            ?>
                                        </div>
                                        <div class="swiper-button-prev swip"> <img
                                                src="<?php bloginfo('template_url'); ?>/assets/img/arr.svg" alt="arr">
                                            <p> пред</p>
                                        </div>
                                        <div class="swiper-button-next swip r-active">
                                            <p>след</p><img src="<?php bloginfo('template_url'); ?>/assets/img/arr.svg"
                                                alt="arr">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>