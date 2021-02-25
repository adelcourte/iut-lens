<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * @package WordPress
 *
 */
get_header();
?>

<?php
    get_bridge('theme')->{'_c_void_ContactHero@init'}();
    get_bridge('theme')->{'_c_void_ContactForm@init'}();
    get_bridge('theme')->{'_c_void_Banner@init'}();
?>

<?php
get_footer();