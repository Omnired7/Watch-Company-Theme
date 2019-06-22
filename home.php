<?php get_header(); ?>
        <h1>- Articles -</h1>
        <div class='blogs-contain'>
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array('posts_per_page' => 6, 'paged' => $paged );
            query_posts($args);
            if(have_posts()):
                while ( have_posts() ) :
                    the_post(); ?>
                    <div class='post-item'>
                        <div><?php the_title('<h1>', '</h1>'); the_date('','<h3>', '</h3>');?></div>
                        <a href='<?php the_permalink(); ?>'>
                            <?php the_post_thumbnail('thumbnail',array('style' => 'width:100%;height:auto;')); ?>
                        </a>
                    </div><?php
                endwhile; // End of the loop.
                the_posts_pagination(array('mid_size'  => 3));
            else: ?>
                <!-- No posts found --><?php
            endif;
            ?>
        </div>
        <style>
            #page #content{
                background: unset;
            }
            #page #content>h1{
                text-align: center;
            }
            #page #content .blogs-contain{
                display: flex;
                flex-flow: row wrap;
                justify-content: space-around;
            }
            #page #content .blogs-contain .post-item{
                width: 90vw;
                max-width: 26em;
                height: auto;
            }
            #page #content .blogs-contain .post-item>div{
                display: block;
                position: absolute;
                background: #000;
                opacity: .65;
                width: 90vw;
                max-width: 26em;
                height: 90vw;
                max-height: 26em;
                color: #FFF;
                z-index: 1;
                pointer-events: none;
            }
            #page #content .blogs-contain .post-item>div h1{
                text-align: left;
                color: #FFF;
                padding: .5em;
                pointer-events: none;
            }
            #page #content .blogs-contain .post-item>div h3{
                position: absolute;
                right: 1em;
                bottom: 0em;
                color: #FFF;
            }
            #page #content .blogs-contain .pagination{
                display: block;
                width: 100%;
                font-size: 1.5em;
                margin-top: 1em;
            }
            #page #content .blogs-contain .pagination a{
                text-decoration: none;
            }
            /*SM*/
            @media (min-width: 575.98px) {
            }
            /* Small Landscape */
            @media (min-width: 767.98px) {
                #page #content .blogs-contain .post-item{
                    width: 45vw;
                }
                #page #content .blogs-contain .post-item>div{
                    width: 45vw;
                    height: 45vw;
                }
            }
            /* Medium Tablets */
            @media (min-width: 991.98px) {
                #page #content .blogs-contain .post-item{
                    width: 31vw;
                }
                #page #content .blogs-contain .post-item>div{
                    width: 31vw;
                    height: 31vw;
                }/
            }
            /* Large Desktop & up */
            @media (min-width: 1199.98px) {
            }
        </style>
<?php
	get_footer();
?>
