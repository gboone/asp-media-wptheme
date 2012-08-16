<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>



	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<!--div id="site-generator">
				<?php //do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php //echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php //esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php //printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div-->
	</footer><!-- #colophon -->
</div><!-- #page -->
	<!--/div--><!-- #main -->
 <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js">  </script>
  <script src="js/script.js"></script>
			<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
			<script type="text/javascript">
			$(function() {
			$("#accordion div.tabs").tabs("#accordion div.pane",
			    {effect: 'horizontal', effect: 'fade', fadeInSpeed: 750, fadeOutSpeed: 750, rotate: true}).slideshow({autoplay: true});});
			</script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
<?php wp_footer(); ?>

</body>
</html>