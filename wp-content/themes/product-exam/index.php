<?php get_header(); ?>

<ul class="products-listing">
<?php if( have_posts() ) : ?>
	
	<?php while( have_posts() ) : the_post(); ?>

	
	<?php  get_template_part( 'template-parts/product', 'case' ) ?>
			
		<?php endwhile; ?>

	<?php endif; ?>
	
	<?php posts_nav_link(); ?>

		
		</ul>

		<?php get_footer(); ?>
		
	