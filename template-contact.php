<?php
/* Template Name: contact  */
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


		<div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">

			<div class="container contact-cont">
				<div class="row  justify-content-center">
					<div class="col col-md-12 col-lg-5 px-5 px-md-0  ">


						<div class="entry-content">

							<?php
							if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
								the_excerpt();
							} else {
								the_content(__('Continue reading', 'twentytwenty'));
							}
							?>

						</div><!-- .entry-content -->


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
					</div>
					<div class="  col-md-12 col-lg-5 ">
						<div class="contac-form-bg p-5">
							<?php echo do_shortcode(' [contact-form-7 id="6" title="Contact form 1"] '); ?>
						</div>
					</div>
				</div>
			</div>
		</div>





	</article>




</main>


<?php get_footer(); ?>
