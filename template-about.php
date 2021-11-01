<?php
/* Template Name: about */
?>







<?php get_header(); ?>

<main>


	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<div class="container-fluid inner-secondary-title">
			<div class="row">
				<div class="col">

					<div class="container">
						<div class="row">
							<div class="col">

								<?php

								get_template_part('template-parts/entry-header');

								if (!is_search()) {
									get_template_part('template-parts/featured-image');
								}

								?>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>



		<div class="container">
			<div class="row  justify-content-center">
				<div class="col col-12 col-md-10  px-5 px-md-0">
					<div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">
						<div class="entry-content">

							<?php
							if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
								the_excerpt();
							} else {
								the_content(__('Continue reading', 'twentytwenty'));
							}
							?>

						</div><!-- .entry-content -->

					</div><!-- .post-inner -->

					<div class="section-inner">
						<?php
						wp_link_pages(
							array(
								'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__('Page', 'twentytwenty') . '"><span class="label">' . __('Pages:', 'twentytwenty') . '</span>',
								'after'       => '</nav>',
								'link_before' => '<span class="page-number">',
								'link_after'  => '</span>',
							)
						);

						edit_post_link();

						// Single bottom post meta.
						twentytwenty_the_post_meta(get_the_ID(), 'single-bottom');

						if (post_type_supports(get_post_type(get_the_ID()), 'author') && is_single()) {

							get_template_part('template-parts/entry-author-bio');
						}
						?>
					</div><!-- .section-inner -->



					<?php

					if (is_single()) {

						get_template_part('template-parts/navigation');
					}

					/**
					 *  Output comments wrapper if it's a post, or if comments are open,
					 * or if there's a comment number – and check for password.
					 * */
					if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
					?>

						<div class="comments-wrapper section-inner">

							<?php comments_template(); ?>

						</div><!-- .comments-wrapper -->

					<?php
					}
					?>
				</div>
			</div>

		</div>
	</article>





	<div class="container  about-strengths my-5">
		<div class="row   justify-content-center">
			<div class="col col-10 pb-4">

				<div class="container">
					<div class="row  row-cols-2 row-cols-sm-3 row-cols-md-6 g-3  text-center">
						<div class="col ">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>icon_fast.svg" width='80px' class="d-inline-block" alt="Agility" />


							<h6 class="h5">Agility</h6>
						</div>
						<div class="col ">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>icon_hands.svg" width='80px' class="d-inline-block" alt="Confidence" />


							<h6 class="h5">Confidence</h6>
						</div>
						<div class="col ">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>icon_arrow.svg" width='80px' class="d-inline-block" alt="Commitment" />


							<h6 class="h5">Commitment</h6>
						</div>
						<div class="col ">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>icon_cog.svg" width='80px' class="d-inline-block" alt="Seriousness" />


							<h6 class="h5">Seriousness</h6>
						</div>
						<div class="col ">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>icon_cogs.svg" width='80px' class="d-inline-block" alt="Continuous improvement" />


							<h6 class="h5">Continuous improvement</h6>
						</div>
						<div class="col ">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>icon_persons.svg" width='80px' class="d-inline-block" alt="Work with the client" />


							<h6 class="h5">Work with the client</h6>
						</div>
					</div>

				</div>



			</div>
		</div>
	</div>

	<div class="container my-5">
		<div class="row justify-content-center py-5">
			<div class="col-12 col-lg-12">
				<div class="container">
					<div class="row justify-content-center align-items-center py-5">
						<div class="col-6">
							<!-- <a href="#" class="" title="medios-de-america"><img src="<?php echo esc_url(get_template_directory_uri() . '/img'); ?>/medios-de-america.png" alt="medios-de-america" /></a> -->
							<a href="https://mediosdeamerica.com/" target="blank" class="" title="Medios de america"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/'); ?>medios-de-america.png"></a>
						</div>
					</div>

					<div class="row    justify-content-center align-items-center">
						<div class="col-6 my-2 my-lg-0 col-sm-4 offset-md-1  offset-lg-0 col-lg-2 col-xl-2 px-5">
							<a href="http://eledicto.com" target="blank" class="" title="eledicto.com"><img src="<?php echo esc_url(get_template_directory_uri() . '/img'); ?>/eledicto-logo.png" alt="eledicto.com" /></a>
						</div>
						<div class="col-6 my-2 my-lg-0 col-sm-4 offset-md-1  offset-lg-0 col-lg-2 col-xl-2 px-5">
							<a href="http://tuedicto.com.mx" target="blank" class="" title="tuedicto.com.mx"><img src="<?php echo esc_url(get_template_directory_uri() . '/img'); ?>/mexico-logo.png" alt="tuedicto.com.mx" /></a>
						</div>
						<div class="col-6 my-2 my-lg-0 col-sm-4 offset-md-1  offset-lg-0 col-lg-2 col-xl-2 px-5">
							<a href="http://legalnotices.com.mx" target="blank" class="" title="legalnotices.com.mx "><img src="<?php echo esc_url(get_template_directory_uri() . '/img'); ?>/legalnotices-mx-logo.png" alt="legalnotices.com.mx" /></a>
						</div>
						<div class="col-6 my-2 my-lg-0 col-sm-4 offset-md-1  offset-lg-0 col-lg-2 col-xl-2 px-5">
							<a href="http://tuedicto.cl" target="blank" class="" title="tuedicto.cl"><img src="<?php echo esc_url(get_template_directory_uri() . '/img'); ?>/chile-logo.png" alt="tuedicto.cl" /></a>
						</div>
						<div class="col-6 my-2 my-lg-0 col-sm-4 offset-md-1  offset-lg-0 col-lg-2 col-xl-2 px-5">
							<a href="http://tuedicto.com.pa" target="blank" class="" title="tuedicto.com.pa"><img src="<?php echo esc_url(get_template_directory_uri() . '/img'); ?>/panama-logo.png" alt="tuedicto.com.pa" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- ready to start -->
	<?php get_template_part('readytostart'); ?>
	<!-- end ready to start -->



</main>

<?php get_footer(); ?>
