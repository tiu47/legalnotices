


<?php
 /* Template Name: newspaper only logo*/ 
 ?>
 
  

 
 
 

<?php get_header(); ?>

 
  <main>
		  

	  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<div class="container-fluid small-header inner-secondary-title"   >
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


	<div class="container breadcrum">
						<div class="row">
							<div class="col col-4 offset-1" >

										<?php
										if ( function_exists('yoast_breadcrumb') ) {
										yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
										}
										?>

								<!-- 		<?php $iddd =  wp_get_post_parent_id(get_the_ID()); ?>
									<nav aria-label="breadcrumb">
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
			<div class="row">
				<div class="col col-4 offset-1" >
				
						<?php

						get_template_part( 'template-parts/entry-header' );

						if ( ! is_search() ) {
								get_template_part( 'template-parts/featured-image' );
						}

						?>
						</div>
				</div>

		</div>




		<div class="container">
			<div class="row">
				<div class="col col-4 offset-1" >

							<!-- entry -->
							<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">
									<div class="entry-content">								
											<?php
											if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
													the_excerpt();
											} else {
													the_content( __( 'Continue reading', 'twentytwenty' ) );
											}
											?>

									</div><!-- .entry-content -->

							</div><!-- .post-inner -->

							<div class="section-inner">
									<?php
									wp_link_pages(
											array(
													'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
													'after'       => '</nav>',
													'link_before' => '<span class="page-number">',
													'link_after'  => '</span>',
											)
									);

									edit_post_link();

									// Single bottom post meta.
									twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

									if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

											get_template_part( 'template-parts/entry-author-bio' );

									}
									?>

							</div><!-- .section-inner -->

							<?php

							if ( is_single() ) {

									get_template_part( 'template-parts/navigation' );

							}

							/**
							 *  Output comments wrapper if it's a post, or if comments are open,
							 * or if there's a comment number – and check for password.
							 * */
							if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
									?>

									<div class="comments-wrapper section-inner">

											<?php comments_template(); ?>

									</div><!-- .comments-wrapper -->

									<?php
							}
							?>

				</div>


				<div class="col col-4  offset-1 image-cont-news-frontpage">
					<img src="<?php the_field('newspaper'); ?>" alt="<?php the_field('newspaper'); ?>" />
				</div>

			</div>
		</div>
		

<!-- 

<?php if( get_field('example') ): 

			echo '<div class="container"> ' ;
			echo '<div class="row justify-content-center  justify-content-center">' ;
			echo '<div class="col-8  image-cont-example">' ;
			echo '<h4>Example</h4>' ;
			echo '<img src="'. <?php the_field('example'); ?> . ' " alt=" '.  <?php the_field('example'); ?> .' " />' ;
			echo '</div>' ;
			echo '</div>' ;
			echo '</div>' ;

  endif; ?>

 -->



		<div class="container">
			<div class="row justify-content-center  justify-content-center">
				<div class="col-8  image-cont-example">
					<h4>Example</h4>
					<img src="<?php the_field('example'); ?>" alt="<?php the_field('example'); ?>" />
				</div>
			</div>
		</div>


		 
</article>


				<!-- ready to start -->
					<?php get_template_part( 'readytostart' ); ?>
				<!-- end ready to start -->

  </main>
	<?php get_footer(); ?>

 

 