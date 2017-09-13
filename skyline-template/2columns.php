<?php
/**
	Template Name: 2 Columns
 **/
get_header(); ?>
	 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<header id="page_titl">
		<div class="fimage" style="background-image:url(<?php echo $image[0]; ?>)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="page-title"><?php the_title(); ?></h1>
						<?php
							if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('<p id="breadcrumbs">','</p>');
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-md-8 ">
							<?php

							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>
					</div>
					<div class="col-md-4">
						<?php get_sidebar();?>
					</div>
					<div class="clr"></div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
