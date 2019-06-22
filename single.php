<?php get_header(); ?>
        <div class='blog-contain'>
            <?php
            if(have_posts()):
                while ( have_posts() ) :
                    the_post(); ?>
                        <div><?php the_title('<h1>', '</h1>'); the_date('','<h3>', '</h3>');?></div>
                        <?php the_post_thumbnail('medium',array('style' => 'float:left;margin-right:1em;'));
                        the_content();
                endwhile; // End of the loop.
            else: ?>
                <!-- No posts found --><?php
            endif;
            ?>
        </div>
        <style>
            #page #content>h1{
                text-align: center;
            }
            #page #content .blog-contain{
                margin-left: 2vw;
                margin-right: 2vw;
            }
            /*SM*/
            @media (min-width: 575.98px) {
            }
            /* Small Landscape */
            @media (min-width: 767.98px) {
            }
            /* Medium Tablets */
            @media (min-width: 991.98px) {
                #page #content .blog-contain{
                margin-left: 1vw;
                margin-right: 1vw;
            }
            }
            /* Large Desktop & up */
            @media (min-width: 1199.98px) {
            }
        </style>
<?php
	get_footer();
?>
