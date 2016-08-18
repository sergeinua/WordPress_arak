<?php get_header(); ?>

<?php
$cur_cat = get_category(get_query_var('cat'))->cat_ID;
$child_categories = get_categories(['parent' => $cur_cat, 'hide_empty' => false]);
global $query_string;
$posts = query_posts($query_string . '&cat=' . $cur_cat);
global $wp_query;
$big = 999999999;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

    <?php if($cur_cat == '7') : ?>

        <section class="blog news relative">
            <div class="wrap">
                <div class="h2"><?= get_category($cur_cat)->name; ?></div>
                <ul class="news-container">

                    <?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post();?>

                            <li class="image">
                                <a href="<?= get_post_permalink($post->ID); ?>">
                                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
                                    <p class="relative">
                                        <?= $post->post_title; ?>
                                        <span class="date"><?= date('Y-m-d', strtotime($post->post_date)); ?></span>
                                    </p>
                                </a>
                            </li>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </ul>
                <div class="pagination">

                    <?php  draw_pagination(paginate_links( array(
                        'prev_next'=>true,
                        'prev_text' => '<span aria-hidden="true"><i class="fa fa-angle-left"></i></span>',
                        'next_text' => '<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>',
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, $paged ),
                        'type'  =>'array',
                        'total' => $wp_query->max_num_pages
                    ) ));  ?>

                </div>
            </div>
        </section>

    <?php else : ?>

        <section class="cat relative">
            <div class="wrap">
                <div class="h2"><?= get_category($cur_cat)->name; ?></div>
                <ul class="item-container">

                    <?php foreach($child_categories as $category) : ?>

                        <li><a href="<?= get_category_link($category->cat_ID); ?>"><?= $category->cat_name; ?></a></li>

                    <?php endforeach; ?>

                </ul>
            </div>
        </section>
        <section class="optic-cat relative">
            <section class="subcat relative">
                <div class="wrap">
                    <ul>

                        <?php if ( have_posts() ) : ?>

                            <?php while ( have_posts() ) : the_post();?>

                                <li class="optic-item relative">
                                    <a href="<?= get_post_permalink($post->ID); ?>">
                                        <img src="<?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
                                        <span><?= $post->post_title; ?></span>
                                    </a>
                                </li>

                            <?php endwhile; ?>

                        <?php endif; ?>

                    </ul>
                    <div class="pagination">
                        <div class="pagination-block" style="text-align: center">

                            <?php  draw_pagination(paginate_links( array(
                                'prev_next'=>true,
                                'prev_text' => '<span aria-hidden="true"><i class="fa fa-angle-left"></i></span>',
                                'next_text' => '<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>',
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, $paged ),
                                'type'  =>'array',
                                'total' => $wp_query->max_num_pages
                            ) ));  ?>

                        </div>
                    </div>
                </div>
            </section>
        </section>

    <?php endif; ?>

<?php get_footer(); ?>