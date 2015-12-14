<?php Themewrangler::setup_page();get_header(/***Template Name: Schedule */); ?>

<?php include locate_template('parts/page-header.php' ); ?>

<div class="page-content_wrapper">
	<div class="fs-row">
		<article class="page-content fs-cell fs-all-full">
			<?php the_post(); the_content(); ?>
		</article>
		
		<?php
		  $args = array (
		    'posts_per_page' => -1,
		    'post_type'      => 'page',
		    'paged'          => $paged,
		    'post_parent'    => $post->ID,
		  );
		  $temp = $wp_query;
		  $wp_query = null;
		  $wp_query = new WP_Query();
		  $wp_query->query($args);
		  while ($wp_query->have_posts()) : $wp_query->the_post();
		?>

		<hr class="divider-vertical down short">

		<article class="page-content page-content_schedule fs-cell fs-lg-9 fs-mg-5 fs-sm-3 fs-centered">
			<?php include locate_template('parts/page-header.php' ); ?>
			<?php the_content(); ?>
		</article>

		<?php
		  endwhile;
		  $wp_query = null;
		  $wp_query = $temp;  // Reset
		?>

	</div>
</div>

<hr class="invisible">

<?php get_footer(); ?>