<?php get_header(); ?>

<?php
//getting all post items of the category
$args = [
    'tax_query' => [
        [
            'taxonomy' => 'category',
            'terms' => 2,
            'include_children' => true
        ],
    ],
];

$posts = get_posts($args); ?>

    <section class="big-background relative" style="background-image: url(<?= get_field('home_block_1_background_img'); ?>)">
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

                <?php foreach($posts as $item) : ?>

                    <?php if(get_post_meta($item->ID, 'post_display_home', true)) : ?>

                        <li class="item slider-item relative">
                            <a href="<?= get_post_permalink($item->ID); ?>">
                                <img src="<?= wp_get_attachment_url(get_post_thumbnail_id($item->ID)); ?>" alt=""><span><?= $item->post_title; ?></span>
                            </a>
                        </li>

                    <?php endif; ?>

                <?php endforeach; ?>

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
            <div class="about-cotent relative" id="about_us">

                <?php if(get_field('home_about_us_title')) : ?>

                    <div class="h2"><?= get_field('home_about_us_title'); ?></div>

                <?php endif; ?>

                <?php if(get_field('home_about_us_text')) : ?>

                    <span><?= get_field('home_about_us_text'); ?></span>

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

                <?php
                $params = [
                    'tax_query' => [
                        [
                            'taxonomy' => 'category',
                            'terms' => 7,
                            'include_children' => true
                        ],
                    ],
                ];
                $blogs = get_posts($params); ?>

                <?php if($blogs) : ?>

                    <?php $i = 0; ?>

                    <?php foreach($blogs as $blog) : ?>

                        <?php if($i == 4) break; ?>

                        <li class="image">
                            <a href="<?= get_post_permalink($blog->ID); ?>">
                                <img src="<?= wp_get_attachment_url(get_post_thumbnail_id($blog->ID)); ?>" alt="">
                                <p class="relative">
                                    <?= $blog->post_title; ?>
                                    <span class="date"><?= date('Y-m-d', strtotime($blog->post_date)); ?></span>
                                </p>
                            </a>
                        </li>

                        <?php $i++; ?>

                    <?php endforeach; ?>

                <?php endif; ?>

            </ul>
        </div>
    </section>

<?php get_footer(); ?>