<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="main">
    <section class="hero-section">
        <?php get_template_part( 'global-templates/hero' ); ?>

    </section>
    <section class="call-to-action-section">
        <h2 class="call-to-action-section-title h2-home-page">HOW LOVEFIT WORKS</h2>
        <div class="under-title-text">Fall in love with Fitness</div>
    
        <div class="call-to-action-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/call-to-action-section-img.jpg)">
            <!-- <h2 class="call-to-action-section-title">HOW LOVEFIT WORKS</h2> -->
            
            <p class="call-to-action-container-description container">Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos.</p>
            <div class="cards-container container">
                <div class="call-to-action-card">
                    <div class="icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_2.svg" alt="icon-2">
                    </div>
                    <h4 class="card-title">Videos Workout</h4>
                    <p class="card-description">Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos.</p>
                </div>
                <div class="call-to-action-card">
                    <div class="icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_1.svg" alt="icon-2">
                    </div>
                    <h4 class="card-title">Expert Trainers</h4>
                    <p class="card-description">Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos.</p>
                </div>
                <div class="call-to-action-card">
                    <div class="icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_3.svg" alt="icon-2">
                    </div>
                    <h4 class="card-title">Play Everywhere</h4>
                    <p class="card-description">Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="list-items container">
        <h2 class="h2-home-page">LATEST WORKOUT</h2>
        <div class="under-title-text">Fall in love with Fitness</div>
        <?php get_template_part( 'loop-templates/content-loop-books' ); ?>
    </section>
    <section class="testimonials-section" >
        
        <div class="testimonials-container">
            <?php get_template_part( 'global-templates/testimonial-section' ); ?>
            <!-- <div class="bullets-container-first"> -->
        </div>
        
    </section>
    <div class="subscribe-form-container">
        <?php get_template_part( 'global-templates/subscribe-section' ); ?>    
    </div>
</div>
<?php
get_footer();
