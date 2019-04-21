
<?php
/**
 * Front Page (home page)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package antuqiuewatchco
 */
    get_header();
    if (have_posts()){
        while (have_posts()){
            the_post();
            the_content();
        }
    }
    get_footer();
?>