<footer>
	<div class="container-fluid footer-container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 footer-logo">
				<img src="<?php the_field('footer-logo', 'options'); ?>" alt="logo-img" />
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 footer-icon">
				<?php if (have_rows('social', 'options')) : ?>
					<?php while(have_rows('social', 'options')) : 
						the_row(); ?>

				<a href="<?php the_sub_field('social-link'); ?>" target="_blank" title="social"><img src="<?php the_sub_field('social-icon'); ?>" alt="social-img" /></a>

					<?php endwhile;			
				endif; ?>
			</div>
		</div>
		<div class="row container-fluid mx-0 px-0">
			<div class="col-sm-12 col-md-12 px-0">
	  				<p class="footer-text"><?php the_field('footer-text', 'options'); ?></p>
	  		</div>
	  	</div>
	</div>
</footer>
		 <?php wp_footer(); ?>
</div>
	</body>
</html>