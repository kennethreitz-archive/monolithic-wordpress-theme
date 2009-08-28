<?php get_header(); ?>
<div class="container">
	<div class="container-main">
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2 class="inline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
				<?php the_title(); ?></a></h2>
				<span class="float-right quiet"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></span>
				<div class="post">
					<?php the_content('Read the rest of this entry &raquo;'); ?>	
				</div>
				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?></p>

		<?php endwhile; ?>
		</div>
		<div id="disqus_thread"></div><script type="text/javascript" src="http://disqus.com/forums/kennethreitz/embed.js"></script><noscript><a href="http://kennethreitz.disqus.com/?url=ref">View the discussion thread.</a></noscript><a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
	</div>
				
<?php getSidebar(); ?>

<?php get_footer(); ?>
