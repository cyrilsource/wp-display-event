<?php
/**
 * template to display events
 */

get_header(); ?>

	<main id="primary" class="site-main" role="main">
  
  <?php $query = getFutureEvent(); ?>
			<h2>Future Events</h2>
				<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					  
            //display future events
					
				<?php  endwhile; endif;wp_reset_query(); ?>
        
get_footer();
  
			
