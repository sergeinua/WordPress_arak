<?php get_header(); ?>

    <section class="big-background relative">
        <div class="wrap">
            <?php if(get_field('home_block_1_title')) : ?>
                <div class="h2 absolute"><?= get_field('home_block_1_title'); ?></div>
            <?php endif; ?>
            <a class="scroll absolute" href="#next-box">
                <div class="arrow-down">↓</div>
            </a>
        </div>
    </section>
    <section class="icons relative" id="next-box">
        <div class="wrap">
            <ul>

            <?php if (have_rows('categories')) : ?>

                <?php while (have_rows('categories')) : the_row(); ?>

                    <?php if(get_sub_field('title') == true) : ?>

                        <li class="icons-item relative">
                            <a href="<?= esc_url(get_category_link( get_sub_field('link'))); ?>">
                                <img src="<?= get_sub_field('img'); ?>" alt=""><span><?= get_sub_field('title'); ?></span>
                            </a>
                        </li>

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>

            </ul>
        </div>
    </section>
    <section class="slider relative">
        <div class="wrap">
            <?php if(get_field('home_latest_goods')) : ?>
                <div class="h2 relative"><?= get_field('home_latest_goods'); ?></div>
            <?php endif; ?>


            <ul class="slider-cotainer owl-carousel">
                <li class="item slider-item relative">
                    <a href="auto.html">
                        <img src="<?= get_template_directory_uri(); ?>/dist/src/img/slider-1.jpg" alt=""><span>AN/PVS-7B/D</span>
                    </a>
                </li>
                <li class="item slider-item relative">
                    <a href="gun.html">
                        <img src="<?= get_template_directory_uri(); ?>/dist/src/img/slider-2.jpg" alt=""><span>AN/PVS-22 (International Orders Only)</span>
                    </a>
                </li>
                <li class="item slider-item relative">
                    <a href="unlethal_gun.html">
                        <img src="<?= get_template_directory_uri(); ?>/dist/src/img/slider-3.jpg" alt=""><span>SCBA air fill adaptor kit</span>
                    </a>
                </li>
                <li class="item slider-item relative">
                    <a href="#">
                        <img src="<?= get_template_directory_uri(); ?>/dist/src/img/slider-4.jpg" alt=""><span>UTAC 32iL</span>
                    </a>
                </li>
                <li class="item slider-item relative">
                    <a href="#">
                        <img src="<?= get_template_directory_uri(); ?>/dist/src/img/slider-5.jpg" alt=""><span>UTAC 32iL</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="about relative">
        <div class="wrap">
            <div class="image-box"></div>
            <figure class="about-logo tablet">
                <img src="<?= get_template_directory_uri(); ?>/dist/src/img/arak-bottom.png" alt="">
            </figure>
            <figure class="about-logo phone">
                <img src="<?= get_template_directory_uri(); ?>/dist/src/img/arak-bottom.png" alt="">
            </figure>
            <div class="about-cotent relative">
                <?php if(get_field('home_about_us_title')) : ?>
                    <div class="h2"><?= get_field('home_about_us_title'); ?></div>
                <?php endif; ?>
                <?php if(get_field('home_about_us_text')) : ?>
                    <p><?= get_field('home_about_us_text'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="news relative">
        <div class="wrap">
            <?php if(get_field('home_block_news_title')) : ?>
                <div class="h2"><?= get_field('home_block_news_title'); ?></div>
            <?php endif; ?>
            <ul class="news-container">
                <li class="image">
                    <a href="#">
                        <img src="<?= get_template_directory_uri(); ?>/dist/src/img/news-img-1.jpg" alt="">
                        <p class="relative">“ARAK. Outdoor Safety” is widely regarded by experts as the most advanced
                            gun cleaning system in the world.</p>
                        <span class="date">26.07.2016</span>
                    </a>
                </li>
                <li class="image">
                    <a href="#">
                        <img src="<?= get_template_directory_uri(); ?>/dist/src/img/news-img-2.jpg" alt="">
                        <p class="relative">Widely regarded by experts as the most advanced gun cleaning system in the
                            world.</p>
                        <span class="date">26.07.2016</span>
                    </a>
                </li>
                <li class="image">
                    <a href="#">
                        <img src="<?= get_template_directory_uri(); ?>/dist/src/img/news-img-3.jpg" alt="">
                        <p class="relative">Experts as the most advanced gun cleaning system in the world.</p>
                        <span class="date">26.07.2016</span>
                    </a>
                </li>
                <li class="image">
                    <a href="#">
                        <img src="<?= get_template_directory_uri(); ?>/dist/src/img/news-img-4.jpg" alt="">
                        <p class="relative">Experts as the most advanced gun cleaning system in the world.</p>
                        <span class="date">26.07.2016</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

<?php get_footer(); ?>