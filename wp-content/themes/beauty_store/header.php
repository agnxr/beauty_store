<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body>

<div class="mainCenter">

<div class="topMenus">

    <div class="loginMenu">

        <ul>
            <li><img id="user" src="<?php echo get_stylesheet_directory_uri(); ?>/images/user.svg" alt="bag" height="25px" width="25px"></li>
            <li><a href="">Zarejestruj się</a></li>
            <li><a href="">Zaloguj</a></li>
            <li><a href="">Przypomnij hasło</a></li>
        </ul>

    </div>
    <div class="cartMenu">

        <ul>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bag.png" alt="bag" height="30px" width="30px"></li>
            <li><a href="http://localhost/beautystore/?page_id=5">Koszyk</a></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/heart.svg" alt="fav" height="30px" width="30px"></li>
            <li><a href="">Ulubione</a></li>
        </ul>

    </div>

</div>

<br>
<br>
<br>




<header class="mainMenu">

    <div class="mainNav">

        <div class="logoImg">

            <a href="http://localhost/beautystore/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" width="200"></a>

        </div>


    <?php
    wp_nav_menu(['menu' => 'main', 'menu_class' => 'nav']);
    ?>

        <div class="searchBox">
            <form action="<?php bloginfo('url'); ?>">
                <input type="text" name="s" placeholder="Szukaj produktów">
                <input type="hidden" name="post_type" value="product">
            </form>
        </div>

    </div>


</header>
