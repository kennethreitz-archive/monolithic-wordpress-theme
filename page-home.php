<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
	<div class="container">
		<div class="container-main">			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h2>Need… More… Caffeine…</h2>
				<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
		<?php endwhile; endif; ?>

		<div id="latestposts">
			<?php query_posts('showposts=1&cat'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<span><a href="/blog/" class="float-right quiet">Read other articles</a></span>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
					<?php the_title(); ?></a></h2>

					<div class="entry">
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
				</div>
			<?php endwhile; ?>

			
		</div>
		
		</div>
	</div>
	<?php getSidebar(); ?>
</div>
		
<?php get_footer(); ?>
