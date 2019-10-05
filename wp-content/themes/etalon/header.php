<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icons/favicon.ico" type="image/x-icon">
    <title>Эталон</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="modal">
    <?php echo do_shortcode('[contact-form-7 id="114" title="Гостевой визит (промо)"]')?>
</div>
<header class="header">
    <div class="header--top">
        <a href="/" class="logo"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo"></a>
        <div class="search">
            <?php echo do_shortcode('[wcas-search-form]')?>
        </div>
        <div class="contacts">
            <a href="mailto:etalon_irk@mail.ru" class="mail">
                <span class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/icons/mail.png" alt="mail"></span>
                <span>etalon_irk@mail.ru</span>
            </a>
            <a href="tel:+73952707131" class="phone">
                <span class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/icons/phone.png" alt="phone"></span>
                <span>+7 (3952) 707-131</span>
            </a>
        </div>
        <div class="burger"><span></span><span></span><span></span></div>
    </div>
    <div class="header--middle">
        <div class="btn">Каталог</div>
    </div>
    <div class="header--bottom">
        <nav class="header_menu">
            <?php wp_nav_menu(array('theme_location'=>'Header', 'menu_class'=>'header_menu--list') );?>
        </nav>
    </div>
    <div class="header_mobile--main">
        <?php wp_nav_menu(array('theme_location'=>'mobile_main', 'menu_class'=>'mobile_menu--main') );?>
    </div>
    <div class="header_mobile--catalog">
        <div class="group">
            <div class="search">
                <input type="text" placeholder="Я ищу...">
            </div>
            <div class="header_mobile--catalog_close"><span></span><span></span></div>
        </div>
        <?php wp_nav_menu(array('theme_location'=>'mobile_catalog', 'menu_class'=>'mobile_menu--catalog') );?>
    </div>
</header>