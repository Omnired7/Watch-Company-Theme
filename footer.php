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
	<?php
		if( is_front_page() ): ?>
			<style>
				@media (min-width: 991.98px) {
					#page {
						background:url('<?php echo get_template_directory_uri(); ?>/img/antique-watch-patternx213.jpg');
						background-repeat: round;
						background-color: #DFE5DB; 
					}
				}
			</style><?php
		elseif (is_product()): ?>
			<style>
				#page #content .blog-contain {
					max-width: 55em;
					margin: auto;
				}
			</style>
			<?php
		else : ?>
			<style>
				@media (min-width: 991.98px) {
					#page {
						background:url('<?php echo get_template_directory_uri(); ?>/img/antique-watch-pattern-whitex213.jpg');
						background-repeat: round;
						background-color: #FFF;
					}
				}
			</style><?php
		endif;
	?>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<span>| ANTIQUE WATCH CO. |</span>
			<span>| P.O. BOX 68 FRANKLIN, NC 28744 |</span>
			<span>| <a style="color:#fff;text-decoration:none;" href='tel:828-369-9906'>828-369-9906</a> |</span>
			<span>| <a style="color:#fff;text-decoration:none;" href='mailto:info@antiquewatchco.com'>INFO@ANTIQUEWATCHCO.COM</a> |</span>
			<div style=";text-decoration:none;width:100%;" >Designed by Samantha Goggans | <a style="color:#fff;text-decoration:none;" href='https://www.omnigecko.io'>Developed by Omni Gecko Solutions</a></div>
			<div style="width:100%;">| &copy; Antique Watch Company |</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<a href='#page' id='to-top' style='display:none;position:fixed;width:5em;right:0em;bottom:0em;'>
	<img src="<?php echo get_template_directory_uri().'/img/to_topx106.png'; ?>" style='width:100%;height:auto;'/>
</a>
</body>
</html>
