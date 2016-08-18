<?php get_header(); ?>

<?php if($post->ID != '13') : ?>

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

<?php endif; ?>

<?php get_footer(); ?>