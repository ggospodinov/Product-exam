<?php get_header(); ?>

<?php the_archive_title(); ?>

<ul class="products-listing">
<?php if( have_posts() ) : ?>
	
	<?php while( have_posts() ) : the_post(); ?>

	
	<?php  get_template_part( 'template-parts/product', 'date' ) ?>
			
		<?php endwhile; ?>

	<?php endif; ?>
	
	<?php posts_nav_link(); ?>

		
		</ul>

		<?php get_footer(); ?>
		
	