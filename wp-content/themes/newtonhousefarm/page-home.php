<?php /* Template Name: Home Page */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newtonhousefarm
 */

get_header();
?>

	<main id="primary">

		<section class="hero large">
			<?php
				$image = get_field('hero_large_background_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
				    echo wp_get_attachment_image( $image, array('1920', '1920') );
				}
			?>
			<div>
				<div>
					<h2><?php the_field('hero_large_sub_heading');?></h2>
					<h1><?php the_field('hero_large_main_heading');?></h1>
				</div>
			</div>
		</section>
		
		<section class="padding_top_bottom">
			<div class="two_thirds">
				<div class="welcome columns">
					<?php the_field('textarea_blog_text');?>
				</div>
				<div>
					<div class="blog_highlight shadow">
					<?php
					$recent_posts = wp_get_recent_posts(array(
						'numberposts' => 1, // Number of recent posts thumbnails to display
						'post_status' => 'publish' // Show only the published posts
					));
					foreach( $recent_posts as $post_item ) : ?>
						<?php echo get_the_post_thumbnail($post_item['ID'], array('600', '600')); ?>
						<h2>
							<a href="<?php echo get_permalink($post_item['ID']) ?>">
								<?php echo $post_item['post_title'] ?>
							</a>
						</h2>
						<p><?php echo $post_item['post_excerpt'] ?></p>
						<a class="button" href="<?php echo get_permalink($post_item['ID']) ?>">Read Post</a>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>
		
		<section class="background_yellow">
			<div class="cta">
				<h2><?php the_field('cta_heading');?></h2>
				<a class="button" href="<?php the_field('cta_button_url');?>"><?php the_field('cta_button_text');?></a>
			</div>
		</section>
		
		<section class="testimonial">
			<img src="<?php the_field('testimonial_background_image');?>" alt="" />
			<div>
				<blockquote>
					<?php the_field('testimonial_quote');?>
					<cite><?php the_field('testimonial_name');?></cite>
				</blockquote>
			</div>
		</section>
		
		<section class="background_dark padding_top_bottom two_thirds">
			<div class="more columns">
				<?php the_field('textarea_image_text');?>
			</div>
			<div class="more_image">
				<p><a href="<?php the_field('textarea_image_button_url');?>" class="shadow"><?php the_field('textarea_image_button_text');?><i class="fa fa-arrow-right shadow"></i></a></p>
				<?php
				$image = get_field('textarea_image_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
				    echo wp_get_attachment_image( $image, array('600', '600') );
				}
				?>
			</div>
		</section>

	</main>

<?php
//get_sidebar();
get_footer();
