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


        <form>
            <div class="name relative input">
                <span>Your name</span>
                <input type="text">
            </div>
            <div class="mail relative input">
                <span>Phone or e-mail</span>
                <input type="text">
            </div>
            <div class="subject relative input">
                <span>Subject</span>
                <input type="text">
            </div>
            <div class="message relative">
                <span>Message</span>
                <textarea rows="5" style="color:#fff"></textarea>
                <button class="relative" type="submit">Send</button>
            </div>
        </form>


    </div>
</section>






        <footer>
            <section class="reclamare">
                <p>made by<a href="#"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/rcl-logo.png" alt=""></a>with<i class="fa fa-heart-o"></i></p>
            </section>
        </footer>

        <?php wp_footer(); ?>

    </body>
</html>