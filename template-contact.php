<?php
/*
Template Name: Contact
*/
get_header();
?>
    <!-- Début Contact -->
    <section class="contact">
        <div class="container">
            <h3 class="has-text-centered">Contact</h3>
            <p class="has-text-centered">Laissez moi un message , je vous répondrai dans les plus brefs délais </p>
            <div class="columns is-centered">

                <div class="column is-4 ">
                    <?php query_posts('page_id=10');
                        while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>

        </div>
    </section>
    <!-- // Fin Contact -->
    <?php  wp_footer();?>