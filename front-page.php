
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
        <div>
            <a href='<?php echo get_home_url(); ?>/product-category/pocket-watches/'><button style='background: #617b49;color:#FFF;'>SHOP OUR POCKET WATCHES <img src='<?php echo get_template_directory_uri().'/img/accent-btn-gold.png';?>' height='100%' width='auto';></button></a>
            <a href='<?php echo get_home_url(); ?>/shop'><button style='background:rgba(255, 255, 255,.75);'> SEE OUR FULL STORE <img src='<?php echo get_template_directory_uri().'/img/accent-btn-gren.png';?>' height='100%' width='auto';></button></a>
        </div>
    </div>
</div>
<a href='repair/'>
    <div class='second-banner' title="Image of Antique Watch with ">
        <div class='watch-background' tittle="Image of Antique Watch">
            <h2>HAVE A WATCH THAT’S NOT WORKING CORRECTLY?</h2>
            <p>
                The Antique Watch Company Specializes in the restoration of "can't be fixed" and complicated antique pocket watches
                including Hamilton, Elgin, Illinois, Omega, Longines, Patek Philippe, Rolex, and Vacheron Constantin, just to name a few.
                All work is guaranteed, and estimates are given free of charge.
            </p>
        </div>
    </div>
</a>
<div class='third-banner'>
    <div class='watch-guarante'>
        <h2>
            OUR WATCHES ARE GUARANTEED TO
            RUN LIKE THE DAY THEY WERE MADE.
        </h2>
        <p>
            When you buy an antique watch, either wristwatch or pocket watch, from us at the Antique Watch Company®, 
            it’s like going into a store, 50…60…100+ years ago when that watch would have been sold new.
            All of our antique wrist and pocket watches are restored to “like new” condition, whenever possible, WITHOUT altering the authenticity, original appearance,
            or quality of the watch. 
        </p>
        <p>
            Unlike auction sites, or most of the other antique watch sites on the internet, our watches are fully guaranteed for 12 months from the date of purchase.
            Every antique watch has been thoroughly examined, cleaned, and serviced. With The Antique Watch Company®, you may rest assured that your antique watch will arrive in working order.
            Where else could you buy an 80 year old watch and be GUARANTEED it will run like it did the day it was made?
        </p>
        <span>
            Antique Pocket Watch and Wristwatch<br>
            Service ~ Repair ~ Restoration
        </span>
        <p>
            If you are an antique pocket watch or wristwatch collector, you know the importance of keeping your watches serviced.
            You know that keeping it clean and lubricated will keep parts from rusting and wearing out so your watch will run correctly indefinitely.
        </p>
        <p>
            Send us your antique watch for a cleaning and service (COA), repair, or for complete restoration.
            All mechanical work is done on our premises in our shop, by the store owner and watchmaker, Rusty Tuggle.
            Rusty has been repairing antique watches for over 35 years, and specializes in complicated pocket watch and wristwatch movements.
        </p>
        <p>
            Many watchmakers today, when servicing a watch, simply remove the movement from its case and place it, in its entirety, in a cleaning solution.
            This just loosens the accumulated dirt, and allows it to settle back into the movement; often causing more damage than good.
            When we service an antique watch, we completely disassemble it and run each part through an ultrasonic cleaning process.
            The watch is then reassembled, oiled, a new mainspring is installed, and it is adjusted for time.
            Finally, the case is cleaned and buffed and the watch movement is placed back into its case.
            The watch is then wound and placed in our safe for observation for several days.
        </p>
        <p>
            Because these watches are no longer being produced, parts are obviously very difficult to come by.
            We have been collecting watch movements (both functional and non-functional) and various other watch parts for over 35 years and pride ourselves in our inventory.
        </p>
        <p>
            The Antique Watch Company® will service or restore almost any quality mechanical watch.
        </p>
    </div>
</div>
<style>
    /* XS */
    #page #content{
        /* background:url('<?php echo get_template_directory_uri(); ?>/img/antique-watch-patternx213.jpg'); */
        background: transparent;
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
            font-family: Algerian;
            font-size: 1.5em;
            font-weight: 400;
            color: #4E5A66;
            opacity: .8;
            margin: unset;
            margin-left: 1vw;
    }
    #page #content .first-banner .watch-background h1{
        font-family: Algerian;
        font-size: 4em;
        font-weight: 400;
        color: #4E5A66;
        opacity: .8;
        margin: unset;
        margin-left: 1vw;
        line-height: 1;
    }
    #page #content .first-banner .watch-background>div{
        display: flex;
        flex-flow: row wrap;
        justify-content: space-around;
    }
    #page #content .first-banner .watch-background>div button{
        display: block;
        width: 25.5em;
        font-family: ltc-bodoni-175, serif;
        font-weight: 400;
        font-size: .75em;
        font-style: normal;
        color: rgb(97, 123, 73);
        margin-bottom: 1em;
    }
    #page #content .first-banner .watch-background>div button:hover{
        cursor: pointer;
    }
    #page #content .first-banner .watch-background>div button img{
        display: block;
        float: right;
        height: .75em;
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
        font-family: ltc-bodoni-175, serif;
        font-weight: 400;
        font-style: normal;
        color: #FFF;
        margin-left: 1em;
        margin-right: 1em;
    }
    #page #content .second-banner .watch-background p{
        color: #FFF;
        margin-left: 1.5em;
        margin-right: 1.5em;
    }
    #page #content .third-banner{
        display:none;
        background: #FFF;
    }
    #page #content .third-banner .watch-guarante{
        max-width: 63em;
        margin: auto;
    }
    #page #content .third-banner .watch-guarante h2{
        font-family: ltc-bodoni-175, serif;
        font-weight: 400;
        font-style: normal;
        color: #617b49;
        text-align: center;
        font-size: 2em;
        padding-top: 1em;
        margin-top: unset;
        margin-left: 1em;
        margin-right: 1em;
    }
    #page #content .third-banner .watch-guarante p{
        margin-left: 1em;
        margin-right: 1em;
        padding-bottom: 2em;
    }
    #page #content .third-banner .watch-guarante span{
        display: block;
        width: 100%;
        font-family: ltc-bodoni-175, serif;
        font-weight: 400;
        font-style: normal;
        font-size: 2.5em;
        color: #617b49;
        text-align: center;
        margin-bottom: 2em;
    }
    /* Woo Comerce */
    .products{
        font-size: 1.3em;
        text-align: center;
    }
    .products h2{
        font-family: itc-benguiat,serif;
        font-weight: 700;
        font-style: bold;
    }
    .woocommerce-loop-product__title{
        font-size: .90em !important;
    }
    /*SM*/
    @media (min-width: 575.98px) {
    }
    /* Small Landscape */
    @media (min-width: 767.98px) {
        #page #content .first-banner .watch-background>div{
            justify-content: flex-start;
        }
        #page #content .first-banner .watch-background>div button{
            width: unset;
            font-size: 1em;
            padding-top: .75em;
            padding-bottom: .75em;
            margin-left: 1em;
        }
        #page #content .first-banner .watch-background>div button img {
            margin-left: 1em;
        }
        #page #content .first-banner .watch-background> img{
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
        }
        /* Woo Comerce */
        .products{
            text-align: left;
        }
        .woocommerce-loop-product__title{
            font-size: .85em !important;
        }
    }
    /* Medium Tablets */
    @media (min-width: 991.98px) {
        #page #content p{
            margin: unset;
        }
        #page #content .first-banner{
            height: 21em;
        }
        #page #content .first-banner .watch-background{
            height: 22em;
            justify-content: center;
            background-position: top right;
            background-size: 50% auto;
            text-align: left;
        }
        #page #content .first-banner .watch-background h3{
            font-size: 3em;
            margin: unset;
            margin-left: 2vw;
        }
        #page #content .first-banner .watch-background h1{
            font-size: 7.5em;
            margin: unset;
            margin-left: 2vw;
        }
        #page #content .first-banner .watch-background >img{
            width: 50%;
            height: auto;
            margin-left: 2vw;
        }
        #page #content .second-banner .watch-background{
            height: 20em;
            background: url('<?php echo get_template_directory_uri(); ?>/img/hand-watch-bannerx688x454.jpg');
            background-repeat: no-repeat;
            justify-content: center;
            align-items: flex-end;
            background-position: top left;
            background-size: auto 100%;
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
        #page #content .third-banner{
            display: block;
        }
        #page #content .third-banner .watch-guarante h2{
            margin-left: 2vw;
            margin-right: 2vw;
        }
        #page #content .third-banner .watch-guarante p{
            margin-left: 2vw;
            margin-right: 2vw;
        }
        #page #content .third-banner .watch-guarante span{
            font-size: 1.25em;
        }
    }
    /* Large Desktop & up */
    @media (min-width: 1199.98px) {
        #page #content .third-banner .watch-guarante span{
            font-size: 1.5em;
        }
    }
</style>
<?php
    get_footer();
?>