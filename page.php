<?php get_header(); ?>
<div id="page" class="block grey-100 font-grey-900">

	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about page-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<div class="entry-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>

				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>

</div>
<?php get_footer(); ?>