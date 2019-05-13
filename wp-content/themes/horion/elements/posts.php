
<div class="container-fluid" style="background-color: #549; padding-bottom: 10px;">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">
			<h1>POSTAI</h1>
			 <p class="ourBlog"><?php the_field('Blog-title'); ?></p>
        <?php $query = new WP_Query('posts_per_page=1');
        if ($query->have_posts() ) : 
          while ($query->have_posts() ) : 
              $query->the_post(); ?>
        <p class="date-padding" ><?php the_date(); ?></p>
        <h3><?php the_title(); ?></h3>
        <div class="blog-text"><?php the_content(); ?></div>
              <?php
          endwhile; 
        else: ?> <h3> <?php _e('Nėra įrašų');?></h3>

      <?php endif;
       wp_reset_query(); ?>
		</div>
	</div>
</div>