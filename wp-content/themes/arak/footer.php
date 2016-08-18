<section class="contacts relative">
    <div class="wrap">

        <?php if(get_field('home_block_contact_us_title')) : ?>
            <div class="h2"><?= get_field('home_block_contact_us_title'); ?></div>
        <?php endif; ?>

        <div class="contacts-box">

            <?php if (have_rows('contact_block', 'options')) : ?>

                <?php while (have_rows('contact_block', 'options')) : the_row(); ?>

                    <ul class="ceo-contacts">

                        <?php if(get_sub_field('name')) : ?>

                            <li class="name"><?= get_sub_field('name'); ?></li>

                        <?php endif; ?>

                        <?php if(get_sub_field('position')) : ?>

                            <li class="pos"><?= get_sub_field('position'); ?></li>

                        <?php endif; ?>

                        <?php if(get_sub_field('place')) : ?>

                            <li class="live"><?= get_sub_field('place'); ?></li>

                        <?php endif; ?>

                        <?php if(get_sub_field('email')) : ?>

                            <li class="mail"><?= get_sub_field('email'); ?></li>

                        <?php endif; ?>

                        <?php if(get_sub_field('tel')) : ?>

                            <li class="mob"><?= get_sub_field('tel'); ?></li>

                        <?php endif; ?>

                    </ul>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>

        <?php if(qtrans_getLanguage() == 'en') : ?>

            <?= do_shortcode('[contact-form-7 id="19" title="Contact form EN"]'); ?>

        <?php endif; ?>

        <?php if(qtrans_getLanguage() == 'ru') : ?>

            <?= do_shortcode('[contact-form-7 id="56" title="Contact form RU"]'); ?>

        <?php endif; ?>

    </div>
</section>
        <footer>
            <section class="reclamare">
                <p>made by<a href="http://www.reclamare.ua"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/rcl-logo.png" alt=""></a>with<i class="fa fa-heart-o"></i></p>
            </section>
            <script>
                (function ($) {
                    $(document).ready(function(){
                        $('#menu-item-5').addClass('drop-down');
                    });
                }(jQuery));
            </script>
        </footer>

        <?php wp_footer(); ?>

    </body>
</html>