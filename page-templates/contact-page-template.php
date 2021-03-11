<?php
/**
 * Template Name: Contact Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<section class="contact-hero-section" >
    <h1>Contact Us</h1>
    <p class="under-title-text">Usu habeo equidem sanctus no ex melius labitur conceptam eos</p>
</section>
<section class="main-contant">
<div class="form-and-sidebar-wrapper container">
    <div class="form-wrapper">
        <h2>Get In Touch</h2>
        <?php echo do_shortcode('[contact-form-7 id="13" title="Contact form 1"]') ?>
        
    </div>
    <div class="sidebar-wrapper">
        <div class="contacts-wrapper">
            <h5>Contacts</h5>
            <p> <i class="fa fa-phone"></i>+359 000 000 000</p>
            <p><i class="fa fa-envelope"></i>email@email.com</p>
            <div class="social-icon-box">
                <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></i></a>
            </div>
        </div>
        <div class="address-wrapper">
            <h5>Address</h5>
            <p>Bulgaria</p>
            <p>1000, Sofia, street 16</p>
        </div>
    </div>
</div>
<div class="map-wrapper">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187673.30869582982!2d23.18386242391098!3d42.69534680269996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa8682cb317bf5%3A0x400a01269bf5e60!2z0KHQvtGE0LjRjw!5e0!3m2!1sbg!2sbg!4v1615363044621!5m2!1sbg!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>
</section>
<?php
get_footer();
?>
