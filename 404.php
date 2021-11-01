<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

  ?>


<?php get_header(); ?>

 

 

<main id="site-content" role="main">



	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 

		<div class="container-fluid inner-secondary-title">
			<div class="row">
				<div class="col">
					<div class="container">
						<div class="row">
							<div class="col">
								<?php

								get_template_part( 'template-parts/entry-header' );

								if ( ! is_search() ) {
									get_template_part( 'template-parts/featured-image' );
								}

								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



	 

				<div class="container breadcrum">
						<div class="row">
								<div class="col   offset-1">

										<?php
										if ( function_exists('yoast_breadcrumb') ) {
										yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
										}
										?>

									<!-- 	<?php $iddd =  wp_get_post_parent_id(get_the_ID()); ?> -->
									<!-- <nav aria-label="breadcrumb">
									  <ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item " aria-current="page"><?php echo get_the_title(wp_get_post_parent_id( $post->$iddd)); ?></li>
										<li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(  get_the_ID()); ?></li>
									  </ol>
									</nav> -->
							   </div>
						</div>

				</div>




		<div class="container">
			<div class="row   justify-content-center">
				<div class="col">
					


	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p></div>

		<?php
		// get_search_form(
		// 	array(
		// 		'label' => __( '404 not found', 'twentytwenty' ),
		// 	)
		// );
		?>

	</div><!-- .section-inner -->


				</div>
		</div>
	</div>


	</article>


				<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

				<!-- ready to start -->
					<?php get_template_part( 'readytostart' ); ?>
				<!-- end ready to start -->
  

</main>




<?php get_footer(); ?>
