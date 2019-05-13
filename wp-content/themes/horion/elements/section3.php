<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8  p-right text-uppercase">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-top">
          <img id="wedding" class="menu-img" src="<?php the_field('Weddings-background'); ?>" alt="background-img" />
          <div class="titles text-uppercase">
            <p><?php the_field('Weddings-small-text'); ?></p>
            <h3><?php the_field('Weddings-big-text'); ?></h3>
            <a href="<?php the_field('Weddings-button-link'); ?>" title="<?php the_field('Weddings-button-text'); ?>" class="bttn"><?php the_field('Weddings-button-text'); ?></a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 p-top p-right">
          <img class="menu-img" src="<?php the_field('Adventures-background'); ?>" alt="background-img" />
          <div class="titles">
            <p><?php the_field('Adventures-small-text'); ?></p>
            <h3><?php the_field('Adventures-big-text'); ?></h3>
            <a href="<?php the_field('Adventures-button-link'); ?>" title="<?php the_field('Adventures-button-text'); ?>" class="bttn"><?php the_field('Adventures-button-text'); ?></a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 p-top p-left">
          <img class="menu-img" src="<?php the_field('About-background'); ?>" alt="background-img" />
          <div class="titles"> 
            <p><?php the_field('About-small-text'); ?></p>
            <h3><?php the_field('About-big-text'); ?></h3>
            <a href="<?php the_field('About-button-link'); ?>" title="<?php the_field('About-button-text'); ?>" class="bttn"><?php the_field('About-button-text'); ?></a>
          </div>
        </div>              
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-top p-left" >
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 blog-container px-0" id="blog-container">
        <p class="ourBlog"><?php the_field('Blog-title'); ?></p>
        <?php $query = new WP_Query('posts_per_page=1');
        if ($query->have_posts() ) : 
          while ($query->have_posts() ) : 
              $query->the_post(); ?>
        <p class="date-padding" ><?php the_date(); ?></p>
        <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
        <div class="blog-text"><?php the_excerpt(__('(more...)')); ?></div>
              <?php
          endwhile; 
        else: ?> <h3> <?php _e('Nėra įrašų');?></h3>

      <?php endif;
       wp_reset_query(); ?>
      </div>
     
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-container px-0 text-uppercase">
        <div class="contact-margins"> 
          <p><?php the_field('Contacts-small-text'); ?></p>
          <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 px-0">
            <h4><?php the_field('street'); ?> <br> <?php the_field('city'); ?> <br> <?php the_field('x-coordinate'); ?> <br> <?php the_field('y-coordinate'); ?></h4>
          </div>
          <a href="<?php the_field('Contacts-button-link'); ?>" title="<?php the_field('Contacts-button-text'); ?>" class="bttn"><?php the_field('Contacts-button-text'); ?></a>
        </div>
      </div>    
    </div>
  </div>
</div>