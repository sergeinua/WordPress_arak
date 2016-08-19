<?php
/*
Template Name: Search Page
*/
?>

<?php
$q_str = trim($_GET['s']);
$q_str = strip_tags($q_str);
$q_str = htmlspecialchars($q_str);
$q_str = mysql_escape_string($q_str);
global $wpdb;
$results = $wpdb->get_results( "SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID FROM wp_posts  WHERE 1=1  AND (((wp_posts.post_title LIKE '%". $q_str ."%')
OR (wp_posts.post_excerpt LIKE '%". $q_str ."') OR (wp_posts.post_content LIKE '%". $q_str ."')))  AND wp_posts.post_type
IN ('post', 'page', 'attachment') AND (wp_posts.post_status = 'publish' OR wp_posts.post_author = 1 AND wp_posts.post_status = 'private')
ORDER BY wp_posts.post_title LIKE '%". $q_str ."' DESC, wp_posts.post_date DESC"); ?>

<?php get_header(); ?>

    <section class="search relative">
        <div class="wrap">
            <div class="h2">
                <?php if(qtrans_getLanguage() == 'ru') : ?>
                    Результаты поиска для "<?= $q_str; ?>"
                <?php else : ?>
                    Search result for "<?= $q_str; ?>"
                <?php endif; ?>
            </div>
            <div class="search-content content">

                <?php if(count($results) > 0 && $q_str != '') : ?>

                    <?php foreach($results as $post_item) : ?>

                        <?php
                        $item = get_post($post_item->ID);

                        if($pos_content = strpos($item->post_content, $q_str)) :
                            $result_content = mb_substr(qtranxf_use(qtrans_getLanguage(), $item->post_content,false), $pos_content, 20, 'UTF-8') . '...';
                        endif; ?>

                        <li class="search-image">
                            <a href="<?= get_post_permalink($item->ID); ?>">
                                <img src="<?= wp_get_attachment_url(get_post_thumbnail_id($item->ID)); ?>" alt="">
                                <p class="relative"><?= qtranxf_use(qtrans_getLanguage(), $item->post_title,false); ?>

                                    <?php if($result_content) : ?>

                                        <?= $result_content; ?>

                                    <?php endif; ?>

                                    <span class="where"><?= get_the_category($item->ID)[0]->name; ?></span>
                                </p>
                            </a>
                        </li>

                        <?php
                        unset($pos_content);
                        unset($result_content); ?>

                    <?php endforeach; ?>

                <?php else : ?>

                    <?php if(qtrans_getLanguage() == 'ru') : ?>

                        <p>По Вашему запросу ничего не найдено</p>

                    <?php else : ?>

                        <p>There're no results matching your query</p>

                    <?php endif; ?>

                <?php endif; ?>

            </div>
<!--            <div class="pagination">-->
<!--                <ul>-->
<!--                    <li><a class="pagination-arrow" href="#"><i class="fa fa-angle-left"></i></a></li>-->
<!--                    <li><a href="#">1</a></li>-->
<!--                    <li><a href="#">2</a></li>-->
<!--                    <li><a href="#">3</a></li>-->
<!--                    <li><a href="#">4</a></li>-->
<!--                    <li><a class="pagination-arrow" href="#"><i class="fa fa-angle-right"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
        </div>
    </section>

<?php get_footer(); ?>