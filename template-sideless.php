<?php
/**
* Template Name: Sideless Page
*
* @package WordPress
* @subpackage antiquewatch
* @since Antique Watch Co. 1.0
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
<style>
    #content{
        display: block !important;
        padding-left: 1em;
        padding-right: 1em;
    }
</style>