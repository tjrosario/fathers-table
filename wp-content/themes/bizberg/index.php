<?php
get_header(); ?>
	
	<?php do_action( 'bizberg_before_homepage_blog' ); ?>

	<section id="blog" class="blog-lists <?php echo esc_attr( bizberg_sidebar_position() ); ?>">

	    <div class="container">

		    <div class="row">

		    	<?php 
		    	$homepage_blog_title = bizberg_get_theme_mod( 'homepage_blog_title' );

		    	if( !empty( $homepage_blog_title ) ){ ?>

			    	<div class="col-sm-12">			    		
			    		<h2 class="homepage_blog_title"><?php echo esc_html( $homepage_blog_title ); ?></h2>
			    	</div>

			    	<?php 

			    } ?>

		    	<div class="<?php echo bizberg_check_sidebar_active_inactive_class_home(); ?>">	    		

					<?php

					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;

						/* Start the Loop */
						echo '<div class="row" id="content">';

						while ( have_posts() ) : the_post();

							if( bizberg_sidebar_position() != 'blog-nosidebar-1' ){
								get_template_part( 'template-parts/content', get_post_format() );
							} else {
								get_template_part( 'template-parts/content', 'nosidebar' );
							}

						endwhile;
						echo '</div>';

						bizberg_numbered_pagination();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; 

					?>					

				</div>

				<?php 
				
				/**
				* Disable sidebar in grid view
				*/

				if( bizberg_sidebar_position() != 'blog-nosidebar-1' ){ 

					if( is_active_sidebar( 'sidebar-2' ) ){ ?>

						<div class="col-md-4 col-sm-12">
							<?php get_sidebar(); ?>
				    	</div>
						
						<?php
					}
					
				} ?>				

			</div>

		</div>

	</section>

	<?php do_action( 'bizberg_after_homepage_blog' ); ?>

<?php
get_footer();
