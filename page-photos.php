<?php
/*
Template Name: Photos Page
*/
get_header(); ?>
		<div class="container">
			<div class="container-main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h3>Yawn… I wish there were more hours in a day…</h3>
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			
		</div>
		
		
		<div id='photostream'>
			<ul>
			<?php if ($api->parse('5 minutes')): ?>
			    <?php foreach($api->get('photos/photo') as $photo): ?>
					<li>
						<a rel="lightbox-journey" href="http://farm<?php echo $photo->get('@farm'); ?>.static.flickr.com/<?php echo $photo->get('@server'); ?>/<?php echo $photo->get('@id'); ?>_<?php echo $photo->get('@secret'); ?>.jpg" 
							border="0" alt="<?php echo $photo->get('@title'); ?>"title="<?php echo $photo->get('@title'); ?>"><img width="75px" height="75px" src="http://farm<?php echo $photo->get('@farm'); ?>.static.flickr.com/<?php echo $photo->get('@server'); ?>/<?php echo $photo->get('@id'); ?>_<?php echo $photo->get('@secret'); ?>_s.jpg" 
							border="0" alt="<?php echo $photo->get('@title'); ?>"title="<?php echo $photo->get('@title'); ?>" />
						</a>
					</li>
				<?php endforeach; ?>
			<?php endif; ?>
			
			</ul>
		</div>
		
		<?php endwhile; endif; ?>
		
		<div class="container-aside quiet">
			<h4 class="loud">Subscribe</h4>
			<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
			<h4 class="loud">Lorem Ipsum</h4>
			<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
		</div>
	</div>
	</div>
		
<?php get_footer(); ?>
