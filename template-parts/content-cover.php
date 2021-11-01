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
	<?php
	// On the cover page template, output the cover header.
	$cover_header_style   = '';
	$cover_header_classes = '';

	$color_overlay_style   = '';
	$color_overlay_classes = '';

	$image_url = ! post_password_required() ? get_the_post_thumbnail_url( get_the_ID(), 'twentytwenty-fullscreen' ) : '';

	if ( $image_url ) {
		$cover_header_style   = ' style="background-image: url( ' . esc_url( $image_url ) . ' );"';
		$cover_header_classes = ' bg-image';
	}

	// Get the color used for the color overlay.
	$color_overlay_color = get_theme_mod( 'cover_template_overlay_background_color' );
	if ( $color_overlay_color ) {
		$color_overlay_style = ' style="color: ' . esc_attr( $color_overlay_color ) . ';"';
	} else {
		$color_overlay_style = '';
	}

	// Get the fixed background attachment option.
	if ( get_theme_mod( 'cover_template_fixed_background', true ) ) {
		$cover_header_classes .= ' bg-attachment-fixed';
	}

	// Get the opacity of the color overlay.
	$color_overlay_opacity  = get_theme_mod( 'cover_template_overlay_opacity' );
	$color_overlay_opacity  = ( false === $color_overlay_opacity ) ? 80 : $color_overlay_opacity;
	$color_overlay_classes .= ' opacity-' . $color_overlay_opacity;
	?>




	<div class="cover-header <?php echo $cover_header_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>"<?php echo $cover_header_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>>
		<div class="cover-header-inner-wrapper screen-height">
			<div class="cover-header-inner">
				<div class="cover-color-overlay color-accent<?php echo esc_attr( $color_overlay_classes ); ?>"<?php echo $color_overlay_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>></div>

					<header class="entry-header has-text-align-center">
						<div class="entry-header-inner section-inner medium">

							<?php

							/**
							 * Allow child themes and plugins to filter the display of the categories in the article header.
							 *
							 * @since Twenty Twenty 1.0
							 *
							 * @param bool Whether to show the categories in article header, Default true.
							 */
							$show_categories = apply_filters( 'twentytwenty_show_categories_in_entry_header', true );

							if ( true === $show_categories && has_category() ) {
								?>

								<div class="entry-categories">
									<span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
									<div class="entry-categories-inner">
										<?php the_category( ' ' ); ?>
									</div><!-- .entry-categories-inner -->
								</div><!-- .entry-categories -->

								<?php
							}

							the_title( '<h1 class="entry-title">', '</h1>' );

							if ( is_page() ) {
								?>

								<div class="to-the-content-wrapper">

									<a href="#post-inner" class="to-the-content fill-children-current-color">
										<?php twentytwenty_the_theme_svg( 'arrow-down' ); ?>
										<div class="screen-reader-text"><?php _e( 'Scroll Down', 'twentytwenty' ); ?></div>
									</a><!-- .to-the-content -->

								</div><!-- .to-the-content-wrapper -->

								<?php
							} else {

								$intro_text_width = '';

								if ( is_singular() ) {
									$intro_text_width = ' small';
								} else {
									$intro_text_width = ' thin';
								}

								if ( has_excerpt() ) {
									?>

									<div class="intro-text section-inner max-percentage<?php echo esc_attr( $intro_text_width ); ?>">
										<?php the_excerpt(); ?>
									</div>

									<?php
								}

								twentytwenty_the_post_meta( get_the_ID(), 'single-top' );

							}
							?>

						</div><!-- .entry-header-inner -->
					</header><!-- .entry-header -->

			</div><!-- .cover-header-inner -->
		</div><!-- .cover-header-inner-wrapper -->
	</div><!-- .cover-header -->


<div class="container-fluid py-5" style="background:url('https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80')">
	<div class="row">
		<div class="col">
			<div class="container py-5">
				<div class="row">
					<div class="col">
								<div class="jumbotron">
								<h1 class="display-4">Hello, world!</h1>
								<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
								<hr class="my-4">
								<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
								<p class="lead">
									<a href="#" class="btn btn-primary my-2">Main call to action</a>
									<a href="#" class="btn btn-secondary my-2">Secondary action</a>
								</p>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

 
 
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
        <div class="col">
          <div class=" text-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><title>transactions</title><g fill="#212121"><path d="M58.882,42.438a7,7,0,0,0-8.519,10.938A25.926,25.926,0,0,1,15.1,54.737a8.955,8.955,0,0,1-1.567,1.287A27.921,27.921,0,0,0,51.961,54.6a7,7,0,0,0,6.921-12.163Z"></path><path d="M38.994,7.884a7.009,7.009,0,1,0-.261,2A25.962,25.962,0,0,1,57.552,39.775a8.955,8.955,0,0,1,1.9.72A28,28,0,0,0,38.994,7.884Z" fill="#212121"></path><path d="M6.888,41.723a25.978,25.978,0,0,1,16.468-31.24,8.962,8.962,0,0,1-.332-2,27.972,27.972,0,0,0-18,34.012,7.006,7.006,0,1,0,1.861-.773Z" fill="#212121"></path></g></svg>

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class=" text-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><title>transactions</title><g fill="#212121"><path d="M58.882,42.438a7,7,0,0,0-8.519,10.938A25.926,25.926,0,0,1,15.1,54.737a8.955,8.955,0,0,1-1.567,1.287A27.921,27.921,0,0,0,51.961,54.6a7,7,0,0,0,6.921-12.163Z"></path><path d="M38.994,7.884a7.009,7.009,0,1,0-.261,2A25.962,25.962,0,0,1,57.552,39.775a8.955,8.955,0,0,1,1.9.72A28,28,0,0,0,38.994,7.884Z" fill="#212121"></path><path d="M6.888,41.723a25.978,25.978,0,0,1,16.468-31.24,8.962,8.962,0,0,1-.332-2,27.972,27.972,0,0,0-18,34.012,7.006,7.006,0,1,0,1.861-.773Z" fill="#212121"></path></g></svg>

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class=" text-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><title>transactions</title><g fill="#212121"><path d="M58.882,42.438a7,7,0,0,0-8.519,10.938A25.926,25.926,0,0,1,15.1,54.737a8.955,8.955,0,0,1-1.567,1.287A27.921,27.921,0,0,0,51.961,54.6a7,7,0,0,0,6.921-12.163Z"></path><path d="M38.994,7.884a7.009,7.009,0,1,0-.261,2A25.962,25.962,0,0,1,57.552,39.775a8.955,8.955,0,0,1,1.9.72A28,28,0,0,0,38.994,7.884Z" fill="#212121"></path><path d="M6.888,41.723a25.978,25.978,0,0,1,16.468-31.24,8.962,8.962,0,0,1-.332-2,27.972,27.972,0,0,0-18,34.012,7.006,7.006,0,1,0,1.861-.773Z" fill="#212121"></path></g></svg>

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>

        <div class="col">
          <div class=" text-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><title>transactions</title><g fill="#212121"><path d="M58.882,42.438a7,7,0,0,0-8.519,10.938A25.926,25.926,0,0,1,15.1,54.737a8.955,8.955,0,0,1-1.567,1.287A27.921,27.921,0,0,0,51.961,54.6a7,7,0,0,0,6.921-12.163Z"></path><path d="M38.994,7.884a7.009,7.009,0,1,0-.261,2A25.962,25.962,0,0,1,57.552,39.775a8.955,8.955,0,0,1,1.9.72A28,28,0,0,0,38.994,7.884Z" fill="#212121"></path><path d="M6.888,41.723a25.978,25.978,0,0,1,16.468-31.24,8.962,8.962,0,0,1-.332-2,27.972,27.972,0,0,0-18,34.012,7.006,7.006,0,1,0,1.861-.773Z" fill="#212121"></path></g></svg>

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class=" text-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><title>transactions</title><g fill="#212121"><path d="M58.882,42.438a7,7,0,0,0-8.519,10.938A25.926,25.926,0,0,1,15.1,54.737a8.955,8.955,0,0,1-1.567,1.287A27.921,27.921,0,0,0,51.961,54.6a7,7,0,0,0,6.921-12.163Z"></path><path d="M38.994,7.884a7.009,7.009,0,1,0-.261,2A25.962,25.962,0,0,1,57.552,39.775a8.955,8.955,0,0,1,1.9.72A28,28,0,0,0,38.994,7.884Z" fill="#212121"></path><path d="M6.888,41.723a25.978,25.978,0,0,1,16.468-31.24,8.962,8.962,0,0,1-.332-2,27.972,27.972,0,0,0-18,34.012,7.006,7.006,0,1,0,1.861-.773Z" fill="#212121"></path></g></svg>

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>



	
<!-- auto banner -->
<div class="container-fluid">
	<div class="section p-5">
			<div class="row">
				<div class="col">
					<img src="<?php echo esc_url(get_template_directory_uri().'/img') ; ?>/Group8.png" alt="">
				</div>
			</div>
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
			</div>
		</div>
	</div>
</div>
<!-- end auto banner -->



<!-- auto contact form  -->
<div class="container">
	<div class="section p-5">
		
		<div class="row">
			<div class="col">				
				<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
			</div>
			<div class="col">
				<?php echo do_shortcode( ' [contact-form-7 id="6" title="Contact form 1"] ' ); ?>
			</div>

		</div>

	</div>
</div>
<!-- end  auto contact form -->



	<div class="post-inner" id="post-inner">

		<div class="entry-content">

		<?php
		the_content();
		?>

		</div><!-- .entry-content -->
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

	</div><!-- .post-inner -->

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

</article><!-- .post -->
