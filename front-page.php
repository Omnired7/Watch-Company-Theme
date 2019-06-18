
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
?>
<div class='first-banner'>
    <div class='watch-background' tittle="Image of Restored Antique Watch">
        <h3>ISN'T IT TIME YOU BOUGHT</h3>
        <h1>A WATCH?</h1>
        <img src='<?php echo get_template_directory_uri(); ?>/img/watch-banner-buttonsx481x35.png' alt='Image of Button to Antique Watch Store'/>
    </div>
</div>
<div class='second-banner' title="Image of Antique Watch with ">
    <div class='watch-background' tittle="Image of Antique Watch">
        <h2>HAVE A WATCH THAT’S NOT WORKING CORRECTLY?</h2>
        <p>
            The Antique Watch Company® specializes in the restoration of “can’t be fixed” and complicated antique pocket watches and vintage wrist watches including 
            Hamilton, Elgin, Illinois, Omega, Longines, Patek Phillippe, Rolex, and Vacheron Constantin, just to name a few.
            All work is guaranteed, and estimates are given free of charge.
        </p>
    </div>
</div>
<div class='third-banner'>
    <div class='watch-guarante'>
        
    </div>
</div>
<style>
    /* XS */
    #page #content{
        background:url('<?php echo get_template_directory_uri(); ?>/img/antique-watch-patternx213.jpg');
        background-repeat: repeat;
        background-size: 25% auto;
    }
    #page #content .first-banner{
        background: #FFF;
    }
    #page #content .first-banner .watch-background{
        background:url('<?php echo get_template_directory_uri(); ?>/img/Watch-Banner-Backgroundx688x452.jpg');
        background-repeat: no-repeat;
        height: 14em;
        display: flex;
        flex-flow: column wrap;
        justify-content: space-around;
        background-position: center;
        background-size: 100% auto;
        text-align: center;
    }
    #page #content .first-banner .watch-background h3{
            font-size: 1.5em;
            margin: unset;
            margin-left: 1vw;
    }
    #page #content .first-banner .watch-background h1{
        font-size: 3em;
        margin: unset;
        margin-left: 1vw;
    }
    #page #content .first-banner .watch-background img{
            width: 100%;
            height: auto;
    }
    #page #content .second-banner{
            background: #000;
    }
    #page #content .second-banner .watch-background{
        height: 28em;
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
    }
    #page #content .second-banner .watch-background h2{ 
        color: #FFF;
        margin-left: 1em;
        margin-right: 1em;
    }
    #page #content .second-banner .watch-background p{
        color: #FFF;
        margin-left: 1.5em;
        margin-right: 1.5em;
    }
    /*SM*/
    @media (min-width: 575.98px) {
    }
    /* Small Landscape */
    @media (min-width: 767.98px) {
        #page #content .first-banner .watch-background img{
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
        }
    }
    /* Medium Tablets */
    @media (min-width: 991.98px) {
        #page #content p{
            margin: unset;
        }
        #page #content .first-banner{
            height: 22em;
        }
        #page #content .first-banner .watch-background{
            height: 22em;
            justify-content: center;
            background-position: right;
            background-size: 50% auto;
            text-align: left;
        }
        #page #content .first-banner .watch-background h3{
            font-size: 3em;
            margin: unset;
            margin-left: 2vw;
        }
        #page #content .first-banner .watch-background h1{
            font-size: 6em;
            margin: unset;
            margin-left: 2vw;
        }
        #page #content .first-banner .watch-background img{
            width: 50%;
            height: auto;
            margin-left: 2vw;
        }
        #page #content .second-banner .watch-background{
            height: 26em;
            background: url('<?php echo get_template_directory_uri(); ?>/img/hand-watch-bannerx688x454.jpg');
            background-repeat: no-repeat;
            justify-content: center;
            align-items: flex-end;
            background-position: left;
            background-size: 50% auto;
            text-align: left;
        }
        #page #content .second-banner .watch-background h2{ 
            display: block;
            width: 50%;
            margin-left: unset;
            margin-right: 2vw;
        }
        #page #content .second-banner .watch-background p{
            display: block;
            width: 50%;
            margin-left: unset;
            margin-right: 2vw;
        }
    }
    /* Large Desktop & up */
    @media (min-width: 1199.98px) {
    }
</style>
<?php
    get_footer();
?>