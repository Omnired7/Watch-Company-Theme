<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package antiquewatchco
 */

?>
	<style>
		@media (min-width: 991.98px) {
        #page {
			background:url('<?php echo get_template_directory_uri(); ?>/img/antique-watch-patternx213.jpg');
			background-repeat: repeat;
			background-size: 13% auto;
			background-position: right;
		}
	</style>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<span>| ANTIQUE WATCH CO. |</span>
			<span>| P.O. BOX 68 FRANKLIN, NC 28744 |</span>
			<span>| 828-369-9906 |</span>
			<span>| INFO@ANTIQUEWATCHCO.COM |</span>
			<div style=";text-decoration:none;width:100%;" >Designed by Samantha Goggans | <a style="color:#fff;text-decoration:none;" href='www.omnigecko.io'>Developed by Omnigecko Solutions</a></div>
			<div style="width:100%;">| &copy; Antique Watch Company |</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
