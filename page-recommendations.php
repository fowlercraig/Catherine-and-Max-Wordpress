<?php Themewrangler::setup_page();get_header(/***Template Name: Recommendations */); ?>

<?php include locate_template('parts/page-header.php' ); ?>

<div class="fs-row">
<?php 
	$rows = get_field('recommendations');
	foreach ($rows as $row):
	$name = $row['name'];
?>
<div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3 text-center"><?php echo $name; ?></div>
<?php endforeach; ?>
</div>

<?php get_footer(); ?>