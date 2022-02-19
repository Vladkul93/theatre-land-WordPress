<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<main>
    <div class="main-box">
        <div class="main-bg">
            <div class="main-content">
                <div class="main-title">
                    <p id="about-theare"><span>о</span>театре</p>
                </div>
                <div class="main-about">
                    <div class="about-box__1">
                        <p class="about-title">Самый лучший театр СПБ</p>
                        <p class="about-text">Как свидетельствуют архивные документы, первое каменное здание
                            Большого театра начали возводить в 1775 году по проекту Антонио Ринальди. В
                            дальнейшем, после того как Ринальди упал с лесов и не мог лично наблюдать за ходом
                            работ, Екатерина II поручила немецкому театральному декоратору и архитектору Людвигу
                            Филиппу Тишбейну создать новый проект театра, который и был воплощён архитекторами
                            Ф. В. фон Бауром и М. А. Деденёвым. Открытие его состоялось в 1783 году, хотя,
                            основываясь на других свидетельствах, годом открытия можно считать 1784 год.</p>
                    </div>
                    <div class="about-box__2">
                        <p class="about-title">немного о цифрах</p>
                        <img class="about-img__1" src="<?php bloginfo('template_url'); ?>/assets/img/armchair.svg"
                            alt="armchair">
                        <p class="white"><span class="yelllow">1600</span>посадочный мест</p>
                        <img class="about-img__1" src="<?php bloginfo('template_url'); ?>/assets/img/theater-icon.svg"
                            alt="armchair">
                        <p class="white"><span class="yelllow">350</span>лет истории</p>
                    </div>
                    <div class="about-box__3">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/theatre.jpg" alt="theatre">
                    </div>
                </div>
            </div>
            <div class="main-gallery">
                <div class="main-title">
                    <p id="our-post"><span>наши</span>постановки</p>
                </div>
                <div class="popup-gallery">
                    <div class="slider">
                        <a href="<?php the_field('first-show') ?>" title="Оскар 2022">
                            <div class="slider-item "
                                style="background-image: url('<?php the_field('first-show') ?>');">
                                <div class="block-hover"></div>
                                <div class="img-search">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/search.png" alt="search">
                                </div>
                                <div class="img-title">
                                    <p><?php the_field('name_show1') ?></p>
                                </div>
                                <div class="img-about">
                                    <p><?php the_field('data-show1') ?></p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php the_field('second-show') ?>" title="Морской волк">
                            <div class="slider-item"
                                style="background-image: url('<?php the_field('second-show') ?>');">
                                <div class="block-hover"></div>
                                <div class="img-search">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/search.png" alt="search">
                                </div>
                                <div class="img-title">
                                    <p><?php the_field('name_show2') ?></p>
                                </div>
                                <div class="img-about">
                                    <p><?php the_field('data-show2') ?></p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php the_field('thirty-show') ?>" title="Золотой грамофон">
                            <div class="slider-item "
                                style="background-image: url('<?php the_field('thirty-show') ?>');">
                                <div class="block-hover"></div>
                                <div class="img-search">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/search.png" alt="search">
                                </div>
                                <div class="img-title">
                                    <p><?php the_field('name-show3') ?></p>
                                </div>
                                <div class="img-about">
                                    <p><?php the_field('data-show3') ?></p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php the_field('fortin-show') ?>" title="Щелкунчик">
                            <div class="slider-item"
                                style="background-image: url('<?php the_field('fortin-show') ?>');">
                                <div class="block-hover"></div>
                                <div class="img-search">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/search.png" alt="search">
                                </div>
                                <div class="img-title">
                                    <p><?php the_field('name-show4') ?></p>
                                </div>
                                <div class="img-about">
                                    <p><?php the_field('data-show4') ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="bacground-img">
                    <div class="theatre-year">
                        <p><?php the_field('first-year');  ?></p>
                        <p><?php the_field('second-year');  ?></p>
                        <p><?php the_field('third-year');  ?></p>
                    </div>
                    <div class="theatre-review">
                        <div class="rating">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/stars.svg" alt="star">
                        </div>
                        <div class="review-text">
                            <p>Лучший театр
                                по мнению театральных критиков Парижа</p>
                        </div>
                    </div>
                </div>
                <div class="main-title">
                    <p id="partner"><span>Партнёры</span>театра</p>
                </div>
                <div class="main-partner">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" alt="logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" alt="logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" alt="logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" alt="logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" alt="logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" alt="logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" alt="logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" alt="logo">
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>