<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		
			<?php while ( have_posts() ) : the_post();
			$size = "full";
			$services = get_field('services');
			$clients = get_field('clients');
			$site_link = get_field('site_link');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3'); ?>
			
			<?php endwhile; // end of the loop. ?>
			
	<div class="case-study_text">
		<h2><?php echo the_title(); ?></h2>
		<h6><?php echo $services; ?></h6>
		<h5>Client: <?php echo $clients; ?></h5>
	
		<?php the_content(); ?>
	
		<p><strong><a href="<?php echo $site_link; ?>">Visit Live Site</a></strong></p>
	</div>
	
	<div class="case-study_images">
	
	<?php if($image_1)
		echo wp_get_attachment_image( $image_1, $size ); ?>
	<?php if($image_2)
		echo wp_get_attachment_image( $image_2, $size ); ?>
	<?php if($image_3)
		echo wp_get_attachment_image( $image_3, $size ); ?>
	</div>
		

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>