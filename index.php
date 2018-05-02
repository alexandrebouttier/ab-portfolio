<?php get_header();?>

<!-- Début jumbotron -->
<section class="hero is-bold">

    <div class="hero-body">
        <div class="container has-text-left">
            <div id="particles-js"></div>
            <img class="hero-img" src="wp-content/themes/ab-portfolio/img/img_header.png" alt="image header">
            <h1 class="title">
                Alexandre Bouttier
            </h1>
            <h2 class="subtitle">
                <span class="has-text-info has-text-weight-bold">Développeur</span> front-end
            </h2>
            <div class="hero-btn">
                <a href="portfolio.html" class="button is-medium is-info">Voir portfolio</a>
                <a href="contact.html" class="button is-medium is-info is-outlined">Contact</a>
            </div>
        </div>
    </div>
</section>
<!-- // Fin jumbotron -->

<div class="container">
    <!-- Début intro  -->
    <section class="intro">
        <h3>Comment puis-je vous aider?</h3>
        <p class="has-text-centered">Je suis
            <span class="has-text-info has-text-weight-bold">Développeur</span> front-end junior.
            <br>J'ai commencé le développement web en autodidacte , puis j'ai effectué une formation de développeur web à la
            Code Académie de Rennes.
            <br>Aujourd'hui , je met à profit mes connaissances pour réaliser vos projets de sites internet.</p>
    </section>
    <!-- // Fin intro  -->

    <!-- Début services -->
    <section class="services">
        <div class="columns">
        <?php query_posts('p=26'); while (have_posts()) : the_post(); ?>
            <div class="column is-2 col-img">
                <img class="has-text-left" src="assets/img/creation_sites_internet_logo.png" alt="logo création sites internet">
            </div>
            <div class="column is-4">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
                <h4><?php the_thumbnail(); ?></h4>
            </div>
            <?php endwhile; ?>
            <div class="column is-2 col-img">
                <img class="has-text-left" src="assets/img/integration.png" alt="logo intégration web">
            </div>
            <div class="column is-4">
                <h4>Intégration</h4>
                <p>J'intègre vos maquettes graphiques en HTML/CSS/JS que vous me disposez au format PSD, tout en respectant
                    votre charte graphique.</p>
            </div>
        </div>

        <!--// fermeture columns  -->
        <div class="columns">
            <div class="column is-2 col-img">
                <img class="has-text-left" src="assets/img/responsive-logo.png" alt="logo responsive">
            </div>
            <div class="column is-4">
                <h4>Site responsive</h4>
                <p>J'intègre vos maquettes graphiques tout en respectant votre charte graphique, tout en le rendent compatible
                    sur tous types d'écrans.</p>
            </div>
            <div class="column is-2 col-img">
                <img class="has-text-left" src="assets/img/wordpress-logo.png" alt="logo Wordpress">
            </div>
            <div class="column is-4">
                <h4>Wordpress</h4>
                <p>Je vous propose une solution "clé en main" avec le CMS wordpress, pour vous faciliter l'administration de
                    votre site.</p>
            </div>
        </div>
        <!--// fermeture columns  -->
</div>
</section>
<!-- // Fin services  -->
</body>

</html>