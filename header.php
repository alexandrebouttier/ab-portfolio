<!DOCTYPE html>
<html xmlns="http://ogp.me/ns#" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta lang="fr" />
    <meta name="author" content="Alexandre Bouttier" / <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alexandre Bouttier Développeur front-end</title>
    <link rel="apple-touch-icon" type="image/png" href="wp-content/themes/ab-portfolio/img/favicon.png">
    <link rel="icon" type="image/png" href="wp-content/themes/ab-portfolio/img/favicon.png" />
    <meta name="description" content="Développeur front-end Rennes" />
    <meta name="keywords" content="développeur web, développeur front-end, front, front-end, HTML5, CSS3, Javascript" />
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46924947-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-46924947-3');
    </script>

    <!-- Facebook Open graph  -->
    <meta property="og:title" content="Alexandre Bouttier Développeur Front-End" />
    <meta property="og:site_name" content="Alexandre Bouttier Développeur Front-End" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:url" content="https://www.alexandrebouttier.fr" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.alexandrebouttier.fr/og-image.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="Logo du site web de Alexandre Bouttier" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:description" content="Portfolio de Alexandre Bouttier, développeur front-end junior à Rennes." />
    <meta property="fb:app_id" content="1902889856687684" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <nav class="navbar is-fixed-top " role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a href="/">
                    <img class="logo" <?php the_custom_logo(); ?>
                    </>
                </a>


                <button class="button navbar-burger" data-target="primary-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="navbar-end">
                <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => false,
            // 'items_wrap'     => 'div',
            'menu_class'        => 'navbar-menu',
            'menu_id'           => 'primary-menu',
            'walker'            => new Navwalker())
        );
        ?>
            </div>
        </div>
    </nav>