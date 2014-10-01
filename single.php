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
			<li>
				<a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>&<?php the_title(); ?>">
					<i class="fa fa-facebook-square"></i>
					<span id="fb-count" class="social-count"></span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>&text=<?php the_title(); ?>&via=khayusaki">
					<i class="fa fa-twitter"></i>
					<span id="tw-count" class="social-count"></span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink() ?>">
					<i class="fa fa-google-plus-square"></i>
					<span id="gp-count" class="social-count"></span>
				</a>
			</li>
		</ul>
		<hr>
	</article>

	<!-- <section class="comments">
		<h4>Comments</h4>
		<div id="disqus_thread"></div>
	    <script type="text/javascript">
	        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	        var disqus_shortname = 'khayusaki'; // required: replace example with your forum shortname

	        /* * * DON'T EDIT BELOW THIS LINE * * */
	        (function() {
	            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	        })();
	    </script>
	    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
	    
		<hr>
	</section> -->

<?php endwhile; endif; ?>

	<section class="randposts clearfix">
		<h4>You may also like to read</h4>

		<?php
			$args = array (		
				'orderby' => 'rand',					
				'posts_per_page'=> 2,
				'ignore_sticky_posts' => 1
			);
			
			$the_query = new WP_Query( $args );								
			while ( $the_query->have_posts() ) : $the_query->the_post(); 
		?>
			<div class="">		
				<h3>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h3>
				<p><?php the_excerpt() ?></p>
			</div>									
		<?php endwhile; ?>

	</section>

<?php get_footer(); ?>