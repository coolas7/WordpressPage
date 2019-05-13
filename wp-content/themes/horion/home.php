

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">
			<h1>POSTAI</h1>
			<?php $query = new WP_Query(array('Blog' => get_field('Blog')));
				if ($query->have_posts() ) : 
					while ($query->have_posts() ) : 
							$query->the_post(); ?>
			<div style="border: 1px solid green; margin-top: 15px; background-color: #287;">
				<p><?php the_field('Blog-small-text'); ?></p>
				<p><?php the_date(); ?></p>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
				
			</div>
				<?php
			 		endwhile; 
	 			else: ?> <h2> <?php _e('Nėra įrašų');?></h2>

			<?php endif; ?>
 	
 <?php wp_reset_query(); ?> 

		</div>
	</div>
</div>



