<footer>
    <div class="footer-content">
        <div class="main-title">
            <p><span>Cтать</span>меценатом</p>
        </div>
        <div class="footer-form">
            <div id="contact" class="fooer-contact">
                <a href="tel:<?php the_field('number-linkfooter'); ?>"><?php the_field('number-footer'); ?></a>
                <a href="tel:<?php the_field('number-linkfooter'); ?>"><?php the_field('number-footer'); ?></a>
                <p>info@theater.ru</p>
                <p>г.Санкт-петербург, Невский 140</p>
            </div>
            <div class="form-block">
                <form action="#" method="post">
                    <div class="block__input">
                        <div class="block__input-1">
                            <?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма"]') ?>
                            <?php echo do_shortcode('[contact-form-7 id="43" title="Контактная форма 2"]') ?>
                        </div>
                        <div class="block__input-2">
                            <?php echo do_shortcode('[contact-form-7 id="44" title="Контактная форма Компания"]') ?>
                            <?php echo do_shortcode('[contact-form-7 id="45" title="Контактная форма мейл"]') ?>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="46" title="Контактная форма Область"]') ?>
                    </div>
                    <div class="block__input-3">
                        <p>* Ваши данные не будут переданы третьим лицам, 100% вероятность. Конфиденциальность мы
                            гарантируем, и защищаем персональные данные согласно законку ФЗ-52.</p>
                        <?php echo do_shortcode('[contact-form-7 id="50" title="Контактная форма Телефое_copy"]') ?>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer-line">
            <p><?php the_field('year') ?></p>
            <p>Разработано d-e-n.ru</p>
        </div>
    </div>
</footer>
<a href="#header" class="top">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/arrowUp.svg" alt="up">
</a>
</div>
<?php wp_footer() ?>
</body>
</html>