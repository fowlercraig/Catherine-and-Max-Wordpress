<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<div class="wallpaper banner banner-overlay banner-large fs-cell fs-full-all" data-background-options='{"source":{"0px":"<?php the_field('main_image_mobile'); ?>","740px":"<?php the_field('main_image'); ?>"}}'>
	<div class="centered centered-full fs-all-full fs-contained">
		<div class="fs-row">
			<div class="fs-cell fs-all-full text-center">
				<br>
				<br>
				<br>
				<br>
				<img src="/assets/wedding.svg"  class="img" />
				<?php the_post(); ?>
				<?php the_content(); ?>
				<br>
				<a href="#basics"><h5>SCROLL DOWN FOR MORE</h5></a>
				<span id="basics"></span>
			</div>
		</div>
	</div>
</div>
<hr class="invisible">
<hr class="invisible">
<div class="fs-row">
	<header class="fs-cell fs-full-all text-center">
		<h3><?php the_field('main_section'); ?></h3>
		<hr class="divider-vertical down">
	</header>
	<div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
		<div class="fs-row">
			<div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3 text-center">
				<p><img src="/assets/date.svg" class="img-responsive" /></p>
				<?php the_field('the_date'); ?>
			</div>
			<hr class="divider fs-cell fs-lg-hide fs-md-hide fs-sm-3">
			<div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3 text-center">
				<p><img src="/assets/location.svg" class="img-responsive" /></p>
				<?php the_field('the_location'); ?>
			</div>
			<hr class="divider fs-cell fs-lg-hide fs-md-hide fs-sm-3">
			<div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3 fs-left text-center">
				<p><img src="/assets/love.svg" class="img-responsive" /></p>
				<?php the_field('the_story'); ?>
			</div>
			<span id="registry"></span>
		</div>
	</div>
</div>
<hr class="divider-vertical down">
<div class="fs-row">
	<div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center">
		<h3><?php the_field('registry_section'); ?></h3>
		<hr class="divider-vertical down">
		<div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center">
			<div class="register-wrapper">
			<div class="register fs-row">
				<?php while ( have_rows('registry') ) : the_row(); ?>
				<div class="register-item fs-cell fs-xl-4 fs-lg-4 fs-md-2 fs-sm-3 fs-padded">
					<a href="<?php the_sub_field('url'); ?>" target="blank"><img src="/assets/<?php the_sub_field('image'); ?>.svg"  class="" /><?php the_sub_field('name'); ?></a>
				</div>
				<?php endwhile; ?>
			</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	#content {
		background-image: <?php the_field('bottom_image'); ?>
	}
</style>

<?php get_footer(); ?>