<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package antiquewatchco
 */

get_header();
?>
	<?php get_sidebar(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<style>
			#main{
				display: flex;
				flex-flow: row wrap;
				justify-content: space-around;
			}
			.product {
				text-align: center;
				width: 14em;
				padding-left: 1em;
				padding-right: 1em;
			}
			.product h1{
				font-size: 1.5em;
			}
			.product p{
				display: none
			}
		</style>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
	get_footer();
?>
