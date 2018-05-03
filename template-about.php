<?php
/*
Template Name: About
*/
get_header();
?>

<!-- Début A propos -->
    <section class="apropos">
        <div class="container">
            <h3 class="has-text-centered">A-propos</h3>

            <div class="columns">
                <div class="column is-6 has-text-centered">
                    <img class="photo" src="<?php the_field('photo');?>" alt="alexandre bouttier photo">
                </div>
                <div class="column is-6 has-text-centered">
                    <div class="bloc_presentation">
                        <p><?php the_field('presentation');?></p>
                    </div>

                </div>
                <!-- // Fin columns -->
            </div>

            <div class="columns">
                <div class="column is-6">
                    <h4>Expériences</h4>
                    <div class="timeline">

                        <div class="timeline-item">
                            <div class="timeline-marker is-info"></div>
                            <div class="timeline-content">
                                <p class="heading">Mai 2017-Janvier 2018</p>
                                <p>Code Académie (Rennes) - Formation développeur logiciel</p>

                            </div>
                        </div>
                        <!-- // 
                        <div class="timeline-item">
                            <div class="timeline-marker is-warning is-image is-32x32">
                                <img src="http://bulma.io/images/placeholders/32x32.png">
                            </div>
                            <div class="timeline-content">
                                <p class="heading">February 2016</p>
                                <p>Timeline content - Can include any HTML element</p>
                            </div>
                        </div>
                        <header class="timeline-header">
                            <span class="tag is-info">2017</span>
                        </header>
                        <div class="timeline-item">
                            <div class="timeline-marker is-danger is-icon">
                                <i class="fa fa-flag"></i>
                            </div>
                            <div class="timeline-content">
                                <p class="heading">March 2017</p>
                                <p>Timeline content - Can include any HTML element</p>
                            </div>
                        </div>
        
                        <header class="timeline-header">
                            <span class="tag is-medium is-info">End</span>
                        </header>
                        -->
                    </div>
                </div>
                <div class="column is-6">
                    <div class="competences">
                        <h4>Compétences</h4>
                        <div class="competence">
                            <span class="tag is-dark">HTML/CSS</span>
                            <progress class="progress is-info is-small" value="90" max="100"></progress>
                        </div>
                        <div class="competence">
                            <span class="tag is-dark">Bootstrap</span>
                            <progress class="progress is-info is-small" value="80" max="100"></progress>
                        </div>
                        <div class="competence">
                            <span class="tag is-dark">Javascript</span>
                            <progress class="progress is-info is-small" value="65" max="100"></progress>
                        </div>
                        <div class="competence">
                            <span class="tag is-dark">Jquery</span>
                            <progress class="progress is-info is-small " value="55" max="100"></progress>
                        </div>
                        <div class="competence">
                            <span class="tag is-dark">Wordpress</span>
                            <progress class="progress is-info is-small" value="85" max="100"></progress>
                        </div>
                        <div class="competence">
                            <span class="tag is-dark">PHP</span>
                            <progress class="progress is-info is-small" value="45" max="100"></progress>
                        </div>

                    </div>


                </div>

                <!-- // Fin columns -->
            </div>

            <!-- // Fin container -->
        </div>
    </section>
    <!-- // Fin A propos -->

    <?php get_footer();?>