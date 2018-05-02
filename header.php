<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>

<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">

            <img class="logo" <?php the_custom_logo(); ?>

            <span class="navbar-burger burger" data-target="navbarMenuHeroA">
    <span></span>
    <span></span>
    <span></span>
</span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
            <div class="navbar-end">
                <?php
                wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'depth' => 2,
                        'container' => false,
                        // 'items_wrap'     => 'div',
                        'menu_class' => 'navbar-menu',
                        'menu_id' => 'primary-menu',
                        'after' => "</div>",
                        'walker' => new Navwalker())
                );
                ?>
            </div>
</nav>
</div>
   