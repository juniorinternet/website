<?php get_header('classic'); ?>

<div role="main" class="content clearfix tertiary">

	<div class="inner">
	
		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
			<span class="date"><?php the_date() ?></span>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</div>
		<?php endwhile;  ?>
		
		<?php else: get_template_part('404') ?>
		<?php endif; ?>
		
		<?php get_sidebar() ?>

	</div>

</div><!-- / content -->



<?php get_footer(); ?>