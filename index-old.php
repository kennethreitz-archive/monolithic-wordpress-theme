
<?php get_header(); ?>
	
	<hr />
			<?php while (have_posts()) : the_post(); ?>

					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php the_title(); ?></a></h2>
						<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
						<div class="entry">
							<?php the_content('Read the rest of this entry &raquo;'); ?>
						</div>
						<p class="postmetadata" ><span style="display: none;"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> |</span> <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
					</div>
					<hr />
				<?php endwhile; ?>

				<div class="navigation">
					<h2 style="float: right;"><?php previous_posts_link('Newer Entries &raquo;') ?></h2>
					
					<h2 style=""><?php next_posts_link('&laquo; Older Entries') ?><h2>
				</div>
				<?php blogstuff(); ?>
				<br />

<?php get_footer(); ?>
