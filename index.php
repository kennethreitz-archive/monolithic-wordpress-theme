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
				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  </p>
			</div>
		<?php endwhile; ?>
				<div class="clear"></div>
<big>				
				<span class="float: left;"><?php next_posts_link('&laquo; Previous Entries') ?></span>
				<span class="float: right;"><?php previous_posts_link('Next Entries &raquo;') ?></span>
				
</big>			
			</div>
<?php getSidebar(); ?>

<?php get_footer(); ?>
