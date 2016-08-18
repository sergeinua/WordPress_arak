<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title><?= wp_title(); ?></title>
    <?php wp_head(); ?>
    <style>
       .menu ul.nav{
           display: inline-block;
       }
    </style>
</head>
<body>
<header>
    <div class="wrap relative"><a class="logo" href="/"><img src="<?= get_template_directory_uri(); ?>/dist/src/img/logo.svg" alt=""></a>
        <ul class="menu">

                <?= wp_nav_menu([
                    'menu' => 'main',
                    'menu_class' => 'nav',
                    'container' => false,
                ]); ?>

                <?= wp_nav_menu([
                    'menu' => 'additional',
                    'menu_class' => 'nav',
                    'container' => false,
                ]); ?>

        </ul>

        <?php get_search_form(); ?>

        <div class="toggle-menu">
            <div class="sw-topper"></div>
            <div class="sw-bottom"></div>
            <div class="sw-footer"></div>
        </div>
    </div>
</header>