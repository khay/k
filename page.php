<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>	

	<div class="metabar">
		<span>
			<a href="<?php bloginfo('url'); ?>">
				<img class="avatar" src="<?php bloginfo('template_url'); ?>/img/k.jpg" title="K"> K on <?php the_time('jS F Y'); ?>
			</a>
		</span>
	</div>

	<article>
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		<section class="body">
			<?php the_content(); ?>
		</section>
		<ul class="share clearfix">
			<li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>&<?php the_title(); ?>"><i class="fa fa-facebook-square"></i></a></li>
			<li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>&text=<?php the_title(); ?>&via=khayusaki"><i class="fa fa-twitter"></i></a></li>
			<li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink() ?>"><i class="fa fa-google-plus-square"></i></a></li>
		</ul>
	</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>