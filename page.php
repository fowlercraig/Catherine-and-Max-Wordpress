<?php Themewrangler::setup_page();get_header(); ?>

<?php include locate_template('parts/page-header.php' ); ?>

<div class="page-content_wrapper">
	<div class="fs-row">
		<article class="page-content fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
			<?php the_post(); the_content(); ?>
		</article>
	</div>
</div>

<?php get_footer(); ?>