<?php get_header(); ?>

    <section class="big-background relative">
        <div class="wrap">
            <div class="h2 absolute">Security equipment</div>
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
            <div class="h2 relative">Last goods</div>
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
                <div class="h2">About us</div>
                <p>“ARAK. Outdoor Safety” is widely regarded by experts as the most advanced gun cleaning system in the
                    world. It offers many gun cleaning advancements and refinements developed for the military and
                    competitive marksmen and hunters. By cleaning Breech-to-Muzzle® (the direction the bullet moves
                    through the firearm), dirt and fouling is pulled out the muzzle, not pushed back into the action
                    gumming the trigger or causing malfunctions. Because the slotted tip with the patch is pulled
                    through the chamber, it doesn’t compress the patch against the side of the rod. Conventional rods
                    will jam off-center, scraping the rifling in the process, and potentially ruining the bore. The Otis
                    Memory-Flex® rod allows you to tightly form the patch to the bore, actually cleaning it rather than
                    just moving the dirt around. The tight patch is formed by being pulled through the chamber,
                    compressing in the throat, and cleans the leading edge of the rifling; the edge that actually bears
                    the stress of the rotating bullet. For shotguns, custom soft durometer plugs, (patch savers®) force
                    the patch to the full diameter of the bore, cleaning the chamber, forcing cone, bore and choke --
                    all without having to disassemble the gun!</p>
            </div>
        </div>
    </section>
    <section class="news relative">
        <div class="wrap">
            <div class="h2">news</div>
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
    <section class="contacts relative">
        <div class="wrap">
            <div class="h2">Contact us</div>
            <div class="contacts-box">
                <ul class="ceo-contacts">
                    <li class="name">Vasym Tadzhi</li>
                    <li class="pos">Ceo</li>
                    <li class="live">Kiev, Ukraine</li>
                    <li class="mail">e-mail: vt@arak.com.ua</li>
                    <li class="mob">mob.: +380662826933</li>
                </ul>
                <ul class="ceo-contacts">
                    <li class="name">Dale Tronsen</li>
                    <li class="pos">Representative</li>
                    <li class="live">tel.: +1 (509) 7159855</li>
                    <li class="mail">e-mail: daletron@hotmail.com</li>
                    <li class="mob">www.arak.com.ua</li>
                </ul>
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

<?php get_footer(); ?>