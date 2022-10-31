<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newtonhousefarm
 */

get_header();
?>

	<main id="primary">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<section class="hero small">
			<img width="1920" height="1280" src="http://newtonhouse:8888/wp-content/uploads/2022/10/AdobeStock_1612965591.jpeg" class="attachment-1920x1920 size-1920x1920" alt="" loading="lazy" srcset="http://newtonhouse:8888/wp-content/uploads/2022/10/AdobeStock_1612965591.jpeg 1920w, http://newtonhouse:8888/wp-content/uploads/2022/10/AdobeStock_1612965591-300x200.jpeg 300w, http://newtonhouse:8888/wp-content/uploads/2022/10/AdobeStock_1612965591-1024x683.jpeg 1024w, http://newtonhouse:8888/wp-content/uploads/2022/10/AdobeStock_1612965591-768x512.jpeg 768w, http://newtonhouse:8888/wp-content/uploads/2022/10/AdobeStock_1612965591-1536x1024.jpeg 1536w" sizes="(max-width: 1920px) 100vw, 1920px" />			<div>
				<h1>Blog</h1>
			</div>
		</section>
		<div class="posts">
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?></div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
