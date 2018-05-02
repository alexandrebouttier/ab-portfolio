<?php
/*
Template Name: Portfolio
*/

get_header();

?>
    <!-- Début Portfolio  -->

    <section class="portfolio">
        <div class="container">
            <h3 class="has-text-centered">Portfolio</h3>

            <div class="columns">
                    <div class="container-items">
                <?php 
                $the_query = new WP_Query('category_name=Portfolio&showposts=15&orderby=ASC');
                while ($the_query->have_posts()) : 
                $the_query->the_post();
                ?>
                <div style="margin: 10px;"class="column">

                    <div class="items">
                        <a href="https://github.com/alexandrebouttier/calculjs-Electron" target="_blank">
                            <img <?php the_post_thumbnail();?>
                            </>
                        </a>
                        <p>
                            <?php the_content(); ?>
                        </p>
                        <div class="tags is-centered">
                            <span class="tag is-info">HTML/CSS</span>
                            <span class="tag is-info">JQUERY</span>
                            <span class="tag is-info">ELECTRON</span>
                        </div>
                        <!-- Début statut  -->

                        <div class="statut tags is-centered">
                            <div class="field is-grouped is-grouped-multiline">
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-light">
                                            <span class="icon has-text-info">
                                                <i class="fas fa-info-circle"></i>
                                            </span>Statut</span>
                                        <span class="tag is-primary">Terminé</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // Fin statut  -->

                    </div>
                     <!-- // item  -->
                </div>
                <?php endwhile;?>
            </div>
            </div>
            <!-- // Fin columns  -->
        </div>
    </section>
    <!-- // Fin Portfolio  -->

    
<?php get_footer();?>