<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @package ThinkUpThemes
 */

	global $post;
	$post_slug = $post->post_name;
	get_header(); 

?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php if ($post_slug === 'products') { 
					$args = array(  
						'post_type' => 'product',
						'posts_per_page'=> -1,
						'post_status' => 'publish',
					);

					$loop = new WP_Query( $args ); 

				?>

				<div class="product-grid row">

				<?php
					while ( $loop->have_posts() ) : 
						$loop->the_post(); ?>

						<div class="grid-item col-md-3">
							<h2><?php the_title() ?></h2>
							<p><?php the_field('description') ?></p>

							<div class="quickview btn btn-primary">Quick View</div>
						</div>
					
					<?php 
						endwhile;
					}?>

				</div>

				<?php alante_thinkup_input_allowcomments(); ?>

			<?php endwhile; ?>

<?php get_footer(); ?>