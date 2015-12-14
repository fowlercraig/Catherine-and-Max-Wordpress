<?php Themewrangler::setup_page();get_header(/***Template Name: Schedule */); ?>

<div id="content" class="page-content_wrapper">
	<div class="fs-row">
		<header class="page-header fs-cell fs-all-full">
			<h1><?php the_title(); ?></h1>
		</header>
		<article class="page-content fs-cell fs-all-full">
			<?php the_post(); the_content(); ?>
		</article>
	</div>
</div>

<?php get_footer(); ?>