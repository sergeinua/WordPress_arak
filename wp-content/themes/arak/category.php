<?php get_header(); ?>

<?php
$cur_cat = get_category(get_query_var('cat'))->cat_ID;
$child_categories = get_categories(['parent' => $cur_cat]);
?>

<section class="cat relative">
    <div class="wrap">
        <div class="h2">Sports and hunting weapons</div>
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
                <li class="optic-item relative"><a href="#"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/optic1.jpg" alt=""><span>SCBA air fill adaptor kit</span></a>
                </li>
                <li class="optic-item relative"><a href="#"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/optic2.jpg" alt=""><span>AN/PVS-22 (International Orders Only)</span></a>
                </li>
                <li class="optic-item relative"><a href="#"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/optic3.jpg" alt=""><span>AN/PVS-7B/D</span></a>
                </li>
                <li class="optic-item relative"><a href="#"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/optic4.jpg" alt=""><span>UTAC 32iL</span></a>
                </li>
                <li class="optic-item relative"><a href="#"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/optic5.jpg" alt=""><span>UTAC 32iL</span></a>
                </li>
                <li class="optic-item relative"><a href="#"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/optic1.jpg" alt=""><span>Lens Cleaning Kit of scopes, rangefinders, laser sighting</span></a>
                </li>
                <li class="optic-item relative"><a href="#"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/optic2.jpg" alt=""><span>AN/PVS-22 (International Orders Only)</span></a>
                </li>
                <li class="optic-item relative"><a href="#"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/optic3.jpg" alt=""><span>teSCBA air fill adaptor kitxt</span></a>
                </li>
                <li class="optic-item relative"><a href="#"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/optic4.jpg" alt=""><span>AN/PVS-22 (International Orders Only)</span></a>
                </li>
                <li class="optic-item relative"><a href="#"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/optic5.jpg" alt=""><span>AN/PVS-7B/D</span></a>
                </li>
            </ul>
            <div class="pagination">
                <ul>
                    <li><a class="pagination-arrow" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a class="pagination-arrow" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>