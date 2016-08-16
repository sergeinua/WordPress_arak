<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>Title</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="wrap relative"><a class="logo" href="index.html"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/logo.svg" alt=""></a>
        <ul class="menu">

                <?= wp_nav_menu([
                    'menu' => 'main',
                    'menu_class' => 'nav',
                    'container' => false,
                ]); ?>
            <!--
            <li class="drop-down"><a href="product.html">Catalog</a>
                <ul class="sub-menu">
                    <li><a href="#">Auto</a>
                    </li>
                    <li><a href="#">Gun clean</a>
                    </li>
                    <li><a href="#">Unlethal weapon</a>
                    </li>
                    <li><a href="#">Sport-hunting weapons</a>
                    </li>
                </ul>
            </li>
            <li><a href="blog.html">Blog</a>
            </li>
            <li><a href="cat.html">About us</a>
            </li>
            <li><a href="contacts.html">Contacts</a>
            </li>
            <li><a class="relatve lang-link" href="#">ru</a></li>
            <li><a class="active" href="#">en</a></li>
            -->
        </ul>
        <form class="header-form"><i class="fa fa-search"></i>
            <input class="header-input" type="text" placeholder="Enter UR text">
        </form>
        <div class="toggle-menu">
            <div class="sw-topper"></div>
            <div class="sw-bottom"></div>
            <div class="sw-footer"></div>
        </div>
    </div>
</header>