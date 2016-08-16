<?php
/**
 * product page
 */

?>

<?php get_header(); ?>





<section class="product relative">
    <div class="wrap">
        <figure class="product-image">
            <img src="<?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
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

                <?php if(get_field('product_page_info_label', 'options')) : ?>

                    <div class="h3"><?= get_field('product_page_info_label', 'options'); ?></div>

                <?php endif; ?>

                <?php if (have_rows('files')) : ?>

                    <?php while (have_rows('files')) : the_row(); ?>

                        <?php if(get_sub_field('file')) : ?>

                            <?php
                            $pos = strripos(get_sub_field('file'), '/') + 1;
                            $file_name = substr(get_sub_field('file'), $pos, strlen(get_sub_field('file'))); ?>

                            <p class="download relative"><a href="file.xsl"><?= $file_name; ?></a></p>

                        <?php endif; ?>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>