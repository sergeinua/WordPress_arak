<?php /* product & blog page -  depends upon current category */
/* current category id */
$cur_cat = get_the_category($post->ID)[0]->cat_ID;
/* image for the blog page header */
$image_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post_array->ID), 'large');
$image_url = $image_arr[0]; ?>

<?php get_header(); ?>

    <?php if($cur_cat == 7) : ?>

            <section class="single relative">
                <div class="wrap">
                    <div class="topic" style="background-image:url(<?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>)">
                        <div class="h2"><?= $post->post_title; ?></div>
                    </div>
                    <div class="content">

                        <?= $post->post_content; ?>

                    </div>
                </div>
            </section>

    <?php else : ?>

        <section class="product relative">
            <div class="wrap">
                <figure class="product-image">
                    <img src="<?= $image_url; ?>" alt="">
                </figure>
                <div class="product-content">

                    <?php if($post->post_title) : ?>

                        <div class="h2"><?= $post->post_title; ?></div>

                    <?php endif; ?>

                    <div class="text-container relative">

                        <?php if(get_field('post_price')) : ?>

                            <div class="h3 price"><?= get_field('post_price'); ?></div>

                        <?php endif; ?>

                        <?php if($post->post_content) : ?>

                            <?= $post->post_content; ?>

                        <?php endif; ?>

                        <?php if (have_rows('files')) : ?>

                            <?php if(get_field('product_page_info_label', 'options')) : ?>

                                <div class="h3"><?= get_field('product_page_info_label', 'options'); ?></div>

                            <?php endif; ?>

                            <?php while (have_rows('files')) : the_row(); ?>

                                <?php if(get_sub_field('file')) : ?>

                                    <?php /*the very fucking bullshit: getting file name*/
                                    $pos = strripos(get_sub_field('file'), '/') + 1;
                                    $file_name = substr(get_sub_field('file'), $pos, strlen(get_sub_field('file'))); ?>

                                    <p class="download relative"><a href="<?= get_sub_field('file'); ?>"><?= $file_name; ?></a></p>

                                <?php endif; ?>

                            <?php endwhile; ?>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </section>

    <?php endif; ?>

<?php get_footer(); ?>