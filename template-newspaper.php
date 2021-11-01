<?php
/* Template Name: newspaper */
?>







<?php get_header(); ?>


<main>


	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<div class="container-fluid small-header inner-secondary-title">
			<div class="row">
				<div class="col">
					<div class="container">
						<div class="row">
							<div class="col">
								<h3>Publish by newspaper </h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">




			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-4 offset-lg-1 px-5 px-md-0 ">


						<div class="entry-content">

							<?php

							get_template_part('template-parts/entry-header');

							if (!is_search()) {
								get_template_part('template-parts/featured-image');
							}

							?>

							How to publish in <b><a href="<?php the_field('link'); ?>" target="_blank" class="geor" title="<?php the_title() ?>"><?php the_title() ?></a></b>?
							You can contact us to publish edicts in La Prensa and all the newspaper of the country.
							We also publish Biddings, Notarial Notices, Obituaries, Reminders, Edicts, Government Calls, Assemblies Calls, Informative Notices, Tender Training, Official Notices, Profit Sharing and other legal notices.


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


					<div class="col-12 col-lg-4  offset-lg-1 image-cont-news-frontpage">
						<a href="<?php the_field('link'); ?>" target="_blank" class="" title="<?php the_title() ?>">
							<img src="<?php the_field('newspaper'); ?>" alt="<?php the_title() ?>" />
						</a>
					</div>

				</div>
			</div>


			<!--
				<div class="container">
					<div class="row justify-content-center  justify-content-center">
						<div class="col-8  image-cont-example">
							<h4>Example</h4>
							<img src="<?php the_field('example'); ?>" alt="<?php the_field('example'); ?>" />
						</div>
					</div>
				</div>

			-->
		</div>

	</article>


	<!-- ready to start -->
	<?php get_template_part('readytostart'); ?>
	<!-- end ready to start -->

</main>
<?php get_footer(); ?>
