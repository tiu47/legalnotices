<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>



			<footer id="site-footer" role="contentinfo" class="header-footer-group pt-5">

				<div class="container-foot pt-5">
						<!--  payments logo -->
						<div class="container text-center ">
							<div class="row">
								<div class="col pb-2">
									<p class="text-small">We accept all major payment methods:</p>
								</div>
							</div>
							<div class="row justify-content-center">

							<div class="col-12 col-lg-7">

								<div class="container d-block d-md-none">
										<div class="row align-items-center   justify-content-center ">

										<div class="col-4 px-5 py-3   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>paypal.svg">
										</div>
										<div class="col-4 px-3 py-3   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>intregapay.svg">
										</div>
										<div class="col-4 px-5 py-3   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>stripe.svg">
										</div>
										<div class="col-4 px-5 py-3   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>visa.svg">
										</div>
										<div class="col-4 px-5 py-3   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>mastercard.svg">
										</div>
										<div class="col-4 px-5 py-3   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>americanexpress.svg">
										</div>
										<div class="col-4 px-5 py-3   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>zelle.svg">
										</div>
										<div class="col-4 px-5 py-3   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>bitcoin.svg">
										</div>
										</div>
								</div>

								<div class="container d-none d-md-block">
										<div class="row align-items-center   justify-content-center ">

										<div class="col p-4   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>paypal.svg">
										</div>
										<div class="col   text-center">
											<img class="mx-auto" style="width: 120% !important; max-width: none; margin-left: -10% !important; "src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>intregapay.svg">
										</div>
										<div class="col p-4   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>stripe.svg">
										</div>
										<div class="col p-4   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>visa.svg">
										</div>
										<div class="col p-4   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>mastercard.svg">
										</div>
										<div class="col p-4   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>americanexpress.svg">
										</div>
										<div class="col p-4   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>zelle.svg">
										</div>
										<div class="col p-4   text-center">
											<img class="mx-auto" src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>bitcoin.svg">
										</div>
										</div>
								</div>


								</div>

							</div>
						</div>
						<!--  payments logo -->







				<div class="container p-5 pb-0">
					<div class="row py-5 p-lg-5">
						<div class="col mx-5   d-none d-lg-block  ">

							<?php
							// twentytwenty_site_logo();
							?>


								<a href="https://legalnotices.us/"  class=" d-inline-block me-5" title="legalnotices.us "><img src="<?php echo esc_url(get_template_directory_uri().'/img') ; ?>/legalnoticesus.png" alt="legalnotices.us" /></a>
								<div class="d-flex align-items-center">
									<a href="https://legalnotices.com.mx" target="blank" class=" mx-3 d-inline-block " title="legalnotices.com.mx"><img  class="d-inline-block" src="<?php echo esc_url(get_template_directory_uri().'/img') ; ?>/legalnotices-mx-logo.png" alt="legalnotices.com.mx" /></a>
									<a href="https://legalnotices.com.pa" target="blank" class=" mx-3 d-inline-block " title="legalnotices.com.pa"><img  class="d-inline-block" src="<?php echo esc_url(get_template_directory_uri().'/img') ; ?>/legalnotices-pa.png" alt="legalnotices.com.pa" /></a>
									<a href="https://seuedital.com.cv" target="blank" class=" mx-3 d-inline-block " title="seuedital.com.cv"><img  class="d-inline-block" src="<?php echo esc_url(get_template_directory_uri().'/img') ; ?>/seuedital-cv.png" alt="lseuedital.com.cv" /></a>
								</div>




						</div>

						<div class="col-8 col-lg-4  ">
							<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
						</div>



						<div class="col-4 col-lg-3 ">

							<ul class="list-unstyled text-small">
								<li><a class="link-secondary" href="tel:+18285821673"><img src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>phone_icon_dark.svg"  width='15px' class="d-inline-block"  alt="Contact Us" /> +1 828 582 1673</a></li>
								<li><a class="link-secondary" href="mailto:quote@legalnotice.us"><img src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>envelope_icon_dark.svg"  width='15px' class="d-inline-block"  alt="Contact Us" /> quote@legalnotice.us</a></li>
							</ul>
						</div>
					</div>
				</div>








				</div>


				<div class="section-inner d-none">


					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

	<!-- 			<div class="container p-5">
					  <div class="row justify-content-center">

						<div class="col-3 ">
							<img src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>medios-de-america.png">
						</div>



					</div>
				</div>

 -->
				<div class="container text-center">
					<div class="row text-center justify-content-center align-items-center">

							<!-- footer-credits -->


							<div class="col-10 col-lg-2 px-lg-4 p-5">
							<a href="https://mediosdeamerica.com/"  target="blank" class="" title="Medios de america"><img src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>medios-de-america.png"></a>
							</div>

							<div class="col-12 text-center text-lg-start col-lg-7 px-5 px-lg-0  text-start h-100 ">
								<p class="footer-copyright d-inline-block h-100 ">
									Medios de América LLC  3615 NE 207TH ST, APT 3302, AVENTURA FL, 33180
									 <span class="px-2">|</span>
									&copy;
									Copyright <?php
									echo date_i18n(
										/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
										_x( 'Y', 'copyright date format', 'twentytwenty' )
									);
									?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
									<a href="<?php echo esc_url(get_template_directory_uri().'/') ; ?>sitemap.xml" class="" title="Sitemap">Sitemap</a>
								</p><!-- .footer-copyright -->
							</div><!-- .footer-credits -->

<!--

	<p class="powered-by-wordpress d-inline d-lg-inline-block ms-0 ms-lg-4">
		<!-- 	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
		<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
	</a>
</p>
-->


					</div>
				</div>

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>
				<div class="link-whatsapp">
						<a href="https://wa.me/18285821673?text=Hi,%20I%20am%20interested%20in%20your%20services" target="blank" title="Contact Us via Whatsapp">
							<img src="<?php echo esc_url(get_template_directory_uri().'/img/') ; ?>whatsapp-icon.svg" alt="whatsapp" />
						</a>

				</div>
	</body>
</html>
