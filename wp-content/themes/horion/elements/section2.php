  <!-- section 2 -->
<div class="container-fluid text-uppercase">    
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-uppercase brewery-container p-top p-right">
        <img class="menu-img" src="<?php the_field('brewery-background'); ?>" alt="background-img" />
            <div class="titles">
                <p><?php the_field('small-text'); ?></p>
                <h3><?php the_field('big-text'); ?></h3>
                <a href="<?php the_field('brewery-button-link'); ?>" title="<?php the_field('brewery-button-text'); ?>" class="bttn"><?php the_field('brewery-button-text'); ?></a>
            </div>
        </div>
        <div class="col-sm-8 col-xs-12 col-md-8 col-lg-8 p-left">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12 pubs-container p-top">
            <img class="menu-img" src="<?php the_field('Restaurant-background'); ?>" alt="background-img" />
                    <div class="titles">
                        <P><?php the_field('Restaurant-small-text'); ?></P>
                        <h3><?php the_field('Restaurant-big-text'); ?></h3>
                        <a href="<?php the_field('Restaurant-button-link'); ?>" title="<?php the_field('Restaurant-button-text'); ?>" class="bttn"><?php the_field('Restaurant-button-text'); ?></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 lodging-container p-top2 p-right">
            <img class="menu-img" src="<?php the_field('Lodging-background'); ?>" alt="background-img" />
                    <div class="titles">
                        <P><?php the_field('Lodging-small-text'); ?></P>
                        <h3><?php the_field('Lodging-big-text'); ?></h3>
                        <a href="<?php the_field('Lodging-button-link'); ?>" title="<?php the_field('Lodging-button-text'); ?>" class="bttn"><?php the_field('Lodging-button-text'); ?></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6  best-place-container p-top2 p-left">
            <img class="menu-img" src="<?php the_field('Party-background'); ?>" alt="background-img" />
                    <div class="titles">
                        <P><?php the_field('Party-small-text'); ?></P>
                        <h3><?php the_field('Party-big-text'); ?></h3>
                        <a href="<?php the_field('Party-button-link'); ?>" title="<?php the_field('Party-button-text'); ?>" class="bttn"><?php the_field('Party-button-text'); ?></a>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>