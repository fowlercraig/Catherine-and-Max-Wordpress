<?php Themewrangler::setup_page();get_header(/***Template Name: Travel */); ?>

<?php include locate_template('parts/page-header.php' ); ?>

<div class="page-content_wrapper">
	<div class="fs-row">
		<article class="page-content fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
			<?php the_post(); the_content(); ?>
		</article>
	</div>
</div>
<hr class="divider-vertical down short">
<div class="fs-row">
<div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
<div class="fs-row">
<?php 
	while ( have_rows('hotels') ) : the_row(); 
	$address = get_sub_field('address');
?>

<div class="fs-cell fs-lg-half fs-md-half fs-sm-3 text-center">
	<header>
		<h5><?php the_sub_field('name'); ?></h5>
		<h6><?php echo $address['address']; ?></h6>
	</header>
	<a href="<?php the_sub_field('website'); ?>" target="blank">Visit their site</a>
</div>

<?php endwhile; ?>

</div>
</div>

<hr class="invisible">
<div class="fs-cell fs-all-full"><div class="banner banner" id="map"></div></div>

</div>

<script>
	$(document).ready(function(){
		var LocsA = [
			<?php $number = count(get_field('hotels')); $count = 0 ;?>
			<?php while ( have_rows('hotels') ) : the_row(); $address = get_sub_field('address'); ?>

			{
		        lat: <?php echo $address['lat']; ?>,
		        lon: <?php echo $address['lng']; ?>,
		        title: "<?php the_sub_field('name'); ?>",
		        html: "<h4><?php the_sub_field('name'); ?></h4>",
		        icon: 'http://maps.google.com/mapfiles/markerA.png',
		    },
		    <?php endwhile; ?>
		    
		    {
		        lat: 29.964969,
		        lon: -90.049001,
		        title: "Venue",
		        html: "<h5>Marigny Opera House</h5>",
		        icon: '/assets/venue.png',
		    }
		]
		new Maplace({
		    locations: LocsA,
		    map_div: '#map',
		    show_markers: true,
		}).Load();
	});
</script>

<?php get_footer(); ?>