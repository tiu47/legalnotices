<?php
/* Template Name: services */
?>





<?php get_header(); ?>


<main>




	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">





		<div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">

			<div class="container published-example-lead">
				<div class="row   ">
					<div class="col-2  mt-0  col-sm-1 offset-1 offset-sm-1">

						<img class="mx-auto" src="<?php the_field('Icon_url');  ?>" alt="<?php the_field('second_title'); ?>" title="<?php the_field('second_title'); ?>" width="100" />

					</div>
					<div class="col">
						<!-- <?php echo get_post_meta(get_the_ID(), "lead", true) ?> -->
						<h4 class="m-0" style="    color: #981726;"><b><?php the_field('second_title'); ?></b></h4>
						<p><?php the_field('lead'); ?></p>

					</div>
				</div>
			</div>

			<div class="container-fluid   published-example-demo">
				<div class="row">
					<div class="col">

						<div class="container">

							<div class="row align-items-center">
								<div class="col-12 col-md-10 col-lg-5 offset-0  offset-md-1 py-5  order-2 order-lg-1 ">
									<img class="mx-auto" src="<?php the_field('example_image'); ?>" alt="<?php the_title() ?>" />
								</div>
								<div class="col-12 col-md-10 col-lg-5 pb-5 order-1 order-lg-2 text-center text-md-start">

									<h2><?php the_field('subtitle'); ?> </h2>
									<p>

										<?php the_field('paragraph'); ?>
									</p>

									<p>
										<?php the_field('second-paragraph'); ?></p>

									<h4>Everything ready to start?</h4>
									<p><a class="btn btn-secondary" href="https://legalnotices.us/contact/" role="button">Contact US</a></p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>


			<div class="container">
				<div class="row  justify-content-center">
					<div class="col col-10">



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
		</div>

	</article><!-- .post -->




	<!-- ready to start -->
	<?php get_template_part('readytostart'); ?>
	<!-- end ready to start -->


</main>



<?php get_footer(); ?>
