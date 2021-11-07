<?php

/**
 * Displays the content when the cover template is used.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">



	<div class="container-fluid p-md-5 p-0  hero-legal">
		<div class="row">
			<div class="col">
				<div class="container p-md-5 p-0">
					<div class="row align-items-center justify-content-center">
						<div class="col-11 col-md-10">
							<div class="jumbotron">
								<h1 class=" display-lg-1">Contact us to publish <a href="https://legalnotices.us/publications/legal-notices/" title="Legal Notices">legal notices</a>, <a href="https://legalnotices.us/publications/edicts/" title="Edicts">Edicts</a> and other publications in all the newspapers in the country.</h1>
								<br class="d-block d-md-none" />
								<p class="lead">We publish in national and international newspapers!</p>

								<p>Feel free to contact us, we answer right away:</p>



								<div class="d-md-flex justify-content-start bd-highlight mb-3  align-items-center   ">
									<div class="text-center text-md-start  p-0">
										<a href="https://wa.me/18285821673?text=Hi,%20I%20am%20interested%20in%20your%20services" target="_blank" class="btn btn-primary my-2"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>whatapp_phone_icon.svg" width='20px' class="d-inline-block" alt="Contact Us" /> WHATSAPP</a>
									</div>
									<div class="text-center text-md-start  p-0">
										<a href="tel:+18285821673" class="btn btn-secondary my-2"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>phone_icon.svg" width='20px' class="d-inline-block" alt="Contact Us" /> +1 828 582 1673</a>

									</div>
									<div class="d-block d-md-none text-center text-md-start p-0">
										<a href="sms:+18285821673?body=Hi,%20I%20am%20interested%20in%20your%20services" class="btn btn-secondary my-2"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>icon_sms.svg" width='20px' class="d-inline-block" alt="Contact Us" /> +1 828 582 1673</a>
									</div>
									<div class="text-center text-md-start  p-0">
										<span class="text-light" style="padding-right: 10px"> or use the </span>

									</div>
									<div class="text-center text-md-start  p-0">
										<a href="https://legalnotices.us/contact/" class="btn btn-secondary my-2">Contact Form </a>

									</div>
								</div>


							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- publication -->
	<div class=" py-5 publications text-center">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="display-4">Publications</h2>
				</div>
			</div>
			<div class="row justify-content-center  ">
				<div class="col col-9 pb-5">
					<p class="lead">
						Edicts, tenders, requests, calls, preventive contests and more legal notices in all newspapers and official gazettes.
						Send us your text, photo or a scan of your legal notice you wish to publish through WhatsApp or by email (<a href="mailto:quote@legalnotice.us" class="" title="quote@legalnotice.us">quote@legalnotice.us</a>) indicating the newspaper of your preference and we will instantly provide you with a quote, <strong>free of charge!</strong>
					</p>
				</div>
			</div>
			<div class="row   g-5">


				<div class="col pb-5">
					<div class="container px-0 px-sm-5">
						<div class="row justify-content-center ">
							<div class="col col-12">

								<div class="container px-0 px-sm-5">
									<div class="row row-cols-2 row-cols-sm-2 row-cols-md-6">
										<div class="col">
											<a href="https://legalnotices.us/publications/biddings/" target="_blank" title="Biddings">
												<span class=" text-center">

													<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>bids.svg" width='80px' class="d-inline-block" alt="Biddings" />

													<span class="card-body">
														<h4>Biddings</h4>

														<p class="card-text">Business for a product or service</p>

													</span>

												</span>
											</a>
										</div>
										<div class="col">

											<a href="https://legalnotices.us/publications/classified-ads/" target="_blank" title="Classified Ads">

												<span class=" text-center">
													<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>speaker.svg" width='80px' class="d-inline-block" alt="Classified Ads" />

													<span class="card-body">
														<h4>Classified Ads</h4>
														<p class="card-text">Commercial Ads</p>

													</span>
												</span>
											</a>

										</div>
										<div class="col">
											<a href="https://legalnotices.us/publications/edicts/" target="_blank" title="Edicts">
												<span class=" text-center">
													<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>gov.svg" width='80px' class="d-inline-block" alt="Edicts" />


													<span class="card-body">
														<h4>Edicts</h4>
														<p class="card-text">Edicts, Biddings, Profit Sharing</p>

													</span>
												</span>
											</a>

										</div>

										<div class="col">
											<a href="https://legalnotices.us/publications/legal-notices/" target="_blank" title="Legal Notices">
												<span class=" text-center">
													<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>justice.svg" width='80px' class="d-inline-block" alt="Legal Notices" />


													<span class="card-body">
														<h4>Legal Notices</h4>
														<p class="card-text">Notarial Notices, Open Letters, Financial Balance</p>
													</span>
												</span>
											</a>

										</div>
										<div class="col">

											<a href="https://legalnotices.us/publications/obituaries/" target="_blank" title="Obituaries">
												<span class=" text-center">

													<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>obituaries.svg" width='80px' class="d-inline-block" alt="Obituaries" />

													<span class="card-body">
														<h4>Obituaries</h4>
														<p class="card-text">Obituaries, Reminders</p>

													</span>
												</span>

											</a>
										</div>

										<div class="col">

											<a href="https://legalnotices.us/publications/public-notices/" target="_blank" title="Public Notices">
												<span class=" text-center">
													<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>newspaper.svg" width='80px' class="d-inline-block" alt="Public Notices" />


													<span class="card-body">
														<h4>Public Notices</h4>
														<p class="card-text">Government, businesses, and individuals</p>
													</span>
												</span>

											</a>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- end publications -->




	<!-- auto contact form  -->
	<div class="container  auto-contact-form mt-2 mb-5 g-0">


		<div class="row  justify-content-center">
			<div class="col col-10">
				<div class="container g-0 ">


					<div class="row    ">
						<div class=" col-12 order-1   col-sm-12  col-md-12  col-lg-4 p-5  order-lg-0  left-col-from">
							<div class="d-flex  align-items-center h-100">
								<div class="">
									<h5 class="" style="text-transform: unset;letter-spacing:-0.06rem">Want some more information? Fill out this quick form.</h5>
									<p>See what LegalNotices.us can do for you. Enter your information and send us your questions/requests, so we can help you start advertising on US and international newspapers.</p>
									<p>You can also request a quote, we will send it to you with all our instructions to continue with the publication. For more information, please contact us <strong>We will be glad to help you!</strong></p>
								</div>
							</div>
						</div>
						<div class=" col-12   order-0 col-sm-12     col-md-12   col-lg-8 order-lg-1">
							<div class="container g-0">
								<div class="row ">
									<div class="col px-5 pt-5">
										<h3 class="d-none d-lg-block p-0 m-0">Contact us to publish your notice!</h3>
										<h4 class="d-block d-lg-none  p-0 m-0">Contact us to publish your notice!</h4>
										<p>  </p>
									</div>
								</div>

								<div class="row">
									<div class="col   px-5 pb-4">
										<?php echo do_shortcode(' [contact-form-7 id="6" title="Contact form 1"] '); ?>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- end  auto contact form -->







	<!-- auto banner -->
	<div class="container-fluid auto-banner text-light   ">
		<div class="section ">
			<div class="row">
				<div class="col">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-12 col-md-8">
								<h2>We support all your <span class="georgia">publications</span> with digital certification.</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end auto banner -->



	<div class="container newspaper-grid">
		<div class="row">
			<div class="col">
				<h5 class="text-center">We work with the most circulated newspapers in the country!</h5>
			</div>
		</div>
		<div class="row row row-cols-3 row-cols-sm-3 row-cols-md-6 justify-content-center align-items-center">
			<div class="col my-5">

				<a href="https://legalnotices.us/national-newspapers/chicago-sun-times/" target="_blank" title="Chicago Sun Times">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/Chicago-Sun-Times.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/Chicago-Sun-Times.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/Chicago-Sun-Times.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/Chicago-Sun-Times.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/Chicago-Sun-Times.png" /></noscript>
				</a>

			</div>
			<div class="col my-5">
				<a href="https://legalnotices.us/national-newspapers/chicago-tribune/" target="_blank" title="Chicago Tribune">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/chicago-tribune.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/chicago-tribune.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/chicago-tribune.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/chicago-tribune.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/chicago-tribune.png" /></noscript>
				</a>
			</div>
			<div class="col my-5">
				<a href="https://legalnotices.us/national-newspapers/chron-2/" target="_blank" title="Chron">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/Chron.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/Chron.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/Chron.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/Chron.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/Chron.png" /></noscript>
				</a>

			</div>
			<div class="col my-5">

				<a href="https://legalnotices.us/national-newspapers/daily-news-2/" target="_blank" title="Daily News">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/Daily-News.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/Daily-News.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/Daily-News.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/Daily-News.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/Daily-News.png" /></noscript>
				</a>
			</div>
			<div class="col my-5">

				<a href="https://legalnotices.us/national-newspapers/los-angeles-times-2/" target="_blank" title="Los Angeles Times">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/Los-Angeles-Times.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/Los-Angeles-Times.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/Los-Angeles-Times.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/Los-Angeles-Times.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/Los-Angeles-Times.png" /></noscript>
				</a>

			</div>
			<div class="col my-5">

				<a href="https://legalnotices.us/national-newspapers/miami-herald-2/" target="_blank" title="Miami Herald">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/Miami-Herald.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/Miami-Herald.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/Miami-Herald.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/Miami-Herald.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/Miami-Herald.png" /></noscript>
				</a>
			</div>


			<div class="col my-5">
				<a href="https://legalnotices.us/national-newspapers/newsday-2/" target="_blank" title="Newsday">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/newsdayerryday_1-e1626301803759.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/newsdayerryday_1-e1626301803759.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/newsdayerryday_1-e1626301803759.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/newsdayerryday_1-e1626301803759.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/newsdayerryday_1-e1626301803759.png" /></noscript>
				</a>
			</div>

			<div class="col my-5">
				<a href="https://legalnotices.us/national-newspapers/sf-gate-2/" target="_blank" title="SF Gate">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/SF-Gate.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/SF-Gate.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/SF-Gate.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/SF-Gate.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/SF-Gate.png" /></noscript>
				</a>
			</div>
			<div class="col my-5">
				<a href="https://legalnotices.us/national-newspapers/the-business-journals-2/" target="_blank" title="The Business Journals">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/The-Business-Journals.jpg" data-src="https://legalnotices.us/wp-content/uploads/2021/07/The-Business-Journals.jpg" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/The-Business-Journals.jpg" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/The-Business-Journals.jpg" alt="https://legalnotices.us/wp-content/uploads/2021/07/The-Business-Journals.jpg" /></noscript>
				</a>
			</div>
			<div class="col my-5">
				<a href="https://legalnotices.us/national-newspapers/the-new-york-times-2/" target="_blank" title="The New York Times">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/The-New-York-Times-1.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/The-New-York-Times-1.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/The-New-York-Times-1.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/The-New-York-Times-1.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/The-New-York-Times-1.png" /></noscript>
				</a>
			</div>
			<div class="col my-5">
				<a href="https://legalnotices.us/national-newspapers/the-wall-street-journal-2/" target="_blank" title="The Wall Street Journal">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/The-Wall-Street-Journal.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/The-Wall-Street-Journal.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/The-Wall-Street-Journal.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/The-Wall-Street-Journal.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/The-Wall-Street-Journal.png" /></noscript>
				</a>
			</div>

			<div class="col my-5">
				<a href="https://legalnotices.us/national-newspapers/the-washington-post-2/" target="_blank" title="The Washington Post">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/The-Washington-Post.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/The-Washington-Post.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/The-Washington-Post.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/The-Washington-Post.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/The-Washington-Post.png" /></noscript>
				</a>
			</div>

			<div class="col my-5">
				<a href="https://legalnotices.us/national-newspapers/usa-today-2/" target="_blank" title="Usa Today">
					<img alt="https://legalnotices.us/wp-content/uploads/2021/07/Usa-Today.png" data-src="https://legalnotices.us/wp-content/uploads/2021/07/Usa-Today.png" class=" lazyloaded" src="https://legalnotices.us/wp-content/uploads/2021/07/Usa-Today.png" loading="lazy"><noscript><img src="https://legalnotices.us/wp-content/uploads/2021/07/Usa-Today.png" alt="https://legalnotices.us/wp-content/uploads/2021/07/Usa-Today.png" /></noscript>
				</a>
			</div>

		</div>

	</div>


</article><!-- .post -->
