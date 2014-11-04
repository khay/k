<?php get_header(); ?>

	<header class="hero">
		<div class="avatar">
			<img src="<?php bloginfo('template_url'); ?>/img/k.jpg" title="K">
		</div>
		<h1><a href="<?php bloginfo('url'); ?>/about"><?php bloginfo( 'name' ); ?></a></h1>
		<p>Loves foods, games and a bookworm</p>
		<ul class="social">
			<li><a target="_blank" href="https://facebook.com/khayusaki"><i class="fa fa-facebook-square"></i></a></li>
			<li><a target="_blank" href="https://twitter.com/khayusaki"><i class="fa fa-twitter"></i></a></li>
			<li><a target="_blank" href="https://github.com/khay"><i class="fa fa-github"></i></a></li>
			<li><a target="_blank" href="https://instagram.com/khayusaki"><i class="fa fa-instagram"></i></a></li>
			<li><a target="_blank" href="https://khayusaki.deviantart.com"><i class="fa fa-deviantart"></i></a></li>
			<li><a target="_blank" href="http://steamcommunity.com/id/khayusaki/"><i class="fa fa-steam-square"></i></a></li>
		</ul>
	</header>

	<hr>

	<section class="posts">
		<h4>Latest</h4>

		<?php 
			//query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); 

			$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
			$sticky = get_option( 'sticky_posts' );
			$args = array(
				'ignore_sticky_posts' => 1,
				'paged' => $paged
			);
			query_posts( $args );

			$the_query = new WP_Query( $args );								
			while ( $the_query->have_posts() ) : $the_query->the_post(); 
		?>
	
		<div class="post">
			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>
			<div class="meta">
				<i class="fa fa-clock-o"></i> <time><?php the_time('F jS, Y'); ?></time>
				<i class="fa fa-bookmark"></i> <?php the_category(', '); ?>
			</div>
		</div>
		<hr>

		<?php endwhile; ?>

	</section>
	
	<nav class="pagination clearfix">
		<span class="alignleft">
			<?php previous_posts_link('<i class="fa fa-chevron-circle-left"></i> Newer Posts'); ?>
		</span>
		<span class="alignright">
			<?php next_posts_link('Older Posts <i class="fa fa-chevron-circle-right"></i>'); ?>
    	</span>
    </nav>

<?php get_footer(); ?>