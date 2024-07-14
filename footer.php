<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codexlab
 */

?>

<!-- footer-area -->
<footer>
	<div class="footer-area-two">
		<div class="container">
			<div class="footer-top-two">
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-8">
						<div class="footer-content-two text-center">
							<div class="logo">
								<a href="/"><img
										src="<?php echo get_template_directory_uri() ?>/assets/img/logo/bg-logo.png"
										alt=""></a>
							</div>
							<p>Revitalize Your Videos: A Taste of Excitement in Every Clip!
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom-two">
				<div class="row align-items-center"> 
					<div class="col-md-6">
						<div class="copyright-text">
							<p>© 2024, Video Editing Agency. Developed by <a href="https://codexlab.tech/">Codexlab</a></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="footer-social-two">
							<ul class="list-wrap">
								<li class="title">Follow us</li>
								<li><a href="#"><img
											src="<?php echo get_template_directory_uri() ?>/assets/img/icon/footer_icon01.png"
											alt=""></a></li>
								<li><a href="#"><img
											src="<?php echo get_template_directory_uri() ?>/assets/img/icon/footer_icon02.png"
											alt=""></a></li>
								<li><a href="#"><img
											src="<?php echo get_template_directory_uri() ?>/assets/img/icon/footer_icon03.png"
											alt=""></a></li>
								<li><a href="#"><img
											src="<?php echo get_template_directory_uri() ?>/assets/img/icon/footer_icon04.png"
											alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer-area-end -->

</div>
<!-- wrapper end -->



<?php wp_footer(); ?>

</body>

</html>