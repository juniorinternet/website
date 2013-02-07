<?php get_header('classic'); ?>

<div role="main" class="content clearfix tertiary">

	<div class="inner">

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
				<span class="date"><?php the_time(get_option('date_format')) ?></span>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_content(); ?>
			</div>
			<?php endwhile;  ?>

			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
					<div id="nav-below" class="navigation">
						<div class="nav-next"><?php previous_posts_link('« Novější články'); ?></div>
						<div class="nav-previous"><?php next_posts_link('Starší články »'); ?></div>
					</div>
			<?php endif; ?>

			<?php else: get_template_part('404') ?>
			<?php endif; ?>

			<?php get_sidebar() ?>

	</div>

</div><!-- / content -->



<?php get_footer(); ?>

