<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demografik
 */

?>
</div><!-- /.mim_tm_all_wrap -->
	
	<footer class="section section__footer <?php echo in_array('page-template-about-page', get_body_class()) ? 'white-bg' : ''; ?>">
		<div class="footer_area_bg">

			<div class="footer__top">
				<div class="wrapper">
					<div class="row">
						<div class="col-md-6">
							<?php dynamic_sidebar( 'footer-widget-one' ); ?>
						</div>
						<div class="col-md-3 footer-menu">
							<?php dynamic_sidebar( 'footer-widget-two' ); ?>
						</div>

						<div class="col-md-3">
							<?php dynamic_sidebar('footer-widget-three'); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="container pt-50">
				<!-- start container -->
				<div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
					<!-- start row -->
					<div class="col-md-12 text-center  col-sm-12">
						<!-- col-3 footer copyright -->
						<div class="footer_copyright">
							<p class="copyright_text text-center">© 2022 Demografiya web portali. Barcha huquqlar
								himoya qilingan.</span>.
							</p>
						</div>
					</div><!-- end col-3 footer copyright -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
	</footer>
	<a id="back-to-top" class="rounded-circle" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"
		style="display: inline;">
		<i class="bx bxs-chevron-up"></i>
	</a>
	<div class="mouse-cursor cursor-outer"></div>
	<div class="mouse-cursor cursor-inner"></div>



<?php wp_footer(); ?>

</body>
</html>
